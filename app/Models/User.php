<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Enums\UserStatus;
use App\Models\Enums\UserType;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname',
        'lastname',
        'type',
        'status',
    ];

    // Relationships
    public function articlesAsWriter()
    {
        return $this->hasMany(Article::class, 'writer_id');
    }

    public function articlesAsEditor()
    {
        return $this->hasMany(Article::class, 'editor_id');
    }
}