<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Enums\CompanyStatus;

class CompanyRequest extends FormRequest
{
    public function rules()
    {
        return [
            'logo' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'status' => 'required|in:' . implode(',', [CompanyStatus::ACTIVE, CompanyStatus::INACTIVE]),
        ];
    }
}
