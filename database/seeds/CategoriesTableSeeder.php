<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
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
        		'cate_name'=>'iPhone',
        		'cate_slug'=>str_slug('iphone')
        	],
        	[
        		'cate_name'=>'SamSung',
        		'cate_slug'=>str_slug('samsung')
        	]
        ];
        DB::table('category_table')->insert($data);
    }
}
