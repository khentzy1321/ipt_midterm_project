<?php

use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    //protected $fillable = ['id','user_id','acct_name','init_invest','start_date','remarks'];
    {
        $account_list = [
            [
                'id' => 01,
                'user_id' => 1,
                'acct_name' => 'gojokenzy',
                'init_invest' => 1366346.78,
                'start_date' => '2021-09-22',
            ],
            [
                'id' => 02,
                'user_id' => 2,
                'acct_name' => 'yujikenz',
                'init_invest' => 33987766.78,
                'start_date' => '2021-09-23',
            ],
            [
                'id' => 03,
                'user_id' => 3,
                'acct_name' => 'itadorikenz',
                'init_invest' => 627246.78,
                'start_date' => '2021-09-24',
            ],
        ];
        foreach ($account_list as $account){
            \App\Accounts::create($account);
        }
    }
}
