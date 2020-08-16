<?php namespace Jongravois\LaraPackage\Tests\Feature\Commands;

use Jongravois\LaraPackage\Tests\TestCase;

class SkeletonCommandTest extends TestCase
{
    /** @test */
    public function skeleton_command_works () {
        $this->artisan('lara-package')
            ->assertExitCode(0);
    } // end test
}
