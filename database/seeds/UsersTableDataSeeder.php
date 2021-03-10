<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 3; $i++) { 
	    	User::create([
                'name'=>'Seller',
                'email'=>'seller@gmail.com',
                'type'=>'seller',
                'password'=> bcrypt('123456'),
	        ]);
    	}
    }
}
