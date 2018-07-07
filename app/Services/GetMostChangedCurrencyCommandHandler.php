<?php

namespace App\Services;

use App\Exceptions\CurrencyNotFoundException;

class GetMostChangedCurrencyCommandHandler
{
    private $currencyRepository;

    /**
     * GetMostChangedCurrencyCommandHandler constructor.
     * @param $currencyRepository
     */
    public function __construct(CurrencyRepositoryInterface $currencyRepository)
    {
        $this->currencyRepository = $currencyRepository;
    }


    public function handle(): Currency
    {
        $currencies = $this->currencyRepository->findAll();
        $currenciesCount = count($currencies);
        if($currenciesCount == 0) {
            throw CurrencyNotFoundException();
        }
        $index = 0;
        $maxValue = $currencies[0];
        for($i = 1; $i < $currenciesCount; $i++) {
            if($currencies[$i] > $maxValue) {
                $maxValue = $currencies[$i];
                $index = $i;
            }
        }
        return $currencies[$index];
    }
}