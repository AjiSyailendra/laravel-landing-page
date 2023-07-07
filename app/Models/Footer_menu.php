<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer_menu extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function footer()
    {
        return $this->belongsTo(Footer::class);
    }

    public function footer_sub_menus()
    {
        return $this->hasMany(Footer_sub_menu::class);
    }
}
