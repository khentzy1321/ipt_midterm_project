<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_list = [
            [
              'id' => 01,
              'lname' => 'Abarquez',
              'fname' => 'Gojo',
              'address' => 'tokyo',
              'phone' => '093087464',
              'email' => 'gojo@gmail.com',
              'password' => bcrypt('ypassword')  
            ],
            [
               'id' => 02,
               'lname' => 'Satoru',
               'fname' => 'itadori',
               'address' => 'BOHOL',
               'phone' => '09087633987',
               'email' => 'itadori@gmail.com',
               'password' => bcrypt('ypassword')  
             ],
             [
               'id' => 03,
               'lname' => 'yuji',
               'fname' => 'ishida',
               'address' => 'japan',
               'phone' => '09087886958',
               'email' => 'ishida@gmail.com',
               'password' => bcrypt('ypassword')  
             ],
        ];
        foreach ($user_list as $user){
           \App\User::create($user);
        }
    }
}
