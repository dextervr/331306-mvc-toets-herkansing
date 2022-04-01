<?php
require "../app/models/RollerCoaster.php";

class RollerCoasters extends Controller {
    private array $last_coaster = [];

    public function __construct()   
    {
        $this->coasterData = $this->model("RollerCoaster");        
    }

    public function index() {
        $coaster = $this->coasterData->getCoasters();
        $rows ="";

        foreach($coaster as $value) {
       
       
            $rows .= "<tr>
                  <td>$value->id</td>
                  <td>" . htmlentities($value->nameRollerCoaster) . "</td>
                  <td>" . htmlentities($value->nameAmusementPark) . "</td>
                  <td>" . htmlentities($value->country) . "</td>
                  <td>" . number_format($value->topspeed) . "</td>
                  <td>" . number_format($value->height) . "</td>
                </tr>";


        }

        $data = [
            "title" => "RollerCoasters",
            "rollercoasters" => $rows
        ];
        
        $this->view('rollercoasters/index', $data);
    }

}