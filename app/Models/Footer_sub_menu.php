<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer_sub_menu extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function footer_menu()
    {
        return $this->belongsTo(Footer_menu::class);
    }
}
