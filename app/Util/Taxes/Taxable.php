<?php

namespace App\Util\Taxes;

use Illuminate\Support\Facades\DB;

trait Taxable
{
    /**
     * Obtain up-to-date VAT tax from table
     *
     * @return float
     */
    public static function currentVat(): float
    {
        return DB::table('vats')
            ->latest()
            ->first()->tax;
    }

    /**
     * Applies Current VAT to given amount
     *
     * @param float $amount
     *
     * @return float
     */
    public static function calculateVat(float $amount): float
    {
        return ($amount * static::currentVat()) / 100;
    }

    public static function applyVat($amount): float
    {
        return $amount + static::calculateVat($amount);
    }
}
