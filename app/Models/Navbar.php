<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Navbar extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function navbar_menus()
    {
        return $this->hasMany(Navbar_menus::class);
    }
}
