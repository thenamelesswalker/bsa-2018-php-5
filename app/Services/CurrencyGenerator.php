<?php

namespace App\Services;

class CurrencyGenerator
{
    public static function generate(): array
    {
        return [
            new Currency(1,
                "Bitcoin",
                6642.45,
                "https://s2.coinmarketcap.com/static/img/coins/16x16/1.png",
                0.27),
            new Currency(2,
                "Ethereum",
                473.47,
                "https://s2.coinmarketcap.com/static/img/coins/16x16/1027.png",
                0.89),
            new Currency(3,
                "XRP",
                0.471026,
                "https://s2.coinmarketcap.com/static/img/coins/16x16/52.png",
                -0.88),
            new Currency(4,
                "Bitcoin Cash",
                725.53,
                "https://s2.coinmarketcap.com/static/img/coins/16x16/1831.png",
                -0.33),
            new Currency(5,
                "EOS",
                8.62,
                "https://s2.coinmarketcap.com/static/img/coins/16x16/1765.png",
                0.25)
        ];
    }
}