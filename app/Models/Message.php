<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'message', 
        'message_date', 
        'operator_id',
        'user_id', 
        'ticket_id' ];

        public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }
    public function operator()
    {
        return $this->belongsTo(Operator::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
