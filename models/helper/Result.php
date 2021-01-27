<?php

namespace app\models\helper;

/**
 * Class Result
 */
class Result
{
    /**
     * @param boolean $success
     * @param string $message
     * @param array $addition
     * @return array
     */
    static public function json($success = true, $message = '', $addition = [])
    {
        return array_merge([
            'success' => $success,
            'message' => $message
        ], $addition);
    }
}
