<?php
abstract class Pizza
{
    public string $name;
    public string $sauce;
    public array $toppings;

    public function prepare(): void
    {
        echo 'приготовление пиццы - ' . $this->name . 'началось' ;
        echo 'соус - ' . $this->sauce . 'добавлен';
        echo 'топинги - ' . implode($this->toppings) . 'добавлены';
    }
    public function cut(): void
    {
        echo 'эту пиццу режут по диагонали';
    }
}
