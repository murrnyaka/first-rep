<?php
namespase: App;
class MagicClass {
    public function __construct()
    {
        echo "construct ";
    }

    public function __destruct()
    {
        echo "destruct ";
    }

    public function  __sleep()
    {
        echo "sleep ";
    }

    public function  __wakeup()
    {
        echo "wakeup ";
    }

    public function __get($a)
    {
        echo "get ";
    }

    public function __set($a, $b)
    {
        echo "set ";
    }

    public function  __isset($a)
    {
        echo "isset ";
    }

    public function  __invoke()
    {
        echo "invoke ";
    }

    public function  __debugInfo()
    {
        echo "debugInfo ";
    }

    public function  __call($a, $b)
    {
        echo "call ";
    }

    public static function b() {
        return "Это метод класса";
    }

}