<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 
        'number', 
        'user_id', 
        'operator_id', 
        'starting_date', 
        'closing_date', 
        'priority', 
        'status', 
        'user_feedback',
        'category_id'
    ];
    // protected $table = 'tickets';

    public function user() 
    {
        return $this->belongsTo(User::class);
    }

    public function operator() 
    {
        return $this->belongsTo(Operator::class);
    }

    public function category() 
    {
        return $this->belongsTo(Category::class);
    }

}