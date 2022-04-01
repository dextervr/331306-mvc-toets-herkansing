<?php
require "../app/models/Country.php";

class Countries extends Controller {
    private array $last_country = [];

    public function __construct()   
    {
        $this->countryData = $this->model("Country");        
    }

    public function index() {
        $countries = $this->countryData->getCountries();
        // var_dump($countries);exit();

        $rows ="";

        foreach($countries as $value) {
            
            $rows .= "<tr><th><h1>$value->name</h1></th></tr><br>";
            $rows .= "<tr><td>$value->capitalCity</td></tr><br>";
            $rows .= "<tr><td>$value->continent</td></tr><br>";
            $rows .= "<tr><td>$value->population</td></tr><br><br>";

        }

        $data = [
            "title" => "Countries",
            "countries" => $rows
        ];
        
        $this->view('countries/index', $data);
    }

}