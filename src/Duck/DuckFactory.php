<?php declare(strict_types=1);

namespace Fittinq\DuckPond\Duck;

use UnexpectedValueException;

class DuckFactory
{
    /**
     * @throws UnexpectedValueException
     */
    public function letThereBeDuck($duck)
    {
        throw new UnexpectedValueException("This duck is not yet known");
    }
}