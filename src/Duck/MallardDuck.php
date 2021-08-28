<?php declare(strict_types=1);

namespace Fittinq\DuckPond\Duck;

use Fittinq\DuckPond\Constants\Display;

class MallardDuck extends Duck
{
    /**
     * @return string
     */
    public function display (): string
    {
        return Display::MALLARD;
    }
}