<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    //
    protected $table="complaint";

    public function user(){
    return $this->belongsTo(User::Class , 'user_id');
    }
}
