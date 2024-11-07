<?php


class Order {
    public $id;
    public $customerName;
    public $status = "cart";
    public $totalPrice;
    public $products = [];
    public $deliveryAdress;



    // le constructeur est une méthode "magique"
    // car elle est appelée automatiquement
    // le constructeur est appelée quand un objet est créé
    // pour cette classe
    // un objet créé pour une classe est appelée "instance de class"
    public function __construct($customerName) {
        $this->customerName = $customerName;
        $this->id = uniqid();
    }

    //Methode pour envoyer la commande
    public function submitOrder() {
        $this->status = "submitted";
        return "Commande validée";
        }
    public function addDeliveryAdress($adress) {
        $this->deliveryAdress = $adress;
    }

    public function addProduct() {
        // le $this fait référence à l'objet actuel
        // c'est à dire à $order1, ou $order2 etc
        // donc à l'objet actuel issu de la classe
        if ($this->status === "cart") {
            $this->products[] = "Pringles";
            $this->totalPrice += 3;
        }
    }

    public function removeProduct() {
        if ($this->status === "cart" && !empty($this->products)) {
    array_pop($this->products);
        }

    }

    public function pay() {
        if($this->status === "cart") {
            $this->status = "paid";
        }
    }
}

// je créé un objet


// je créé une instance de la classe Order
// c'est à dire un objet issu du plan de construction de la classe Order
$order1 = new Order("Anthony Gevers"); //On créé un nouvel objet Order avec le nom du client et un identifiant unique (uniqid)
echo $order1->addDeliveryAdress("111 rue de Jojo,33000 Bordeaux");
echo $order1->submitOrder();
$order1->addProduct();
$order1->addProduct();
$order1->addProduct();

$order2 = new Order();
$order2->addProduct();


$order1->pay();;