<?php

namespace App;

enum RoleEnum: string
{
    case Admin = 'admin';
    case Barber = 'barber';
    case Client = 'client';
}
