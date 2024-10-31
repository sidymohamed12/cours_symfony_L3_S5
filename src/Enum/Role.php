<?php

namespace App\Enum;

enum Role: string
{
    case ADMIN = 'ADMIN';
    case BOUTIQUIER = 'BOUTIQUIER';
    case CLIENT = 'CLIENT';
}