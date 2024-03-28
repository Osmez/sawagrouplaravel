<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_en',
        'title_ar',
        'title_jp',
        'order',
        'price',
        'icon',
    ];

    public function geticon(){
        if( $this->icon != 'icon'){
            return url('storage/',$this->avatar);
        }
        return url('imgs/profileunknown.png');
    }
}
