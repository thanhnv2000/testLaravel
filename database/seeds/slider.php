<?php

use Illuminate\Database\Seeder;

class slider extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           DB::table('slider')->insert([
        	['id'=>1,'image'=>'https://cdn.motor1.com/images/mgl/JmVR6/s3/2019-audi-r8-onlocation.jpg','link'=>'link','title'=>'Mẫu Audi R8 mới nhất'],
        	['id'=>2,'image'=>'https://media.magazine.ferrari.com/images/2019/02/27/170304506-c1bcf028-b513-45f6-9f27-0cadac619c3d.jpg','link'=>'link','title'=>'Ferrari động cơ bứt tốc'],
        	['id'=>3,'image'=>'https://postmediadriving.files.wordpress.com/2017/11/lambo-concept-2.jpg','link'=>'link','title'=>'Lamborgili khỏe khắn hơn CR7'],
 
        ]);
    }
}
