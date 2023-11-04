<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;

    protected  $guarded = ["created_at", "updated_at", "delete_at"];


    public function category()
    {
        return $this->belongsTo(ArticleCategorie::class,'article_categorie_id');
    }

    public function scopeActive(Builder $query): void
    {
        $query->where('statut', 1);
    }
}
