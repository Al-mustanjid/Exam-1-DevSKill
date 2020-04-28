<?php
require_once("Q2.1.php");

class PizzaOrderBuilder
{
    private $_pizzaorder;
    public function __construct()
    {
        $this->_pizzaorder = new PizzaOrder();
    }
    function setCheese()
    {
        $this->_pizzaorder->chooseCheese = 0;
    }

    function setSausage()
    {
        $this->_pizzaorder->chooseSausage = 1;
    }

    function setMeat($chooseMeat)
    {
        $this->_pizzaorder->meat = $chooseMeat;
    }

    function setSpiceLevel($lvl)
    {
        $this->_pizzaorder->chooseSpiceLevel = $lvl;
    }

    function setPizzaSize($size)
    {
        $this->_pizzaorder->choseSize = $size;
    }

    function getPizzaOrder()
    {
        return $this->_pizzaorder;
    }
}