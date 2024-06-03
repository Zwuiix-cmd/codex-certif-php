<?php

class Color
{
    public function __construct(
        protected int $r,
        protected int $g,
        protected int $b,
        protected int $a,
    ) {}

    /**
     * @return int
     */
    public function getR(): int
    {
        return $this->r;
    }

    /**
     * @return int
     */
    public function getG(): int
    {
        return $this->g;
    }

    /**
     * @return int
     */
    public function getB(): int
    {
        return $this->b;
    }

    /**
     * @return int
     */
    public function getAlpha(): int
    {
        return $this->a;
    }

    /**
     * @return string
     */
    public function toString(): string
    {
        return "R: $this->r; G: $this->g; B: $this->b; A: $this->a";
    }
}

class Car
{
    public function __construct(
        protected string $brand,
        protected string $model,
        protected int $year,
        protected int $horsepower,
        protected Color $color,
    ) {}

    /**
     * @return string
     */
    public function getBrand(): string
    {
        return $this->brand;
    }

    /**
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * @return int
     */
    public function getYear(): int
    {
        return $this->year;
    }

    /**
     * @return int
     */
    public function getHorsepower(): int
    {
        return $this->horsepower;
    }

    /**
     * @return Color
     */
    public function getColor(): Color
    {
        return $this->color;
    }

    public function getDetails(): string
    {
        return "Brand: $this->brand, Model: $this->model, Year: $this->year, Color: {$this->color->toString()}, Horsepower: $this->horsepower kw";
    }
}

$color = new Color(0, 0, 255, 255);
$car = new Car("Audi", "RS6", 2019, 605, $color);

echo $car->getDetails() . PHP_EOL;
