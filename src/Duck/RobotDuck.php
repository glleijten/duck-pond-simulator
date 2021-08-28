<?php declare(strict_types=1);

namespace Fittinq\DuckPond\Duck;

use Fittinq\DuckPond\Constants\Display;
use Fittinq\DuckPond\Constants\Fly;

class RobotDuck extends WoodenDecoyDuck
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
        return Parent::quack();
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
        return Fly::ROCKET_GOES_BRRR;
    }
}