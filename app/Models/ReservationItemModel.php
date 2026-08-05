<?php

namespace App\Models;

use CodeIgniter\Model;

class ReservationItemModel extends Model
{
    protected $table = 'reservation_items';

    protected $primaryKey = 'id';

    protected $returnType = 'array';


    protected $allowedFields = [

        'reservation_id',

        'menu_item_id',

        'quantity',

        'price'
    ];


    protected $useTimestamps = true;


    protected $createdField = 'created_at';
}