<?php

namespace App\Models;

use App\Models\User;
use App\Models\State;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Advertise extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'category_id',
        'state_id',
        'title',
        'price',
        'isNegotiable',
        'description'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function state(): BelongsTo
    {
        return $this->belongsTo(State::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
