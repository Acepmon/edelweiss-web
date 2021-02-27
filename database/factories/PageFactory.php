<?php

namespace Database\Factories;

use App\Models\Collection;
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
        $status = CommonCode::whereNotIn('comm2_cd', ['$$'])->where('comm1_cd', 'B02')->inRandomOrder()->first();
        $title = $this->faker->text(100);
        $prefixes = ['products/', 'collections/', 'profiles/', 'flowers/'];
        $cover = url('images/covers/' . rand(1, 20) . '.jpg');

        $collection = Collection::inRandomOrder()->first();

        return [
            'title' => $title,
            'subtitle' => $this->faker->text(250),
            'cover' => $cover,

            // 'url' => url(Arr::random($prefixes) . Str::slug($title)),
            'url' => url(Str::slug($title)),
            'slug' => Str::slug($title),

            'status_cd' => $status->comm2_cd,
            'body' => $this->faker->randomHtml(8, 4),

            'collection_id' => $collection->id,
        ];
    }
}
