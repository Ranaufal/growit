<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Detail_description extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function detail(): BelongsTo
    {
        return $this->belongsTo(Detail::class);
    }
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
