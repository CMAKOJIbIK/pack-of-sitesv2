<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('truncate table user_profiles');
        DB::table('user_profiles')->insert([
            ['user_id'=>1, 'name'=>'kostya', 'surname' =>'vegrenovskiy', 'mail'=>'kvegrenovskiy@gmail.com', 'phone' => '+380973173750', 'telegram' => 5057038547],
            ['user_id'=>2, 'name'=>'Sergey', 'surname' =>'Nikitchenko', 'mail'=>'smurf@gmail.com', 'phone' => '+3809765678', 'telegram' => 138801571],
            ['user_id'=>3, 'name'=>'Nikita', 'surname' =>'Kvish', 'mail'=>'kvishh@gmail.com', 'phone' => '+3806654789', 'telegram' => 5912392533],
        ]);
    }
}
