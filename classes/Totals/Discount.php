<?php

namespace MyApp\Totals;

class Discount implements TotalsInterface
{

    public function calculate(\MyApp\Totals $totals)
    {
        $discount_amount = $totals->getGrandTotal() * ($totals->getDiscountPercent()/100);

        $totals->setDiscountAmount($discount_amount);
        $totals->setGrandTotal($totals->getGrandTotal() - $discount_amount);
    }
}