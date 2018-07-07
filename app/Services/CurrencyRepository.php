<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 07.07.18
 * Time: 15:06
 */

namespace App\Services;


class CurrencyRepository implements CurrencyRepositoryInterface
{

    private $currencies = [];
    /**
     * @param Currency[]
     */
    public function __construct(array $currencies)
    {
        $this->currencies = $currencies;
    }

    /**
     * @return Currency[]
     */
    public function findAll(): array
    {
        return $this->currencies;
    }
}