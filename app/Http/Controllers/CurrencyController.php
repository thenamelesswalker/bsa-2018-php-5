<?php

namespace App\Http\Controllers;

use App\Services\CurrencyGenerator;
use App\Services\CurrencyPresenter;
use App\Services\CurrencyRepositoryInterface;
use App\Services\GetMostChangedCurrencyCommandHandler;
use App\Services\GetPopularCurrenciesCommandHandler;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    private $currencyRepository;

    /**
     * CurrencyController constructor.
     * @param $currencyRepository
     */
    public function __construct(CurrencyRepositoryInterface $currencyRepository)
    {
        $this->currencyRepository = $currencyRepository;
    }

    public function currencies() {
        $currencies = $this->currencyRepository->findAll();
        return response()->json(array_map(function ($currency){return CurrencyPresenter::present($currency);}, $currencies));
    }

    public function unstable() {
        $command = new GetMostChangedCurrencyCommandHandler($this->currencyRepository);
        $currency = $command->handle();
        return response()->json(CurrencyPresenter::present($currency));
    }

    public function popular() {
        $command = new GetPopularCurrenciesCommandHandler($this->currencyRepository);
        $currencies = array_map(function ($currency){return CurrencyPresenter::present($currency);}, $command->handle());
        return view('popular_currencies', ['currencies' => $currencies]);
    }
}
