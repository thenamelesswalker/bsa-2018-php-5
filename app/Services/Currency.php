<?php

namespace App\Services;

class Currency
{

    private $id;
    private $name;
    private $price;
    private $imageUrl;
    private $dailyChangePercent;

    /**
     * Currency constructor.
     * @param $id
     * @param $name
     * @param $price
     * @param $imageUrl
     * @param $dailyChangePercent
     */
    public function __construct($id, $name, $price, $imageUrl, $dailyChangePercent)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->imageUrl = $imageUrl;
        $this->dailyChangePercent = $dailyChangePercent;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return mixed
     */
    public function getImageUrl()
    {
        return $this->imageUrl;
    }

    /**
     * @return mixed
     */
    public function getDailyChangePercent()
    {
        return $this->dailyChangePercent;
    }

}