<?php

class TariffDTO {
    private string $name;
    private int $price;
    private string $expireAt;
    private string $speed;
    private string $type;

    public function __construct($name, $price, $expireAt, $speed, $type) {
        $this->name = $name;
        $this->price = $price;
        $this->expireAt = $expireAt;
        $this->speed = $speed;
        $this->type = $type;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function getExpireAt(): string
    {
        return $this->expireAt;
    }

    public function getSpeed(): string
    {
        return $this->speed;
    }

    public function getType(): string
    {
        return $this->type;
    }
}

$tariff = new TariffDTO('Тариф "Базовый"', 500, '30 дней', '50 Мбит/с', 'актуальный');

echo $tariff->getName() . "\n";
echo $tariff->getPrice() . " рублей\n";
echo $tariff->getExpireAt() . "\n";
echo $tariff->getSpeed() . "\n";
echo $tariff->getType() . "\n";

