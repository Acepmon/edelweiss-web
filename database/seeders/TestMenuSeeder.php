<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TestMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->ftdMenus() as $ftdRoot) {
            $root = Menu::factory()->state(['name' => $ftdRoot['name'], 'status_cd' => '20'])->create();
            $prefix = '/collection/';

            foreach ($ftdRoot['children'] as $ftdHeading) {
                $heading = Menu::factory()->state(['name' => $ftdHeading['name'], 'status_cd' => '20', 'parent_id' => $root->id])->create();

                foreach ($ftdHeading['children'] as $ftdMenu) {
                    Menu::factory()->state(['name' => $ftdMenu['name'], 'status_cd' => '20', 'url' => url($prefix . Str::slug($ftdMenu['name'])), 'parent_id' => $heading->id])->create();
                }
            }
        }

        // Menu::factory()->count(rand(3, 10))->state(['parent_id' => null, 'url' => null])->create()->each(function ($menu) {

        //     if (rand(0, 1)) {
        //         Menu::factory()->count(rand(1, 5))->state(['parent_id' => $menu->id])->create()->each(function ($subMenu) {

        //             if (rand(0, 1)) {
        //                 Menu::factory()->count(rand(1, 5))->state(['parent_id' => $subMenu->id])->create();
        //             }

        //         });
        //     }

        // });
    }

    private function ftdMenus()
    {
        return [
            ['name' => 'Birthday', 'url' => '', 'children' => [
                ['name' => 'Featured Birthday Flowers', 'url' => '', 'children' => [
                    ['name' => 'Birthday Flowers', 'url' => ''],
                    ['name' => 'Best Seller Birthday Flowers', 'url' => ''],
                    ['name' => 'Birthday Roses', 'url' => ''],
                ]],
                ['name' => 'Birthday Flowers Delivered Today', 'url' => '', 'children' => [
                    ['name' => 'Same Day Birthday Flowers', 'url' => ''],
                ]],
                ['name' => 'Birthday Plants & Gifts', 'url' => '', 'children' => [
                    ['name' => 'Birthday Plans', 'url' => ''],
                    ['name' => 'Birthday Gifts', 'url' => ''],
                    ['name' => 'Birthday Gift Boxes', 'url' => ''],
                    ['name' => 'Birthday Teddy Bears', 'url' => ''],
                ]],
                ['name' => 'Gourmet Birthday Gifts', 'url' => '', 'children' => [
                    ['name' => 'Birthday Cookies', 'url' => ''],
                    ['name' => 'Birthday Cupcakes', 'url' => ''],
                    ['name' => 'Birthday Treats', 'url' => ''],
                ]],
                ['name' => 'Birthday by Recipient', 'url' => '', 'children' => [
                    ['name' => 'Birthday for Friends', 'url' => ''],
                    ['name' => 'Birthday for Him', 'url' => ''],
                    ['name' => 'Birthday for Mom', 'url' => ''],
                    ['name' => 'Birthday for Wife', 'url' => ''],
                ]],
                ['name' => 'Flowers for Birthday Milestones', 'url' => '', 'children' => [
                    ['name' => '21st Birthday Flowers', 'url' => ''],
                    ['name' => '30th Birthday Flowers', 'url' => ''],
                    ['name' => '40th Birthday Flowers', 'url' => ''],
                    ['name' => '50th Birthday Flowers', 'url' => ''],
                    ['name' => '60th Birthday Flowers', 'url' => ''],
                ]],
            ]],
            ['name' => 'Sympathy', 'url' => '', 'children' => [
                ['name' => 'Sympathy Flowers', 'url' => '', 'children' => [
                    ['name' => 'Sympathy Flowers', 'url' => ''],
                    ['name' => 'Same Day Sympathy Flowers', 'url' => ''],
                    ['name' => 'Sympathy Plants', 'url' => ''],
                ]],
                ['name' => 'Funeral Flowers & Plants', 'url' => '', 'children' => [
                    ['name' => 'Funeral Flowers', 'url' => ''],
                    ['name' => 'Funeral Sprays & Wreaths', 'url' => ''],
                    ['name' => 'Cremation Flowers', 'url' => ''],
                    ['name' => 'Funeral Plants', 'url' => ''],
                ]],
                ['name' => 'Sympathy Gifts', 'url' => '', 'children' => [
                    ['name' => 'Condolence Gifts', 'url' => ''],
                    ['name' => 'Sympathy Gift Baskets', 'url' => ''],
                ]],
            ]],
            ['name' => 'All Occasions', 'url' => '', 'children' => [
                ['name' => 'Upcoming Occasions', 'url' => '', 'children' => [
                    ['name' => 'Employee Appreciation Day', 'url' => ''],
                    ['name' => 'International Women\'s Day', 'url' => ''],
                    ['name' => 'National Doctor\'s Day', 'url' => ''],
                ]],
                ['name' => 'All Occasions', 'url' => '', 'children' => [
                    ['name' => 'Anniversary', 'url' => ''],
                    ['name' => 'Back to School', 'url' => ''],
                    ['name' => 'Congratulations', 'url' => ''],
                    ['name' => 'Get Well Soon', 'url' => ''],
                    ['name' => 'Graduation', 'url' => ''],
                    ['name' => 'I\'m sorry', 'url' => ''],
                    ['name' => 'Just Because', 'url' => ''],
                    ['name' => 'Love & Romance', 'url' => ''],
                    ['name' => 'New Baby', 'url' => ''],
                    ['name' => 'Retirement', 'url' => ''],
                    ['name' => 'Thank you', 'url' => ''],
                    ['name' => 'Thinking of you', 'url' => ''],
                    ['name' => 'Wedding', 'url' => ''],
                ]],
                ['name' => 'All Holidays', 'url' => '', 'children' => [
                    ['name' => '4th of July', 'url' => ''],
                    ['name' => 'Best Friends Day', 'url' => ''],
                    ['name' => 'Boss\'s Day', 'url' => ''],
                    ['name' => 'Lunar New Year', 'url' => ''],
                    ['name' => 'Christmas', 'url' => ''],
                    ['name' => 'Easter', 'url' => ''],
                    ['name' => 'Fall Occasions', 'url' => ''],
                    ['name' => 'Father\'s Day', 'url' => ''],
                    ['name' => 'Friendsgiving', 'url' => ''],

                    ['name' => 'Galentine\'s Day', 'url' => ''],
                    ['name' => 'Hanukkah', 'url' => ''],
                    ['name' => 'Labor Day', 'url' => ''],
                    ['name' => 'Memorial Day', 'url' => ''],
                    ['name' => 'Mother\'s Day', 'url' => ''],
                    ['name' => 'New Years', 'url' => ''],
                    ['name' => 'Passover', 'url' => ''],
                ]],
            ]],
            ['name' => 'Flowers', 'url' => '', 'children' => [
                ['name' => 'Featured Flowers', 'url' => '', 'children' => [
                    ['name' => 'Best Seller Flowers', 'url' => ''],
                    ['name' => 'New FLowers', 'url' => ''],
                    ['name' => 'FLowers & Gift Bundles', 'url' => ''],
                    ['name' => 'Winter Flowers', 'url' => ''],
                    ['name' => 'Luxury Flowers', 'url' => ''],
                    ['name' => 'Sale Flowers', 'url' => ''],
                ]],
                ['name' => 'Flowers by Delivery Type', 'url' => '', 'children' => [
                    ['name' => 'Flowers Delivered Same Day', 'url' => ''],
                    ['name' => 'International Flower Delivery', 'url' => ''],
                    ['name' => 'Florist Delivered Flowers', 'url' => ''],
                    ['name' => 'Flowers Delivered in a Basket', 'url' => ''],
                    ['name' => 'Flowers Delivered in a Gift Box', 'url' => ''],
                    ['name' => 'Flowers Delivered in a Vase', 'url' => ''],
                ]],
                ['name' => 'Winter Flowers', 'url' => '', 'children' => [
                    ['name' => 'Alstroemeria', 'url' => ''],
                    ['name' => 'Asiatic Lilies', 'url' => ''],
                    ['name' => 'Carnations', 'url' => ''],
                    ['name' => 'Hydrangea', 'url' => ''],
                    ['name' => 'Lilies', 'url' => ''],
                    ['name' => 'Roses', 'url' => ''],
                    ['name' => 'Snapdragons', 'url' => ''],
                    ['name' => 'Tulips', 'url' => ''],
                ]],
                ['name' => 'Flowers by Variety', 'url' => '', 'children' => [
                    ['name' => 'Aster', 'url' => ''],
                    ['name' => 'Calla Lilies', 'url' => ''],
                    ['name' => 'Daisies', 'url' => ''],
                    ['name' => 'Delphinium', 'url' => ''],
                    ['name' => 'Gerbera Daisies', 'url' => ''],
                    ['name' => 'Gladiolus', 'url' => ''],
                    ['name' => 'Iris', 'url' => ''],
                    ['name' => 'Larkspur', 'url' => ''],
                    ['name' => 'Lisianthus', 'url' => ''],
                    ['name' => 'Mixed Flowers', 'url' => ''],
                    ['name' => 'Orchids', 'url' => ''],
                    ['name' => 'Perennials', 'url' => ''],
                    ['name' => 'Sunflowers', 'url' => ''],
                    ['name' => 'Stargazer Lilies', 'url' => ''],
                    ['name' => 'Wildflowers', 'url' => ''],
                ]],
                ['name' => 'Flowers by Color', 'url' => '', 'children' => [
                    ['name' => 'Blue Flowers', 'url' => ''],
                    ['name' => 'Green Flowers', 'url' => ''],
                    ['name' => 'Lavender Flowers', 'url' => ''],
                    ['name' => 'Orange Flowers', 'url' => ''],
                    ['name' => 'Pink Flowers', 'url' => ''],
                    ['name' => 'Purple Flowers', 'url' => ''],
                    ['name' => 'Rainbow Flowers', 'url' => ''],
                    ['name' => 'Red Flowers', 'url' => ''],
                    ['name' => 'White Flowers', 'url' => ''],
                    ['name' => 'Yellow Flowers', 'url' => ''],
                ]],
            ]],
            ['name' => 'Plants', 'url' => '', 'children' => [
                ['name' => 'Featured Plants', 'url' => '', 'children' => [
                    ['name' => 'Best Seller Plants', 'url' => ''],
                    ['name' => 'New Plants', 'url' => ''],
                    ['name' => 'Memorial Plants', 'url' => ''],
                    ['name' => 'Same Day Plants', 'url' => ''],
                ]],
                ['name' => 'Plants By Color', 'url' => '', 'children' => [
                    ['name' => 'Green Plants', 'url' => ''],
                    ['name' => 'Pink Plants', 'url' => ''],
                    ['name' => 'Yellow Plants', 'url' => ''],
                ]],
                ['name' => 'Plants By Season', 'url' => '', 'children' => [
                    ['name' => 'Winter Plants', 'url' => ''],
                ]],
                ['name' => 'Flowering Plants', 'url' => '', 'children' => [
                    ['name' => 'All Flowering Plants', 'url' => ''],
                    ['name' => 'Azalea Plants', 'url' => ''],
                    ['name' => 'Bonsai Plants', 'url' => ''],
                    ['name' => 'Orchid Plants', 'url' => ''],
                    ['name' => 'Mini Rose Plants', 'url' => ''],
                ]],
                ['name' => 'Indoor Green Plants', 'url' => '', 'children' => [
                    ['name' => 'Bonsai & Bamboo Trees', 'url' => ''],
                    ['name' => 'Money Trees', 'url' => ''],
                    ['name' => 'Peace Lily Plants', 'url' => ''],
                    ['name' => 'Philodendron Plants', 'url' => ''],
                    ['name' => 'Snake Plants', 'url' => ''],
                    ['name' => 'Succulents & Air Plants', 'url' => ''],
                    ['name' => 'Desk Plants', 'url' => ''],
                    ['name' => 'Dish Garden Plants', 'url' => ''],
                    ['name' => 'Fast Growing Plants', 'url' => ''],
                    ['name' => 'Floor Plants', 'url' => ''],
                    ['name' => 'Low Light Plants', 'url' => ''],
                    ['name' => 'Potted Plants', 'url' => ''],
                ]],
            ]],
        ];
    }
}
