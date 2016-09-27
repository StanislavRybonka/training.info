<?php

class Cars
{
    /* Об*явили свойства обьекта
     * */
    public $name = "Name of cars";
    public $price = "Price of cars";

    /*Метод класа __construct, вызывается автоматически при каждом создании обьекта,
    через оператор new
    */
    public function __construct($name,$price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    /*Метод класа, используется для работы с екземплярами класа
    */
    public function getCarsInfo()
    {
        return "{$this->name} " . " {$this->price}";

    }


    /*NOTICE:
    -всегда обращать внимание на тип аргументов, которіе передаются в метод;
    */

}

$ferrary = new Cars('Ferrary',1000);


$bmw = new Cars("BMW",2000);


echo $ferrary->getCarsInfo();