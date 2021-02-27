<?php

namespace Database\Factories;

use App\Models\Banner;
use App\Models\CommonCode;
use App\Models\Page;
use Illuminate\Database\Eloquent\Factories\Factory;

class BannerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Banner::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $location = CommonCode::whereNotIn('comm2_cd', ['$$'])->where('comm1_cd', 'B04')->inRandomOrder()->first();
        $status = CommonCode::whereNotIn('comm2_cd', ['$$'])->where('comm1_cd', 'B05')->inRandomOrder()->first();
        $page = Page::where('status_cd', '20')->inRandomOrder()->first();

        return [
            'location_cd' => $location->comm2_cd,
            'status_cd' => $status->comm2_cd,
            'banner' => url('images/covers/' . rand(1, 20) . '.jpg'),

            'title' => $this->faker->text(20),
            'description' => $this->faker->text(100),
            'button' => 'Explore More',
            'url' => $page->url,
        ];
    }
}
