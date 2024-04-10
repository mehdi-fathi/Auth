<?php

namespace App\Http\Controllers;

/**
 * @property  \App\Logic\UserService UserService
 */
abstract class Controller
{
    /**
     * @param $property
     * @return mixed|void
     */
    public function __get($property)
    {
        if (app($property)) {
            return app($property);
        }
    }

}
