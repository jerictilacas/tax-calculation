<?php

namespace MyApp\Totals;

class Delivery implements TotalsInterface
{

    public function calculate(\MyApp\Totals $totals)
    {
        $totals->setGrandTotal($totals->getGrandTotal() + $totals->getDelivery());
    }
}