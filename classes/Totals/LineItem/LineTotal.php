<?php

namespace MyApp\Totals\LineItem;

class LineTotal {

    protected $quantity;
    protected $price;
    protected $subtotal;

    public function set_price($price)
    {
        $this->price = $price;
        return $this;
    }

    public function get_price()
    {
        return $this->price;
    }

    /**
     * @return mixed
     */
    public function get_quantity()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $quantity
     *
     * @return LineTotal
     */
    public function set_quantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @return mixed
     */
    public function get_subtotal()
    {
        return $this->subtotal;
    }

    /**
     * @param mixed $subtotal
     *
     * @return LineTotal
     */
    public function set_subtotal($subtotal)
    {
        $this->subtotal = $subtotal;
        return $this;
    }

    public function calculate()
    {
        $this->subtotal = $this->quantity * $this->price;
        return $this;
    }

}