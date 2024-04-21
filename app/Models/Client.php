<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $table = 'client';

    protected $fillable = [
        'ClientName',
        'ClientCode',
        'ClientType',
        'EmailRecepients',
        'DropOff',
        'Category',
        'Country',
        'ClientDivision',
        'FairTrade',
        'Price',
        'PackRate',
        'Currency',
    ];
}
