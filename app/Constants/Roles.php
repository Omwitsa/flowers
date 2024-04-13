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

enum Brands: string
{
    case AaaRoses= 'AAA ROSES';
    case Bellissima= 'BELLISSIMA';

	public static function toArray(): array
    {
        return array_column(self::cases(), 'value');
    }
}