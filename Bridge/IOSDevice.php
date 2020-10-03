<?php


class IOSDevice implements DeviceInterface
{
    public function getDeviceName(): string
    {
        return "IOS";
    }
}