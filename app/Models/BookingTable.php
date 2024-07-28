<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingTable extends Model
{
    protected $table = 'booking_table'; // Specify your table name if it's not the default

    protected $fillable = ['name', 'email', 'ambassador']; // Add all the fields you want to make mass assignable
}
