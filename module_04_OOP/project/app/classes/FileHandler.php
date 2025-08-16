<?php


trait FileHandler{
    private $filePath = __DIR__. "/../../data/vehicle.json";

    public function fileRead(){
        if(!file_exists($this->filePath)){
            file_put_contents($this->filePath, json_encode([]));
        }
        return json_decode(file_get_contents($this->filePath), true);
    }

    public function fileWrite($data){
        file_put_contents($this->filePath, json_encode($data, JSON_PRETTY_PRINT));
    } 
}





