<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Detail extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function detaildesc(): BelongsTo
    {
        return $this->belongsTo(Detail_description::class);
    }
}
