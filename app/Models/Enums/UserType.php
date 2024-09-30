<?php
namespace App\Models\Enums;

class UserType
{
    const EDITOR = 'Editor';
    const WRITER = 'Writer';

    public static function values()
    {
        return [self::EDITOR, self::WRITER];
    }
}
