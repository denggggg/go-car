<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class driverModel extends Model
{
    protected $table = 'driver';

    use HasFactory;

    public $fillable = ['driverName','driverEmail', 'driverPwd', 'driverPhone', 'driverAdress', 'driverLicense','driverPic'];
}