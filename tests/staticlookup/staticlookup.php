<?php
Foo::aStaticMethod();
$classname = 'Foo';
$classname::aStaticMethod();
print $classname::$my_static . "\n";
Foo::method([
    'foo' => 'bar',
    'bar' => 'foo',
    'foobar' => 'barfoo',
    'barfoo' => 'foobar'
]);
MyClass::$aStaticProp;
MyClass::$aStaticProp = 1;
$classname::$aStaticProp;
MyClass::$$b;

class Foo
{
    public static $my_static = 'foo';

    public function staticValue() {
        return self::$my_static;
    }
}

class Bar extends Foo
{
    public function fooStatic() {
        return parent::$my_static;
    }
}

abstract class DataRecord {
    private static $db; // MySQLi-Connection, same for all subclasses
    private static $table = array(); // Array of tables for subclasses

    public static function init($classname, $table, $db = false) {
        if (!($db === false)) self::$db = $db;
        self::$table[$classname] = $table;
    }

    public static function getDB() { return self::$db; }
    public static function getTable($classname) { return self::$table[$classname]; }
}

abstract class Singleton {

    protected static $_instance = NULL;

    /**
     * Prevent direct object creation
     */
    final private function  __construct() { }

    /**
     * Prevent object cloning
     */
    final private function  __clone() { }

    /**
     * Returns new or existing Singleton instance
     * @return Singleton
     */
    final public static function getInstance(){
        if(null !== static::$_instance){
            return static::$_instance;
        }
        static::$_instance = new static();
        return static::$_instance;
    }

}

MyClass::$table[$classname] = 1;

$obj::veryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryLongProperty;
$obj::$veryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryLongProperty;
$obj::veryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryLongProperty();
$obj::$veryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryLongProperty();
