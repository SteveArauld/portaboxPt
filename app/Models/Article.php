<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Article extends Model
{
    use HasTranslations;

    protected $fillable = [
        'name', 
        'slug', 
        'sku', 
        'price', 
        'old_price', 
        'discount_percentage', 
        'short_description', 
        'description', 
        'link', 
        'stock', 
        'category_id'
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'old_price' => 'decimal:2',
        'stock' => 'integer',
        'name' => 'array',
        'short_description' => 'array',
        'description' => 'array',
    ];

    public $translatable = [
        'name',
        'short_description',
        'description'
    ];


    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function images(): HasMany
    {
        return $this->hasMany(ArticleImage::class)->orderBy('position');
    }

    public function primaryImage()
    {
        return $this->hasOne(ArticleImage::class)->where('is_primary', true);
    }
}