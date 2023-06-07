<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;
    // protected $fillable = [
    //     'uuid','user_id','title','text' 
    //     // Add 'user_id' to the fillable attributes
    //     // Other fillable attributes...
    // ];
    protected $guarded = [];
    public function getRouteKeyName()
    {
        return 'uuid';
    }
}