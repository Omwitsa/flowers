<?php

namespace App\Constants;

enum Roles: string
{
    case LOCAL= 'Local';
    case FOREIGN= 'Foreign';
    case ADMIN= 'Admin';

	public static function toArray(): array
    {
        return array_column(self::cases(), 'value');
    }

    // Roles::ADMIN->name; // ADMIN
    // Roles::ADMIN->value; // Admin

    // //Restore an enum from a value
    // $roles = Roles::from('Admin');

    // $roles->name; // Get the name
    // $roles->value; // Get the value

    // // above can also be achived by
    // Roles::from('Admin')->name;
    // Roles::from('Admin')->value;

    // // validate
    // $request->validate([
    //     'gender' => ['required', Rule::in(array_column(Gender::cases(), 'value'))],
    //     ]);
}

enum Brands: string
{
    case AAAROSES= 'AAA ROSES';
    case BELLISSIMA= 'BELLISSIMA';

	public static function toArray(): array
    {
        return array_column(self::cases(), 'value');
    }
}

enum Farms: string
{
    case SIMBA= 'Simba';
    case CHUI= 'Chui';

	public static function toArray(): array
    {
        return array_column(self::cases(), 'value');
    }
}