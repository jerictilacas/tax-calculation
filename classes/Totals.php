<?php

namespace MyApp;

class Totals
{
    protected $items;
    protected $delivery;
    protected $discount_percent;
    protected $discount_amount;
    protected $subtotal;
    protected $grand_total;
    protected $tax_amount;

    /**
     * @return mixed
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param mixed $items
     */
    public function setItems($items)
    {
        $this->items = $items;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDelivery()
    {
        return $this->delivery;
    }

    /**
     * @param mixed $delivery
     */
    public function setDelivery($delivery)
    {
        $this->delivery = $delivery;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDiscountAmount()
    {
        return $this->discount_amount;
    }

    /**
     * @param mixed $discount_amount
     */
    public function setDiscountAmount($discount_amount)
    {
        $this->discount_amount = $discount_amount;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDiscountPercent()
    {
        return $this->discount_percent;
    }

    /**
     * @param mixed $discount_percent
     */
    public function setDiscountPercent($discount_percent)
    {
        $this->discount_percent = $discount_percent;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSubtotal()
    {
        return $this->subtotal;
    }

    /**
     * @param mixed $subtotal
     */
    public function setSubtotal($subtotal)
    {
        $this->subtotal = $subtotal;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getGrandTotal()
    {
        return $this->grand_total;
    }

    /**
     * @param mixed $grand_total
     */
    public function setGrandTotal($grand_total)
    {
        $this->grand_total = $grand_total;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTaxAmount()
    {
        return $this->tax_amount;
    }

    /**
     * @param mixed $tax_amount
     */
    public function setTaxAmount($tax_amount)
    {
        $this->tax_amount = $tax_amount;
        return $this;
    }
}