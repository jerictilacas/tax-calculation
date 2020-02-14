<?php

namespace MyApp\Totals;

class Tax implements TotalsInterface
{
    public function calculate(\MyApp\Totals $totals)
    {
        $totals->setTaxAmount($totals->getGrandTotal() * .10);
    }
}