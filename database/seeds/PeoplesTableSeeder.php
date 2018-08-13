<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class PeoplesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('peoples')->insert([
        	['name'=>'Phuong Tran','birthday'=> Carbon::parse('2000-01-01'),'location'=>'Hà Nội'],
        	['name'=>'Tran','birthday'=> Carbon::parse('2002-01-01'),'location'=>'Hà Nội'],
        	['name'=>'Tran','birthday'=> Carbon::parse('2019-01-01'),'location'=>'Hà Nội'],
        	['name'=>'Phuong Tran','birthday'=> Carbon::parse('2000-01-01'),'location'=>'Sai Gòn'],
        ]);
    }
}
