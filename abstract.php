<?php 

abstract class PaymentGateway {
    abstract public function pay($amount) ;
    public function refund() {}
}

class PayPal extends PaymentGateway {
    public function pay($amount) {
        echo "Paid $$amount via PayPal";
    }

    public function makeRefund ($amount) {
        echo "$$amount refunded to your account.";
    }
}


class Stripe extends PaymentGateway {
    public function pay($amount) {
        echo "Paid $$amount via Stripe";
    }

}


class Bkash extends PaymentGateway {
    public function pay($amount) {
        echo "Paid $$amount via Bkash";
    }
}


$paypal = new PayPal();
$paypal->pay(320);

$stripe = new Stripe();
$stripe->pay(200);

$bkash = new Bkash();
$bkash->pay(300);