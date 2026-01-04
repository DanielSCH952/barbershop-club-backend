<?php

namespace App;

enum AppointmentStatusEnum: string
{
    case Pending = 'pendiente';
    case Confirmed = 'confirmada';
    case Cancelled = 'cancelada';
    case Completed = 'completada';
    case Absent = 'inasistencia';
}
