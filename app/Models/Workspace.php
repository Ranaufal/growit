<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Workspace extends Model
{
    use HasFactory;
    protected $guarded = [];
    // public function user():HasMany
    // {
    //     return $this->hasMany(User::class);
    // }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
