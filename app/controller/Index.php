<?php

namespace app\controller;

use app\BaseController;
use app\model\Order;

class Index extends BaseController
{
    public function index()
    {
        $id = random_int(10100, 10200);

        $data = Order::find($id);

        return json($data);
    }

    public function hello($name = 'ThinkPHP8')
    {
        return 'hello,' . $name;
    }
}
