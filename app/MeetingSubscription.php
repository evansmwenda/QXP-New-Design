<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MeetingSubscription extends Model
{
    public $timestamps = false;
    protected $table = 'meeting_subscriptions';
    public $fillable=['user_id','expiry_on'];

    public function package(){
        return $this->belongsTo('App\Package');
    }
}
