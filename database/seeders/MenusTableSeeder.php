<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class MenusTableSeeder extends Seeder
{
    private $faker;

    public function __construct()
    {
        $this->faker = Faker::create();
    }

    public function run()
    {
        // Parent Menus (Total: 5)
        foreach (range(1, 5) as $index):
            $parentMenu = $this->createMenu();

//            if ($index <= 2):
                // Child Menus  ( Random 1 to 4 for each parent menu)
                foreach (range(1, rand(1, 4)) as $index):
                    $childMenu = $this->createMenu($parentMenu->id);

                    // Child > Child Menus  ( Random 1 to 4 for each child menu)
                    foreach (range(1, rand(1, 4)) as $index):
                        $this->createMenu($childMenu->id);
                    endforeach;

                endforeach;
//            endif;

        endforeach;

    }

    private function createMenu($parentMenuId = null)
    {
        $menu = Menu::create([
            'parent_id' => $parentMenuId,
            'name' => $this->faker->words(2, 'true')
        ]);
        return $menu;
    }
}
