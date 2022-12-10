<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;


class ApiController extends BaseController
{
    //
    public function getstate(){
        $state=array("kerala","tamil nadu","karnataka","goa","gujarath","bihar",);
       return  $state;
               
    }

    public function getdata(){
        $data=[
            "id"=>200,
            "name"=>"fathima",
            "dob"=>"2022-02-02",
            "is_employed"=>true,
            "Description"=>"fathimapullambalavan"

        ];
       return json_encode($data);
               
    }

}
