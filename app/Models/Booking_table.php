<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking_table extends Model
{
   public $table = 'appointments';
   public $primarykey = 'id';
   public $incrementing = true;
   public $timestamps = false;
}
