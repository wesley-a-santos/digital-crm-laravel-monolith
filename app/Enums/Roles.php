<?php

namespace App\Enums;

enum Roles: int
{
    case OWNER = 1;
    case MANAGER = 2;
    case USER = 3;

    public function label(): string
    {
        return match ($this) {
            self::OWNER => __('roles.owner'),
            self::MANAGER => __('roles.manager'),
            self::USER => __('roles.user'),
        };
    }
}
