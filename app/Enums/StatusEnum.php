<?php
namespace App\Enums;

use App\Traits\EnumTrait;

enum StatusEnum: string
{
    use EnumTrait;

    case STATUS_OK = 'attente';
    case STATUS_OK = 'ok';
    case STATUS_REPORT = 'signaler';
    case STATUS_BAN = 'banni';
}