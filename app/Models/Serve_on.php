<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Serve_on extends Model
{
    protected $fillable = [
        'pcr', 'vaccine', 'booster', 'date', 'center_id'
    ];
}
