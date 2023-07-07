<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Navbar_menus extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function navbar()
    {
        return $this->belongsTo(Navbar::class, 'id_navbar');
    }
}
