<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    //
    public $timestamps = false;
    protected $table = 'meetings';
    public $fillable = ['id','title','classTime','meetingID','course_id','attendeePW','moderatorPW','owner','today','description','time','attendees'];

}
