<?php

    /**
     * Created by PhpStorm.
     * User: sunke
     * Date: 2016/7/12
     * Time: 14:29
     */
    interface Provider
    {

        public function authorize();
    }

    function login(Provider $provider)
    {
        $provider->authorize();
    }