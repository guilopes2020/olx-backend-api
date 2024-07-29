<?php

namespace App\Models;

use App\Models\User;
use App\Models\Advertise;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class State extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug'
    ];

    public function advertises(): HasMany
    {
        return $this->hasMany(Advertise::class);
    }

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
