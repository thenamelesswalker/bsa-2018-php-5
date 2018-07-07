<?php

namespace App\Services;

class GetPopularCurrenciesCommandHandler
{
    const POPULAR_COUNT = 3;

    private $currencyRepository;

    /**
     * GetPopularCurrenciesCommandHandler constructor.
     * @param $currencyRepository
     */
    public function __construct(CurrencyRepositoryInterface $currencyRepository)
    {
        $this->currencyRepository = $currencyRepository;
    }


    public function handle(int $count = self::POPULAR_COUNT): array
    {
        $currencies = $this->currencyRepository->findAll();
        usort($currencies,
            function(Currency $left, Currency $right) {
            return $left->getPrice() < $right->getPrice() ? 1 : -1;
        });
        return array_slice($currencies, 0, $count);
    }
}