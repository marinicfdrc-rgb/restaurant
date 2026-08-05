<?php

namespace App\Controllers;

use App\Models\MenuModel;

class Menu extends BaseController
{
    protected $menuModel;

    public function __construct()
    {
        $this->menuModel = new MenuModel();
    }


    public function index()
    {
        $data = [
            'menu' => $this->menuModel->findAll()
        ];

        return view('admin/menu/index', $data);
    }


    public function create()
    {
        return view('admin/menu/create');
    }


    public function store()
    {
        $data = $this->request->getPost();

        if (!$this->menuModel->insert($data)) {

            return redirect()
                ->back()
                ->withInput()
                ->with('errors', $this->menuModel->errors());
        }

        return redirect()
            ->to('/admin/menu')
            ->with('success', 'Plat ajouté avec succès.');
    }


    public function delete($id)
    {
        $this->menuModel->delete($id);

        return redirect()
            ->back()
            ->with('success', 'Plat supprimé.');
    }
}