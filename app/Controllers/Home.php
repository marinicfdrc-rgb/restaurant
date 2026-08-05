<?php

namespace App\Controllers;

use App\Models\MenuModel;

class Home extends BaseController
{
    protected MenuModel $menuModel;


    public function __construct()
    {
        $this->menuModel = new MenuModel();
    }


    public function index()
    {
        $data = [
            'menu' => $this->menuModel->findAll()
        ];

        return view('home', $data);
    }

    public function reservationMenu()
{
    $menuModel = new \App\Models\MenuModel();

    return $this->response->setJSON(
        $menuModel
            ->where('available', true)
            ->findAll()
    );
}
}