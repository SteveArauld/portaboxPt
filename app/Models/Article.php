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
        'brand',
        'mpn',
        'gtin',
        'condition',
        'price',
        'old_price',
        'discount_percentage',
        'short_description',
        'description',
        'link',
        'stock',
        'category_id'
    ];

    // IMPORTANT : ne JAMAIS ajouter 'name', 'short_description' ou 'description'
    // ici en cast 'array'. HasTranslations gère déjà la sérialisation JSON de
    // ces champs en interne. Les deux mécanismes combinés produisent des
    // valeurs corrompues (string au lieu d'array, traductions vides, etc.)
    protected $casts = [
        'price' => 'decimal:2',
        'old_price' => 'decimal:2',
        'stock' => 'integer',
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