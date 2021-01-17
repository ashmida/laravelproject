<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class staff extends Model
{
    use HasFactory;
    protected $primaryKey = 'No';
    protected $fillable = ['User_pic','User_name','User_role','User_email','User_id'];
}
