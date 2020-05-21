<?php

use Illuminate\Database\Seeder;

class brands extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('brands')->insert([
        	['id'=>1,'name'=>'Audi','from'=>'England','image'=>'audi.jpg'],
        	['id'=>2,'name'=>'Lamborghini','from'=>'England','image'=>'lambo.jpg'],
        	['id'=>3,'name'=>'Porsche','from'=>'England','image'=>'porsche.jpg'],
        	['id'=>4,'name'=>'Ferrari','from'=>'England','image'=>'ferrari.jpg'],
        	['id'=>5,'name'=>'Maserati','from'=>'England','image'=>'maserati.jpg'],
        ]);
    }
}
