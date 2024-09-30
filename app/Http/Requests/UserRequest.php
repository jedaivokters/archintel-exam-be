<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Enums\UserStatus;
use App\Models\Enums\UserType;

class UserRequest extends FormRequest
{
    
    public function rules()
    {
        return [
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'type' => 'required|in:' . implode(',', [UserType::EDITOR, UserType::WRITER]),
            'status' => 'required|in:' . implode(',', [UserStatus::ACTIVE, UserStatus::INACTIVE]),
        ];
    }
}