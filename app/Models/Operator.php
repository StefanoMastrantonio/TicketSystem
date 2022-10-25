<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operator extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'id', 'email', 'password'];
   //protected $table = 'operators';

   public function tickets() 
   {
       return $this->hasMany(Ticket::class);
   }

   public function messages() 
   {
    return $this->hasMany(Message::class);
   }

   public function categories() 
   {
    return $this->belongsToMany(Category::class)->withPivot('category_id');
   }

}
