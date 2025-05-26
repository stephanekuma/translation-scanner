<?php

namespace Stekos\ScanTranslations\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class ScanTranslationsCommand extends Command
{
    public $signature = 'translations:scan';

    public $description = 'Scan PHP and Blade files for translatable strings';

    public function handle(): void
    {
        $this->info('🔍 Scanning files for translations...');

        $paths = [
            base_path('app'),
            base_path('resources/views'),
            base_path('routes'),
        ];

        $regex = '/(?:
            __\(                             # __(...)
            |trans\(                         # trans(...)
            |@lang\(                         # @lang(...)
            )\s*                             # optional whitespace
            (["\'])                         # capture opening quote
            (.*?)                           # capture content
            \1                              # match same quote
            \s*[\),]/x';

        $translations = [];

        foreach ($paths as $path) {
            $files = File::allFiles($path);

            foreach ($files as $file) {
                if (! preg_match('/\.(php|blade\.php)$/', $file)) {
                    continue;
                }

                $content = File::get($file->getPathname());

                if (preg_match_all($regex, $content, $matches)) {
                    foreach ($matches[2] as $key) {
                        $translations[$key] = $key;
                    }
                }
            }
        }

        ksort($translations);

        $phpContent = "<?php\n\nreturn [\n";
        foreach ($translations as $key => $value) {
            $escapedKey = addslashes($key);
            $escapedValue = addslashes($value);
            $phpContent .= "    '{$escapedKey}' => '{$escapedValue}',\n";
        }
        $phpContent .= "];\n";

        $outputPath = lang_path('en/generated.php');

        File::ensureDirectoryExists(dirname($outputPath));
        File::put($outputPath, $phpContent);

        $this->info("✅ Translations extracted in : $outputPath");
        $this->info('🔑 Number of keys found : '.count($translations));
    }
}
