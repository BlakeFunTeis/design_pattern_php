<?php


class FactoriesService
{
    /**
     * @param $snack
     * @return CandiesFactory|ChocolatesFactory|CookiesFactory
     * @throws SimpleFactoriesException
     */
    public function buildFactory($snack): SimpleFactoryInterface
    {
        switch ($snack) {
            case 'cookies':
                return new CookiesFactory();
                break;
            case 'chocolates':
                return new ChocolatesFactory();
                break;
            case 'candies':
                return new CandiesFactory();
                break;
            default:
                throw new SimpleFactoriesException('Unknown');
                break;
        }
    }

    /**
     * @param $snack
     * @return string
     * @throws Exception
     */
    public function make($snack): string
    {
        $result = '';
        try {
            $factory = $this->buildFactory($snack);
            $factory->prepare();
            $factory->make();
            $factory->packing();
            $result = $factory->transport();
        } catch (\SimpleFactoriesException $exception) {
            $exception->logs($exception->getMessage());
        }

        return $result;
    }
}