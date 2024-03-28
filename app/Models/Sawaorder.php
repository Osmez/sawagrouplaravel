<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Sawaorder extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'service_id',
        'title',
        'description',
        'type',
        'file',
        'url',
        'completed',
        'qr',
    ];

    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function service():BelongsTo{
        return $this->belongsTo(Service::class);
    }

    public function completedorder():HasOne{
        return $this->hasOne(Completeorder::class);
    }
}
