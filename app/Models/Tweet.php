<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tweet extends Model
{
    use Likable;
    use HasFactory;

    protected $guarded = [];

    public function user(): belongsTo
    {
        return $this->belongsTo(User::class);
    }


}
