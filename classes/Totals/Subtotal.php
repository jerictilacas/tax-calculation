<?php

namespace MyApp\Totals;

class Subtotal implements TotalsInterface
{

    public function calculate(\MyApp\Totals $totals)
    {
        $subtotal = 0;
        foreach ($totals->getItems() as $item)
        {
            $linetotal = new \MyApp\Totals\LineItem\LineTotal();
            $linetotal
                ->set_price($item['price'])
                ->set_quantity($item['quantity'])
                ->calculate();

            $subtotal += $linetotal->get_subtotal();
        }

        $totals->setSubtotal($subtotal);
        $totals->setGrandTotal($subtotal);
    }
}