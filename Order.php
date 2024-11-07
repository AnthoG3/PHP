<?php
//Je crée ma classe
class Order {

//J'ajoute mes propriétés
    public $id;

    public $customerName;

    public $status = "cart";

    public $totalPrice = 0 ;

    //Je met en place un tableau vide
    public $products = [];


    //Je crée une fonction qui permet d'ajouter les produits
    public function addProduct() {
        if ($this->status === "cart") {
            $this->products[] = "Pringles";
            $this->totalPrice += 3;
        }
    }

    //Je crée une fonction qui permet de payer les produits du "cart"
    public function pay () {
        if($this->status === "cart") {
            $this->status = "paid";
        }
    }
}
//Ici j'ajouter un produit a chaque "addProduct()
$order1 = new Order();
$order1->addProduct();
$order1->addProduct();
$order1->addProduct();
$order1->addProduct();
$order1->pay();

var_dump($order1);