<?php


class CookiesFactory implements SimpleFactoryInterface
{
    public function prepare(): string
    {
        return "餅乾原料";
    }

    public function make(): string
    {
        return "製作餅乾";
    }

    public function packing(): string
    {
        return "包裝餅乾";
    }

    public function transport(): string
    {
        return "運輸餅乾";
    }
}