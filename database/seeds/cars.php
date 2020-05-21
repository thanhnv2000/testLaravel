<?php

use Illuminate\Database\Seeder;

class cars extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('cars')->insert([
        	['id'=>1,'name'=>'Audi-R8','price'=>100000,'detail'=>'Xe vip lun nhe','image_feature'=>'audi.jpg','id_brand'=>1],
        	['id'=>2,'name'=>'Lamborghini','price'=>100000,'detail'=>'Xe vip lun nhe','image_feature'=>'lambo.jpg','id_brand'=>2],
        	['id'=>3,'name'=>'Porsche','price'=>100000,'detail'=>'Xe vip lun nhe','image_feature'=>'porsche.jpg','id_brand'=>3],
        	['id'=>4,'name'=>'Ferrari','price'=>100000,'detail'=>'Xe vip lun nhe','image_feature'=>'ferrari.jpg','id_brand'=>4],
        	['id'=>5,'name'=>'Maserati','price'=>100000,'detail'=>'Xe vip lun nhe','image_feature'=>'maserati.jpg','id_brand'=>5],
        ]);
    }
}
