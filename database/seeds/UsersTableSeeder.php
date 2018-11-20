<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds
    {
        DB::table('users')->.
     *
     * @return void
        */
    public function run(){
//             DB::table('user')->insert([
//            'name' => str_random(10),
//            'email' =>str_random(10).'@gmail.com',
//            'password' => bcrypt('secret'),
//        ]);
        //调用模型工厂一次性填充30个数
        factory(\App\User::class,30)->create();
        //修改1数据为正式数据
        $user = \App\User::find(1);
        $user->name = 'sally';
        $user->email = '1447481528@qq.com';
        $user->password = bcrypt('111111');
        $user->is_admin = true;
        $user->save();

    }
}