<?php

namespace Database\Factories;

use App\Models\CommonCode;
use App\Models\Page;
use Illuminate\Database\Eloquent\Factories\Factory;

class PageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Page::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $type = CommonCode::whereNotIn('comm2_cd', ['$$'])->where('comm1_cd', 'B01')->inRandomOrder()->first();
        $status = CommonCode::whereNotIn('comm2_cd', ['$$'])->where('comm1_cd', 'B02')->inRandomOrder()->first();

        return [
            //
        ];
    }
}
