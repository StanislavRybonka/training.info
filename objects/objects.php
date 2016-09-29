<?php


/* --- Class Cars ---*/

class Transport
{
    /* Об*явили свойства обьекта
     * */
    public $name = "Name of transport";
    public $price = "Price of transport";
    public $type = "Type of transport";
    public $speed = "Speed of transport";


    /*Метод класа __construct, вызывается автоматически при каждом создании обьекта,
    через оператор new
    */
  function __construct($name, $price, $type, $speed)
    {
        $this->name = $name;
        $this->price = $price;
        $this->type = $type;
        $this->speed = $speed;

    }

    /*Метод класа, используется для работы с екземплярами класа
    */
    public function getTransportInfo()
    {
        return "{$this->name} " . " {$this->price} $"
        . "{$this->type}" . "{$this->speed} m/h";

    }


    /* NOTICE:
    - всегда обращать внимание на тип аргументов, которые передаются в метод;
    - помнить о разделении ответственности;
    - уточнение типов, можно использовать при работе с класами, и их методами
    при работе с примитивными типами данных, следует применять стандартные функции
    проврки типов;
    - в даном случае под распредилением ответственности следует понимать, так,
    класс Cars, содержит информацию об автомобиле, а класс CarsWriter, отвечает
    за ее вывод, это проектное решение.
    - При определении класса, определяется и тип, но тип может содержать
    целое семейство класов;
    - Механизм посредством которого,различные классы можно обьеденять под одним типом, называется наследованием.

    */

}

/* --- Class CarsWriter ---*/

class TransportWriter
{
   private $transports = array();

    public function addTransports(Transport $transport)
    {
        $this->transports [] = $transport;

    }

    public function write()
    {
        $data = "";
        foreach ($this->transports as $transport){
            $data .= "{$transport->getTransportInfo()}";
            $data .= "{$transport->getCars()}";
        }
        echo $data;


    }
}


/* --- Class Cars ---*/

class Cars extends Transport
{
    public $fuel = "Oil for cars";

    function __construct($name, $price, $type, $speed, $fuel)
    {
        parent::__construct($name, $price, $type, $speed);
        $this->fuel = $fuel;
    }

    function getCars()
    {
        return $this->fuel;
    }


}


/* --- Class Bike ---*/

class Bike extends Transport
{

    public $move_energy = "Energy for move bike";

    function __construct($name, $price, $type, $speed,$move_energy)
    {
        parent::__construct($name, $price, $type, $speed);

        $this->move_energy = $move_energy;
    }

    function getBike()
    {

        return $this->move_energy;
    }

}

/* --- Class Wrong, for test ---*/

class Wrong
{

}



$cars = new Cars('BMW',1000,'Sport-car ',350,' benzin ');
$writer = new TransportWriter();
$writer->addTransports($cars);
$writer->write();

$cars1 = new Cars('Audi',2000,'Bussines-car ',450,' oil ');
$writer = new TransportWriter();
$writer->addTransports($cars1);
$writer->write();

$cars2 = new Bike('Audi',2000,'Bussines-car ',450,' oil ');
$writer = new TransportWriter();
$writer->addTransports($cars2);
$writer->write();

