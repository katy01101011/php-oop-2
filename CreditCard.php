<?php
class CreditCard
{
    public $cardNumber;
    public $expiration;
    public $cvc;

    function __construct($_cardNumber, $_expiration, $_cvc)
    {
        $this->cardNumber = $_cardNumber;
        $this->expiration = $_expiration;
        $this->cvc = $_cvc;
    }

    // Metodo per controllare la validità della carta
    public function isValid()
    {
        $today = new \DateTime('midnight');
        $expiration_datetime = \DateTime::createFromFormat("m/y", $this->expiration);
        return $today < $expiration_datetime;
    }
}
