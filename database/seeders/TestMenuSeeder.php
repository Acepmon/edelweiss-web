<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;

class TestMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menu::factory()->count(5)->state(['parent_id' => null])->create()->each(function ($menu) {

            if (rand(0, 1)) {
                Menu::factory()->count(rand(1, 5))->state(['parent_id' => $menu->id])->create()->each(function ($subMenu) {

                    if (rand(0, 1)) {
                        Menu::factory()->count(rand(1, 5))->state(['parent_id' => $subMenu->id])->create();
                    }

                });
            }

        });
    }
}
