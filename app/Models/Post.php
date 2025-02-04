<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Notifications\Notifiable;



class Post extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'title',
        'content',
        'category_id',
        'created_by',
        'updated_by',
        'image',
        'status',
    ];

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function category():  BelongsTo{
        return $this->belongsTo(Category::class);
    }
    
}
