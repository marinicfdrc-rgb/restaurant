<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\RoleModel;

class Auth extends BaseController
{
    protected UserModel $userModel;
    protected RoleModel $roleModel;


    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->roleModel = new RoleModel();
    }



    public function signup()
    {
        $data = $this->request->getJSON(true);


        if (
            empty($data['name']) ||
            empty($data['email']) ||
            empty($data['password'])
        ) {

            return $this->response->setJSON([
                'success' => false,
                'message' => 'Informations manquantes'
            ]);

        }



        // Check existing email

        $existing = $this->userModel
            ->where('email', $data['email'])
            ->first();


        if($existing)
        {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Email déjà utilisé'
            ]);
        }



        // Get client role

        $clientRole = $this->roleModel
            ->where('name', 'client')
            ->first();



        if(!$clientRole)
        {
            return $this->response->setJSON([
                'success'=>false,
                'message'=>'Role client introuvable'
            ]);
        }



        $userId = $this->userModel->insert([

            'role_id' => $clientRole['id'],

            'name' => $data['name'],

            'email' => $data['email'],

            'phone' => $data['phone'] ?? null,

            'password' => $data['password']

        ]);



        return $this->response->setJSON([

            'success'=>true,

            'message'=>'Compte créé'

        ]);

    }





    public function login()
{
    $data = $this->request->getJSON(true);

    $user = $this->userModel
        ->where('email', trim($data['email']))
        ->first();

    if (
        !$user ||
        !password_verify($data['password'], $user['password'])
    ) {
        return $this->response->setJSON([
            'success' => false,
            'message' => 'Email ou mot de passe incorrect'
        ]);
    }

    session()->set([

    'user_id'=>$user['id'],

    'role_id'=>$user['role_id'],

    'email'=>$user['email'],

    'logged_in'=>true

]);

    return $this->response->setJSON([
        'success' => true,
        'message' => 'Connexion réussie'
    ]);
}





    public function logout()
{

    session()->destroy();


    return $this->response->setJSON([

        "success"=>true

    ]);

}

    public function session()
{
    $userId = session()->get('user_id');


    if(!$userId)
    {
        return $this->response->setJSON([
            "logged_in"=>false
        ]);
    }



    $user =
        $this->userModel
        ->find($userId);



    if(!$user)
    {
        session()->destroy();


        return $this->response->setJSON([
            "logged_in"=>false
        ]);
    }



    return $this->response->setJSON([

        "logged_in"=>true,

        "email"=>$user['email'],

        "name"=>$user['name']

    ]);
}

}