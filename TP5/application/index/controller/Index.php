<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
        echo "桥里吗";
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
}
