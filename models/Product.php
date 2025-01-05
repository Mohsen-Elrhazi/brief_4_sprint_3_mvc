<?php

class Product{
    private $id;
    private $name;
    private $image;
    private $price;
    private $quantity;

    public function __construct($name, $image, $price, $quantity,$id=null){
        $this->id = $id;
        $this->name = $name;
        $this->image = $image;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function getID(){
        return $this->id;
    }


    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getImage(){
        return $this->image;
    }

    public function setDescription($image){
        $this->image = $image;
    }

    public function getPrice(){
        return $this->price;
    }

    public function setPrice($price){
        $this->price = $price;
    }

    public function getQuantity(){
        return $this->quantity;
    }

    public function setQuantity($quantity){
        $this->quantity = $quantity;
    }

    // public function __destruct(){
    //    echo "Product object is detroyed";
    // }
    




}

?>