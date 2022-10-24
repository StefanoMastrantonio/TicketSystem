<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'title', 'starting_date', 'closing_date', 'description'];
    // protected $table = 'tickets';
}
