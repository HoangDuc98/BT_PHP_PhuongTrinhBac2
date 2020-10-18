<?php


class QuadraticEquation
{
    private $a;
    private $b;
    private $c;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    function get_a()
    {
        return $this->a;
    }

    function get_b()
    {
        return $this->b;
    }

    function get_c()
    {
        return $this->c;
    }

    public function getDiscriminant()
    {
        return $this->b * $this->b - 4 * $this->a * $this->c;

    }

    public function getRoot1()
    {
        return ((-$this->b + pow($this->getDiscriminant(), 0.5)) / (2 * $this->a));

    }

    public function getRoot2()
    {
        return ((-$this->b - pow($this->getDiscriminant(), 0.5)) / (2 * $this->a));
    }

    public function getRoot()
    {
        $x = $this->getDiscriminant();
        if ($x < 0) {
            echo "phuong trinh vo nghiem .";
        } else if ($x == 0) {
            echo "<br>Phuong trinh co nghiem kep :" . $this->getRoot1();
        } else {
            echo "<br>Phuong trinh co hai nghiem pha biet :" . $this->getRoot1() . " va " . $this->getRoot2();
        }
    }
}