<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            [
                'name'=>'ali',
                'email'=>'popo@hotmail.com',
            ],
            [
                'name'=>'Elvis',
                'email'=>'papo@hotmail.com',
            ],
            [
                'name'=>'jawad',
                'email'=>'pupo@hotmail.com',
            ],
            [
                'name'=>'kevin',
                'email'=>'pipo@hotmail.com',
            ],
            [
                'name'=>'elias',
                'email'=>'pepo@hotmail.com',
            ],
            
        ]);
    }
}
