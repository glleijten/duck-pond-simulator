<?php declare(strict_types=1);

namespace Fittinq\DuckPond\Duck;

use Fittinq\DuckPond\Constants\Display;
use Fittinq\DuckPond\Constants\Fly;
use Fittinq\DuckPond\Constants\Quack;
use Fittinq\DuckPond\Constants\Swim;

class WoodenDecoyDuck extends Duck
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
    public function getName(): string
    {
        return strstr(__CLASS__, 'Fittinq\DuckPond\Duck\\');
    }

    /**
     * @return string
     */
    public function swim(): string
    {
        return Swim::SPLASH_SPLASH;
    }

    /**
     * @return string
     */
    public function fly(): string
    {
        return Fly::NO_FLY;
    }
}
