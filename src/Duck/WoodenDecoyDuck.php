<?php declare(strict_types=1);

namespace Fittinq\DuckPond\Duck;

use Fittinq\DuckPond\Constants\Display;
use Fittinq\DuckPond\Constants\Quack;

class WoodenDecoyDuck extends RubberDuck
{
    /**
     * @return string
     */
    public function display(): string
    {
        return Display::WOODEN_DECOY_DUCK;
    }

    /**
     * @return string
     */
    public function quack(): string
    {
        return QUACK::NO_QUACK;
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
        return Parent::fly();
    }
}
