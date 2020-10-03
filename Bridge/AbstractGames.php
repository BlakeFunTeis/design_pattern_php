<?php


abstract class AbstractGames
{
    /** @var DeviceInterface $device */
    protected DeviceInterface $device;

    /**
     * GameService constructor.
     * @param DeviceInterface $device
     */
    public function __construct(DeviceInterface $device)
    {
        $this->device = $device;
    }

    /**
     * 實作安裝方法
     * @return string
     */
    abstract public function install(): string;

    /**
     * 實作遊玩方法
     * @return string
     */
    abstract public function play(): string;

    /**
     * @param DeviceInterface $device
     */
    public function setDevice(DeviceInterface $device): void
    {
        $this->device = $device;
    }

    /**
     * @return DeviceInterface
     */
    public function getDevice(): DeviceInterface
    {
        return $this->device;
    }
}