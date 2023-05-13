<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    use HasFactory;
    protected $fillable = ['style_id', 'name', 'color_name'];

    // Define the relationship with style
    public function style()
    {
        return $this->belongsTo(Style::class);
    }
}
