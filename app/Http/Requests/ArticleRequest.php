<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Enums\ArticleStatus;

class ArticleRequest extends FormRequest
{
    public function rules()
    {
        return [
            'image' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'link' => 'required|url',
            'date' => 'required|date',
            'content' => 'required|string',
            'status' => 'required|in:' . implode(',', [ArticleStatus::FOR_EDIT, ArticleStatus::PUBLISHED]),
            'writer_id' => 'required|exists:users,id',
            'editor_id' => 'nullable|exists:users,id',
            'company_id' => 'required|exists:companies,id',
        ];
    }
}
