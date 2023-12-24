<?php

namespace app\controller;

use support\Request;

class IndexController
{
    public function index(Request $request)
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

    public function view(Request $request)
    {
        return view('index/view', ['name' => 'webman']);
    }

    public function json(Request $request)
    {
        return json(['code' => 0, 'msg' => 'ok']);
    }

}
