<?php

namespace App\Models;

use CodeIgniter\Model;

class MenuModel extends Model
{
    protected $table            = 'menu_items';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';

    protected $protectFields = true;

    protected $allowedFields = [
        'name',
        'type',
        'description',
        'image',
        'price',
        'discount_price',
        'daily_limit',
        'remaining_quantity',
        'available',
    ];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';


    /*
    |--------------------------------------------------------------------------
    | Validation
    |--------------------------------------------------------------------------
    */

    protected $validationRules = [
        'name' => [
            'required',
            'min_length[3]',
            'max_length[150]',
        ],

        'type' => [
            'required',
            'in_list[ENTREE,PLAT,SOUPE,DESSERT,BOISSON]',
        ],

        'description' => [
            'required',
        ],

        'image' => [
            'required',
        ],

        'price' => [
            'required',
            'decimal',
        ],

        'discount_price' => [
            'permit_empty',
            'decimal',
        ],

        'daily_limit' => [
            'permit_empty',
            'integer',
        ],

        'remaining_quantity' => [
            'permit_empty',
            'integer',
        ],
    ];


    protected $validationMessages = [

        'name' => [
            'required' => 'Le nom du plat est obligatoire.',
            'min_length' => 'Le nom doit contenir au moins 3 caractères.',
            'max_length' => 'Le nom ne peut pas dépasser 150 caractères.',
        ],

        'type' => [
            'required' => 'La catégorie du menu est obligatoire.',
            'in_list' => 'La catégorie sélectionnée est invalide.',
        ],

        'description' => [
            'required' => 'La description du plat est obligatoire.',
        ],

        'image' => [
            'required' => 'Une image du plat est obligatoire.',
        ],

        'price' => [
            'required' => 'Le prix est obligatoire.',
            'decimal' => 'Le prix doit être un nombre valide.',
        ],

        'discount_price' => [
            'decimal' => 'Le prix promotionnel doit être un nombre valide.',
        ],

        'daily_limit' => [
            'integer' => 'La limite quotidienne doit être un nombre entier.',
        ],

        'remaining_quantity' => [
            'integer' => 'La quantité restante doit être un nombre entier.',
        ],
    ];


    protected $skipValidation = false;
    protected $cleanValidationRules = true;


    /*
    |--------------------------------------------------------------------------
    | Callbacks
    |--------------------------------------------------------------------------
    */

    protected $allowCallbacks = true;

    protected $beforeInsert = [];
    protected $afterInsert  = [];

    protected $beforeUpdate = [];
    protected $afterUpdate  = [];

    protected $beforeFind = [];
    protected $afterFind  = [];

    protected $beforeDelete = [];
    protected $afterDelete  = [];
}