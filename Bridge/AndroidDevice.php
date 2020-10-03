<?php


class AndroidDevice implements DeviceInterface
{
    public function getDeviceName(): string
    {
        return "Android";
    }
}