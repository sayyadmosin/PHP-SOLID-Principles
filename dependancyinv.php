<?php
//Dependency Inversion Principle
//High-level modules should not depend on low-level modules. Both should depend on abstractions.
abstract class Abstractpayment{

    abstract public function process();
    public function done()
    {
        echo "Done";
    }
}


class Paypal extends Abstractpayment{
    public function process(){
        return "Paypal Payment completed";
    }
}
class creditcard extends Abstractpayment{

    public function process(){
        return "Credit card payment completed";
    }
}

class payment{
    private $payment;

    public function __construct(Abstractpayment $payment)
    {
        $this->payment = $payment;

    }


    public function process()
    {
        echo $this->payment->process();
        echo "<br>";
        echo $this->payment->done();
        echo "<br>";
    }
}

$ccpayment=new creditcard();

$process=new payment($ccpayment);
$process->process();

echo "calling Paypal now:";
echo "<br>";

$paypalpayment=new Paypal();
$process=new payment($paypalpayment);
$process->process();


