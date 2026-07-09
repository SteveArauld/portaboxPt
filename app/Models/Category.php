<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{

    use HasTranslations;
    protected $fillable = ['name', 'slug', 'description'];

    public $translatable = ['name', 'description'];

    public function articles(): HasMany
    {
        return $this->hasMany(Article::class);
    }
}