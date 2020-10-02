<?php

interface SimpleFactoryInterface
{
    public function prepare(): string;

    public function make(): string;

    public function packing(): string;

    public function transport(): string;
}