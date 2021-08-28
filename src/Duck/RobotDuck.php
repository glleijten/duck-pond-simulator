<?php declare(strict_types=1);

namespace Fittinq\DuckPond\Duck;

use Fittinq\DuckPond\Constants\Display;
use Fittinq\DuckPond\Constants\Fly;
use Fittinq\DuckPond\Constants\Quack;
use Fittinq\DuckPond\Constants\Swim;

class RobotDuck extends Duck
{
    /**
     * @return string
     */
    public function display(): string
    {
        return Display::ROBOT_DUCK;
    }

    /**
     * @return string
     */
    public function quack(): string
    {
        return Quack::NO_QUACK;
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
        return Fly::ROCKET_GOES_BRRR;
    }
}