<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ArticleImage extends Model
{
    protected $table = 'article_images';
    
    protected $fillable = ['article_id', 'image_path', 'position', 'is_primary'];

    protected $casts = [
        'is_primary' => 'boolean',
        'position' => 'integer'
    ];

    public function article(): BelongsTo
    {
        return $this->belongsTo(Article::class);
    }
}