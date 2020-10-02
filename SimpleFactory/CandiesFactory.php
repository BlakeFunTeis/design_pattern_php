<?php


class CandiesFactory implements SimpleFactoryInterface
{
    public function prepare(): string
    {
        return "糖果原料";
    }

    public function make(): string
    {
        return "製作糖果";
    }

    public function packing(): string
    {
        return "包裝糖果";
    }

    public function transport(): string
    {
        return "運輸糖果";
    }
}