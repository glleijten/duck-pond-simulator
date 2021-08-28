<?php declare(strict_types=1);

namespace Fittinq\DuckPond\Duck;

use Error;
use UnexpectedValueException;

class DuckFactory
{
    /**
     * @throws UnexpectedValueException
     */
    public function letThereBeDuck($duck)
    {
        try {
        $duck = new $duck();
        } catch (Error) {
            if (!$duck instanceof Duck) {
                throw new UnexpectedValueException("This duck is not yet known");
            }
        }

        return $duck;
    }
}