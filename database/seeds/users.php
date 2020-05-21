<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mk = Hash::make('12345');
        DB::table('users')->insert([
        	['id'=>1,'username'=>'taikhoan1','password'=>$mk,'fullname'=>'nametest1','avatar'=>'macdinh.png','email'=>'nichphu@gmail.com'],
        	['id'=>2,'username'=>'taikhoan2','password'=>$mk,'fullname'=>'nametest2','avatar'=>'macdinh.png','email'=>'nichphu@gmail.com'],
        	['id'=>3,'username'=>'taikhoan3','password'=>$mk,'fullname'=>'nametest3','avatar'=>'macdinh.png','email'=>'nichphu@gmail.com'],
        	['id'=>4,'username'=>'taikhoan4','password'=>$mk,'fullname'=>'nametest4','avatar'=>'macdinh.png','email'=>'nichphu@gmail.com'],
        	['id'=>5,'username'=>'taikhoan5','password'=>$mk,'fullname'=>'nametest5','avatar'=>'macdinh.png','email'=>'nichphu@gmail.com'],
        ]);
    }
}
