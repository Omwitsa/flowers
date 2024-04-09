<?php

namespace App\Constants;

enum Roles: string
{
    case Admin= 'Admin';
    case Foreign= 'Foreign';
    case Local= 'Local';

	public static function toArray(): array
    {
        return array_column(self::cases(), 'value');
    }
}