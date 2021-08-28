<?php declare(strict_types=1);

namespace Fittinq\DuckPond\Duck;

use Fittinq\DuckPond\Constants\Fly;
use Fittinq\DuckPond\Constants\Quack;
use Fittinq\DuckPond\Constants\Swim;

class Duck
{
    /**
     * @return string
     */
    public function display(): string
    {
        return 'I am a duck.';
    }

    /**
     * @return string
     */
    public function quack(): string
    {
        return Quack::QUACK_QUACK;
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
        return Fly::FLAP_FLAP;
    }
}