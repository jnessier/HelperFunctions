<?php

/**
 * Replace key in one- or multidimensional array.
 *
 * @param mixed  $subject Subject
 * @param string $newKey  New key
 * @param string $oldKey  Old key
 *
 * @see https://stackoverflow.com/a/35214048/2338829
 *
 * @return mixed
 */
function array_replace_key($subject, string $newKey, string $oldKey)
{
    // if the value is not an array, then you have reached the deepest
    // point of the branch, so return the value
    if (!is_array($subject)) {
        return $subject;
    }

    $newArray = []; // empty array to hold copy of subject
    foreach ($subject as $key => $value) {
        // replace the key with the new key only if it is the old key
        $key = ($key === $oldKey) ? $newKey : $key;

        // add the value with the recursive call
        $newArray[$key] = call_user_func(__FUNCTION__, $value, $newKey, $oldKey);
    }

    return $newArray;
}
