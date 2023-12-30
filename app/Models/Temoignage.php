<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Temoignage extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'profession',
        'description',
        'iamge_url',
        'statut'
    ];

    public function scopeActive(Builder $query): void
    {
        $query->where('statut', 1);
    }
}
