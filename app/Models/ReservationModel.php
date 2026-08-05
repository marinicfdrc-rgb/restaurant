<?php

namespace App\Models;

use CodeIgniter\Model;

class ReservationModel extends Model
{
    protected $table = 'reservations';

    protected $primaryKey = 'id';

    protected $returnType = 'array';


    protected $allowedFields = [

        'user_id',

        'client_name',
        'client_email',
        'client_phone',

        'reservation_date',
        'reservation_time',

        'number_of_people',

        'verification_code',

        'status',

        'table_number'
    ];


    protected $useTimestamps = true;


    protected $createdField = 'created_at';

    protected $updatedField = 'updated_at';
}