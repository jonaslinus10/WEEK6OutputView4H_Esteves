<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index(){

        $data =[
            'page_title' => 'Brgy 43 Pinagpala Dashboard',
            'page_header' => 'Dashboard',
        ];

        return view('dashboard_view', $data);

    }

    public function resident_record(){

        $data =[
            'page_title' => 'Brgy 43 Pinagpala Resident Records',
            'page_header' => 'Resident Records',
        ];

        return view('resident_record', $data);

    }

    public function user(){

        $data =[
            'page_title' => 'Brgy 43 Pinagpala User',
            'page_header' => 'User',
        ];
        
        return view('user_view', $data);
    }

}
