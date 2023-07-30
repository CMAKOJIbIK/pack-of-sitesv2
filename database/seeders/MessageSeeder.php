<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            DB::statement('truncate table messages');
            DB::table('messages')->insert([
                ['name'=>'kostya', 'surname'=>'vegrenovskiy', 'gmail'=>'kvegrenovskiy@gmail.com', 'message'=>'write me'],
            ]);

        }
    }
}
