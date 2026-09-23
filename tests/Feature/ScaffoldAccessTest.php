<?php

namespace Tests\Feature;

use Tests\TestCase;

class ScaffoldAccessTest extends TestCase
{
    public function test_internal_page_previews_are_unavailable_in_production(): void
    {
        $this->app->instance('env', 'production');

        foreach (['/mahasiswa/dashboard', '/petugas/dashboard', '/admin/dashboard'] as $url) {
            $this->get($url)->assertNotFound();
        }
    }
}
