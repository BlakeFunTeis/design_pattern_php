<?php


class FallGuys extends AbstractGames
{
    public function install(): string
    {
        return 'FallGuys 安裝平台：' . $this->device->getDeviceName() . '  安裝中..';
    }

    public function play(): string
    {
        return $this->device->getDeviceName() . '遊戲中';
    }
}