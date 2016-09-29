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
    public $ecological = "Only ecological transport";


    /*Метод класа __construct, вызывается автоматически при каждом создании обьекта,
    через оператор new
    */
    public function __construct($name,$price,$type,$speed)
    {
        $this->name = $name;
        $this->price = $price;
        $type->type = $type;
        $this->speed = $speed;

    }

    /*Метод класа, используется для работы с екземплярами класа
    */
    public function getTransportInfo()
    {
        return "{$this->name} " . " {$this->price} $";

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
    public function write(Transport $Transport)
    {
        $data = $Transport->getTransportInfo();

            echo $data;


    }
}


/* --- Class Cars ---*/
class Cars extends Transport
{


}


/* --- Class Bike ---*/
class Bike extends Transport
{

}
/* --- Class Wrong, for test ---*/
class Wrong
{

}




