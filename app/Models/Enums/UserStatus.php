<?php
namespace App\Models\Enums;

class UserStatus
{
    const ACTIVE = 'Active';
    const INACTIVE = 'Inactive';

    public static function values()
    {
        return [self::ACTIVE, self::INACTIVE];
    }
}