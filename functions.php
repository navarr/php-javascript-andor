<?php

namespace Navarr\JavaScript;

/**
 * Tests each operand in order.  If a falsey operand is found, it is returned.  Otherwise the last operand checked is returned.
 * 
 * @param ...mixed $operands Any number of operands
 * @return mixed
 */
function jsAnd(...$operands) {
    foreach ($operands as $operand) {
        if (!$operand) {
            break;
        }
    }
    return $operand;
}

/**
 * Tests each operand in order.  Returns the first truthy operand.  If none is found, returns the last operand checked.
 *
 * @param ...mixed $operands Any number of operands
 * @return mixed
 */
function jsOr(...$operands) {
    foreach ($operands as $operand) {
        if ($operand) {
            break;
        }
    }
    return $operand;
}
