<?php

namespace app\controller;

use app\BaseController;

class Index extends BaseController
{
    public function index()
    {
        $options = [
            'http' => [
                'method' => "GET",
                'header' => "User-Agent: hongfs\r\n"
            ]
        ];

        $context = stream_context_create($options);

        file_get_contents('https://cdn-heart.hongfs.cn/', false, $context);

        return '';
    }

    public function hello($name = 'ThinkPHP8')
    {
        return 'hello,' . $name;
    }
}
