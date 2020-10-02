<?php


class ChocolatesFactory implements SimpleFactoryInterface
{
    public function prepare(): string
    {
        return "巧克力原料";
    }

    public function make(): string
    {
        return "製作巧克力";
    }

    public function packing(): string
    {
        return "包裝巧克力";
    }

    public function transport(): string
    {
        return "運輸巧克力";
    }
}