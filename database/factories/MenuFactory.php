<?php

namespace Database\Factories;

use App\Models\CommonCode;
use App\Models\Menu;
use App\Models\Page;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class MenuFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Menu::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $page = Page::where('status_cd', '20')->inRandomOrder()->first();
        $status = CommonCode::whereNotIn('comm2_cd', ['$$'])->where('comm1_cd', 'B03')->inRandomOrder()->first();

        return [
            'name' => $this->faker->text(25),
            'url' => $page->url,
            'status_cd' => $status->comm2_cd,
        ];
    }
}
