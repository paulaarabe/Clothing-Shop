<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Style extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description'];

    // Define the relationship with parts
    public function parts()
    {
        return $this->hasMany(Part::class);
    }
}

