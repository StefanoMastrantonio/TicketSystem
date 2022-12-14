<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //use HasFactory;
    protected $fillable =['id', 'name']; 

    public function tickets() 
    {
        return $this->hasMany(Ticket::class);
    }

    public function operators()
    {
        return $this->belongsToMany('App\Operator', 'table_example', 'operator_id', 'category_id');
    }
}  