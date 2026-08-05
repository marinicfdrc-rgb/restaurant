<?php

namespace App\Controllers;

use App\Models\ReservationModel;
use App\Models\ReservationItemModel;
use App\Models\MenuModel;

class Reservation extends BaseController
{

    protected ReservationModel $reservationModel;
    protected ReservationItemModel $reservationItemModel;
    protected MenuModel $menuModel;


    public function __construct()
    {
        $this->reservationModel =
            new ReservationModel();


        $this->reservationItemModel =
            new ReservationItemModel();


        $this->menuModel =
            new MenuModel();
    }





    public function create()
    {

        $data =
            $this->request->getJSON(true);



        $userId =
            session()->get('user_id');



        if(!$userId)
        {

            return $this->response->setJSON([

                "success"=>false,

                "message"=>"Vous devez être connecté."

            ]);

        }





        if(
            empty($data['items'])
        )
        {

            return $this->response->setJSON([

                "success"=>false,

                "message"=>"Aucun plat sélectionné."

            ]);

        }





        /*
         * Create reservation
         */

        $this->reservationModel->insert([


            "user_id" =>
                $userId,


            "client_name" =>
                $data['client_name'],


            "client_email" =>
                session()->get('email'),


            "client_phone" =>
                $data['client_phone'],


            "reservation_date" =>
                $data['reservation_date'],


            "reservation_time" =>
                $data['reservation_time'],


            "number_of_people" =>
                $data['number_of_people'],


            "status" =>
                "WAITING_PAYMENT"


        ]);



        $reservationId =
            $this->reservationModel
                 ->getInsertID();






        /*
         * Create reservation items
         */

        foreach($data['items'] as $item)
        {


            $menu =
                $this->menuModel
                     ->find(
                        $item['menu_item_id']
                     );



            if(!$menu)
            {
                continue;
            }





            $price =
                $menu['discount_price']
                ??
                $menu['price'];





            $this->reservationItemModel
            ->insert([


                "reservation_id" =>
                    $reservationId,


                "menu_item_id" =>
                    $menu['id'],


                "quantity" =>
                    $item['quantity'],


                // historical price
                "price" =>
                    $price


            ]);

        }





        return $this->response->setJSON([

            "success"=>true,

            "message"=>
            "Réservation créée, en attente du paiement."

        ]);

    }

}