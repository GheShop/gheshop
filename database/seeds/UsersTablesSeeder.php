<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->truncate();
        App\Models\User::create([
            'name'=>'badman',
            'email'=>'badman@gmail.com',
            'password'=> bcrypt('lfoangia@596'),
            'level'=>1
        ]);
    }
}
