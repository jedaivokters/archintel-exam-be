<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Enums\ArticleStatus;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'title',
        'link',
        'date',
        'content',
        'status',
        'writer_id',
        'editor_id',
        'company_id',
    ];

    // Relationships
    public function writer()
    {
        return $this->belongsTo(User::class, 'writer_id');
    }

    public function editor()
    {
        return $this->belongsTo(User::class, 'editor_id');
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}