<?php
class User
{
    public $name;
    public $email;
    public $cart = [];
    public $paymentMethod;

    // Metodo per inserire un prodotto dentro il carrello
    public function addToCart($product)
    {
        $this->cart[] = $product;
        return true;
    }
}
