<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ThemeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('truncate table themes');
        DB::table('themes')->insert([
            ['theme'=>'theme_blue', 'name'=>'Gray-Blue'],
            ['theme'=>'theme_green', 'name'=>'Dark Blue-Green'],
            ['theme'=>'theme_red', 'name'=>'Gray-Purple'],
        ]);

    }
}
