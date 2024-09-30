<?php
namespace App\Models\Enums;

class ArticleStatus
{
    const FOR_EDIT = 'For Edit';
    const PUBLISHED = 'Published';

    public static function values()
    {
        return [self::FOR_EDIT, self::PUBLISHED];
    }
}