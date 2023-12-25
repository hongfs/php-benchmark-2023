<?php

namespace app\controller;

use app\model\Order;
use support\Request;

class IndexController
{
    public function index(Request $request)
    {
        $id = random_int(10100, 10200);

        $data = Order::find($id);

        return json($data);
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
