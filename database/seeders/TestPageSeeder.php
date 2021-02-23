<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class TestPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Page::factory()->count(30)->create()->each(function ($page) {
            $page->metas()->createMany([
                ['meta_key' => 'title', 'meta_value' => $page->title],
                ['meta_key' => 'description', 'meta_value' => $page->subtitle],
                ['meta_key' => 'url', 'meta_value' => $page->url],
            ]);
        });
    }
}
