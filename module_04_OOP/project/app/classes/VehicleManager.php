<?php

require_once "VehicleBase.php";
require_once "VehicleActions.php";
require_once "FileHandler.php";


class VehicleManager extends VehicleBase implements VehicleActions{
    use FileHandler;

    // implement interface method
    public function addVehicle($data){
        $vehicles = $this->fileRead();
        $vehicles[] = $data;
        $this->fileWrite($vehicles);
    }

    // implement interface method
    public function editVehicle($id, $data){
        $vehicles = $this->fileRead();
        if(isset($vehicles[$id])){
            $vehicles[$id] = $data;
            $this->fileWrite($vehicles);
        }
    }

    // implement interface method
    public function deleteVehicle($id){
        $vehicles = $this->fileRead();
        if(isset($vehicles[$id])){
            unset($vehicles[$id]);
            $this->fileWrite(array_values($vehicles));
        }
    }

    // implement interface method
    public function getVehicles(){
        return $this->fileRead();
    }


    // implemented Abstract method
    public function getDetails()
    {
        
    }
}