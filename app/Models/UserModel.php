<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';

    protected $primaryKey = 'id';

    protected $returnType = 'array';


    protected $allowedFields = [
        'role_id',
        'name',
        'email',
        'password',
        'phone',
    ];


    protected $useTimestamps = true;


    protected $createdField = 'created_at';

    protected $updatedField = 'updated_at';


    protected $beforeInsert = [
        'hashPassword'
    ];


    protected function hashPassword(array $data)
    {
        if(isset($data['data']['password']))
        {
            $data['data']['password'] = password_hash(
                $data['data']['password'],
                PASSWORD_DEFAULT
            );
        }

        return $data;
    }
}