<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SchoolRegistration extends Model
{
    protected $table = '_school_registrations';
    protected $guarded = ['id', 'created_at', 'updated_at'];
}
