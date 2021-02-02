<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$data = [
    		[
    			'cate_name'=>'Rau củ quả',
    			'cate_slug'=>Str::slug('Rau củ quả')
    		],
    		[
    			'cate_name'=>'Trái cây',
    			'cate_slug'=>Str::slug('Trái cây')
    		],
    	];
        DB::table('vp_categories')->insert($data);
    }
}
