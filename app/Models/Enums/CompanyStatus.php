<?php
namespace App\Models\Enums;

class CompanyStatus
{
    const ACTIVE = 'Active';
    const INACTIVE = 'Inactive';

    public static function values()
    {
        return [self::ACTIVE, self::INACTIVE];
    }
}