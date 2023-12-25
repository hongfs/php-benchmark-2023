<?php
namespace app\model;

use think\Model;

class Order extends Model
{
    protected $table = 'orders';

    protected $pk = 'orderNumber';
}
