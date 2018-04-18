<?php

/**
 * Dckap_Customapi - Version 1.0.0
 * Copyright (c) 2017 Dckap.All Right Reserved.
 * Author: Dckap <extensions@Dckap.com>
 * Website: https://www.Dckap.com
 * license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
 
namespace Dckap\Customapi\Api;
 
interface CustomapiInterface
{
    /**
     * Returns greeting message to user
     *
     * @api
     * @param string $name Users name.
     * @return string Greeting message with users name.
     */
    public function name($name);
}