<?php


/* --- Class Cars ---*/
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

    */

}

/* --- Class CarsWriter ---*/
class CarsWriter
{
    public function write(Cars $Cars)
    {
        $data = $Cars->getCarsInfo();

            echo $data;


    }
}

/* --- Class Wrong, for test ---*/
class Wrong
{

}

$cars = new Cars('BMW',1500);
$writer = new CarsWriter();
$writer->write($cars);

