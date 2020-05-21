<?php

use Illuminate\Database\Seeder;

class images extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
        	['id'=>1,'image'=>'audi-a3.jpg','id_car'=>1],
        	['id'=>2,'image'=>'audi-a4.jpg','id_car'=>1],
        	['id'=>3,'image'=>'audi-a5.jpg','id_car'=>1],
        	['id'=>4,'image'=>'lambo-1.jpg','id_car'=>2],
        	['id'=>5,'image'=>'lambo-2.png','id_car'=>2],
        ]);
    }
}
