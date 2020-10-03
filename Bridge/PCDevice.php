<?php


class PCDevice implements DeviceInterface
{
    public function getDeviceName(): string
    {
        return "PC";
    }
}