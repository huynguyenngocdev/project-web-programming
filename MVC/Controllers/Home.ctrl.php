<?php

class Home extends Controller
{

    public function Default()
    {
        $smartphone = $this->Model('Smartphone');
        $accessories = $this->Model('Accessories');
        $this->View("Home", [
            "Page1" => "Smartphone",
            "Page2" => "Accessories",
            "Smartphone" => $smartphone->getAllSmartphone(),
            "Accessories"=> $accessories->getAllAccessories()
        ]);
    }

    public function showDetailSmartphone()
    {
      
    }
}

 ?> 
