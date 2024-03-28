<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Completeorder extends Model
{
    use HasFactory;

    protected $fillable = [
        'sawaorder_id',
        'desc',
        'file',
    ];

    public function sawaorder():BelongsTo{
        return $this->belongsTo(Sawaorder::class);
    }
}
