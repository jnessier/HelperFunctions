<?php

/**
 * Check whether closure variable is really a closure.
 *
 * @param $closure Closure
 *
 * @return bool
 */
function is_closure($closure)
{
    return is_object($closure) && ($closure instanceof Closure);
}
