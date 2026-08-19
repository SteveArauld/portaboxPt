<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{

    use HasTranslations;
    protected $fillable = ['name', 'slug', 'description'];

    public $translatable = ['name', 'slug', 'description'];

    public function articles(): HasMany
    {
        return $this->hasMany(Article::class);
    }

    /**
     * URL d'une catégorie dans la langue active, à partir d'une référence
     * stable (le slug portugais utilisé dans les menus).
     *
     * Les vues codaient les slugs en dur, ce qui figeait les menus en
     * portugais sous les URLs traduites. On résout ici vers le slug de la
     * langue courante. Le catalogue tient en 14 lignes : il est chargé une
     * fois par requête plutôt qu'une requête par lien de menu.
     */
    public static function urlFor(string $reference): string
    {
        static $bySlug = null;

        if ($bySlug === null) {
            $bySlug = [];
            foreach (static::all() as $category) {
                foreach (array_keys(config('locales.available', [])) as $locale) {
                    $slug = $category->getTranslation('slug', $locale, false);
                    if ($slug !== '' && $slug !== null) {
                        $bySlug[$slug] ??= $category;
                    }
                }
            }
        }

        $category = $bySlug[$reference] ?? null;

        // Référence obsolète (ex. « piscina » au lieu de « piscinas ») :
        // on retombe sur le lien de la boutique plutôt qu'un 404.
        if (!$category) {
            return route('shop');
        }

        return route('category.show', [
            'category' => $category->getTranslation('slug', app()->getLocale()),
        ]);
    }

    /**
     * Retrouve une catégorie par son slug, dans une langue donnée.
     * Même logique que Article : on accepte le slug de n'importe quelle
     * langue afin de pouvoir rediriger plutôt que de renvoyer un 404.
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
}