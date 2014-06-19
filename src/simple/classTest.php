<?php
require_once '../mylibs/_.php';

class A {

    private $age;

    public function __construct () {
        $this->age = 1;
    }

    function foo () {
        if (isset($this)) {
            echo '$this is defined (';
            echo get_class($this);
            d(")");
        } else {
            d("\$this is not defined.\n");
        }
    }
}

/**
 * singleton
 */
class Single {

    private $name = NULL;

    private static $singleton = NULL;

    private function __construct () {}

    public static function get_instance () {
        if (! is_null(Single::$singleton))
            return Single::$sigleton;
        return $singleton  = new Single();
    }

    function bar () {
        // Note: the next line will issue a warning if E_STRICT is enabled.
        A::foo();
    }

    /**
     *
     * @return the $name
     */
    public function getName () {
        return $this->name;
    }

    /**
     *
     * @param string $name            
     */
    public function setName ($name) {
        $this->name = $name;
    }
}

$a = new A();
$a->foo();

$b  =Single::get_instance();
$b->setName('you name!');
dp($b);

$b  =Single::get_instance();
$b->setName('Jayin');
dp($b);



