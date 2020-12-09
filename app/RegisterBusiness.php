<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegisterBusiness extends Model
{
    //
    protected $table='register_business';
    public $fillable=['name','business_name','business_email','business_phone','country','business_size'];

}
