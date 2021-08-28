<?php declare(strict_types=1);

namespace Fittinq\DuckPond\Duck;

use Fittinq\DuckPond\Constants\Display;
use Fittinq\DuckPond\Constants\Fly;
use Fittinq\DuckPond\Constants\Quack;

class RubberDuck extends Duck
{
    /**
     * @return string
     */
    public function display(): string
    {
        return Display::RUBBER_DUCK;
    }

    /**
     * @return string
     */
    public function quack(): string
    {
        return QUACK::SQUEAK_SQUEAK;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return strstr(__CLASS__, 'Fittinq\DuckPond\Duck\\');
    }

    /**
     * @return string
     */
    public function swim(): string
    {
        return Parent::swim();
    }

    /**
     * @return string
     */
    public function fly(): string
    {
        return Fly::NO_FLY;
    }
}