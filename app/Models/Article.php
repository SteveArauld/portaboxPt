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
        'slug',
        'short_description',
        'description'
    ];

    /**
     * Retrouve une fiche par son slug, dans une langue donnée.
     *
     * Le slug étant traduit, /produto/{slug} et /de/produkt/{slug} portent des
     * valeurs différentes pour un même produit. On cherche d'abord dans la
     * langue demandée, puis dans les autres : cela permet de reconnaître une
     * URL qui vise le bon produit mais dans la mauvaise langue, et de la
     * rediriger au lieu de renvoyer un 404.
     */
    public function scopeWhereSlug($query, string $slug, ?string $locale = null)
    {
        $locale ??= app()->getLocale();

        return $query->where(function ($q) use ($slug, $locale) {
            $q->where("slug->{$locale}", $slug);

            foreach (array_keys(config('locales.available', [])) as $other) {
                if ($other !== $locale) {
                    $q->orWhere("slug->{$other}", $slug);
                }
            }
        });
    }

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