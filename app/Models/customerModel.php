<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customerModel extends Model
{
    protected $table = 'customer';

    use HasFactory;

    public $fillable = ['custName','custEmail', 'custPwd', 'custPhoneNum', 'custAddress','custPic'];
}
