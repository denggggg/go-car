<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bookingModel extends Model
{
    protected $table = 'booking';
    use HasFactory;
    public $fillable = ['custPickUpLoc', 'custDropLoc', 'bookStatus', 'custID', 'driverID'];
}
