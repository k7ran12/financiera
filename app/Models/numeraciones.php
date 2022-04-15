<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class numeraciones extends Model
{
    public $timestamps = false;
    protected $fillable = ['codigo','correlacion'];
}
