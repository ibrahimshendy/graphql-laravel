<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded      = [];

    CONST STATUS_PUBLISHED  = 'published';
    CONST STATUS_DRAFT      = 'draft';

    protected $attributes   = [
        'status'    => self::STATUS_PUBLISHED
    ];

    /**
     * @return array
     */
    public static function statuses() :array
    {
        return [
            self::STATUS_PUBLISHED,
            self::STATUS_DRAFT,
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
