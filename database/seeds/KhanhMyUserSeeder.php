<?php

use Illuminate\Database\Seeder;

class KhanhMyUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
        	[
        		'username'=>'admin',
        		'email'	=>'admin@gmail.com',
        		'password'=>bcrypt('123456'),
        		'level'	=> 1
        	],
        	[
        		'username'=>'huutx',
        		'email'	=>'huutx@vinsofts.net',
        		'password'=>bcrypt('123456'),
        		'level'	=> 1
        	]
        ];
        DB::table('km_users')->insert($data);
    }
}
