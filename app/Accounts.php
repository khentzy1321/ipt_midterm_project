<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accounts extends Model
{
    protected $fillable = ['id','user_id','acct_name','init_invest','start_date','remarks'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
