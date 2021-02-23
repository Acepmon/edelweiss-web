<?php

namespace Database\Factories;

use App\Models\CommonCode;
use App\Models\Menu;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

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
        $name = $this->faker->text(25);
        $status = CommonCode::whereNotIn('comm2_cd', ['$$'])->where('comm1_cd', 'B03')->inRandomOrder()->first();

        return [
            'name' => $name,
            'url' => url(Str::slug($name)),
            'status_cd' => $status->comm2_cd,
        ];
    }
}
