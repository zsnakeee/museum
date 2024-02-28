<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Gallery extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'image',
        'author_id',
        'sort',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'author_id' => 'integer',
    ];

    protected static function boot(): void
    {
        parent::boot();
        static::creating(function ($record) {
            $maxOrder = self::max('sort') ?? 0;
            $record->sort = $maxOrder + 1;
        });
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
