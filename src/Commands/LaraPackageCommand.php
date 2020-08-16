<?php

namespace Jongravois\LaraPackage\Commands;

use Illuminate\Console\Command;

class LaraPackageCommand extends Command
{
    public $signature = 'lara-package';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
