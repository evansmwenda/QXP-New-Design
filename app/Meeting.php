<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    //
    public $timestamps = false;
    protected $table = 'meetings';
    public $fillable = ['id','title','classTime','meetingID','course_id','attendeePW','moderatorPW','owner','start_date','description','start_time','attendees','end_date','end_time'];

}
