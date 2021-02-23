<?php

namespace Database\Factories;

use App\Models\CommonCode;
use App\Models\Page;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

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
        $title = $this->faker->text(100);
        $prefixes = ['products/', 'collections/', 'profiles/', 'flowers/'];
        $cover = url('covers/' . rand(1, 20) . '.jpg');

        return [
            'title' => $title,
            'subtitle' => $this->faker->text(250),
            'cover' => $cover,

            // 'url' => url(Arr::random($prefixes) . Str::slug($title)),
            'url' => url(Str::slug($title)),
            'slug' => Str::slug($title),

            'type_cd' => $type->comm2_cd,
            'status_cd' => $status->comm2_cd,
            'body' => $type->comm2_cd == 'static' ? $this->faker->randomHtml(3, 4) : null,
        ];
    }
}
