

<?php 

interface PaymentGateway {
    public function pay($amount) ;
    public function refund($amount);
}

class PayPal implements PaymentGateway {
    public function pay($amount) {
        echo "Paid $$amount via PayPal";
    }

    public function refund ($amount) {
        echo "$$amount refunded to your account.";
    }
}


class Stripe implements PaymentGateway {
    public function pay($amount) {
        echo "Paid $$amount via Stripe";
    }

    public function refund($amount) {
        echo "$$amount refunded to your account.";
    }

}


$paypal = new PayPal();
$paypal->pay(320);

$stripe = new Stripe();
$stripe->pay(200);
$stripe->refund(200);

// Pillars of OOP
// 1. Inheritence
// 2. Abstraction 
// 3. Encapsulation
// 4. Polymorphism