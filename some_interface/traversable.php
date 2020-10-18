<?php
///预定义的接口-》遍历
///
class traversableClass implements Iterator
{
    private $position = 0;
    private $array = array(
        'first',
        'second',
        'third',
    );

    public function __construct()
    {
        var_dump(__METHOD__);
        echo "<br>";
        $this->position = 0;
    }

//返回到迭代器的第一个元素
    public function rewind()
    {
        var_dump(__METHOD__);
        echo "<br>";
        // TODO: Implement rewind() method.
        $this->position = 0;
    }

//返回当前元素
    public function current()
    {
        var_dump(__METHOD__);
        echo "<br>";
        // TODO: Implement current() method.
        return $this->array[$this->position];
    }

//返回当前元素的键
    public function key()
    {
        var_dump(__METHOD__);
        echo "<br>";
        // TODO: Implement key() method.
        return $this->position;
    }

//向前移动到下一个元素
    public function next()
    {
        var_dump(__METHOD__);
        echo "<br>";
        // TODO: Implement next() method.
        ++$this->position;
    }

//检查当前位置是否有效
    public function valid()
    {
        var_dump(__METHOD__);
        echo "<br>";
        // TODO: Implement valid() method.
        return isset($this->array[$this->position]);
    }


}

$it = new traversableClass();
foreach ($it as $key => $value) {
    var_dump($key, $value);
    echo "<br>";
}

echo "===============================================================<br>";
///
/// IteratorAggregate创建外部迭代器的接口
///

///
class myData implements IteratorAggregate
{
    public $pro1 = "pro one";
    public $pro2 = "pro two";
    public $pro3 = "pro three";

    /**
     * @var string
     */


    public function __construct()
    {
        echo "先执行的我" . "<br>";
        $this->pro4 = 'last pro';
    }

    public function getIterator()
    {
        echo "执行了我<br>";
        //获取一个外部迭代器
        return new ArrayIterator($this);
        // TODO: Implement getIterator() method.
    }
}

$obj = new myData();
foreach ($obj as $key => $value) {
    var_dump($key, $value);
    echo "<br>";
}
echo "===============================================================<br>";

///数组式访问 =>提供像访问数组一样访问对象的能力的接口
class obj implements ArrayAccess
{
    private $container = array();

    public function __construct()
    {
        $this->container = array(
            "one" => 1,
            "two" => 2,
            "three" => 3,
        );
    }

    //检查一个偏移位置是否存在
    public function offsetExists($offset)
    {
        return $this->container[$offset] ?? false;
        // TODO: Implement offsetExists() method.
    }

    //获取一个偏移位置的值
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
        // TODO: Implement offsetGet() method.
    }

    //设置一个偏移位置的值
    public function offsetSet($offset, $value)
    {
        // TODO: Implement offsetSet() method.
        is_null($offset)
            ? $this->container[] = $value
            : $this->container[$offset] = $value;
    }

    //复位一个偏移位置的值
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
        // TODO: Implement offsetUnset() method.
    }
}

//unset() 销毁指定的变量  在函数中的行为会以来于想要销毁的变量的类型而有不同
$obj = new obj();
var_dump(isset($obj['two']));
echo "<br>";
$obj["two"] = 'oldTwo';
var_dump($obj['two']);
echo "<br>";
unset($obj['two']);
var_dump(isset($obj['two']));
echo "<br>";
$obj["two"] = "value";
var_dump($obj["two"]);
echo "<br>";
$obj[] = 'Append 1';
$obj[] = 'Append 2';
$obj[] = 'Append 3';

print_r($obj);
echo "<br>";
///
echo "===============================================================<br>";
///
///序列化   自定义序列化的接口
class SerializationClass implements Serializable
{
    private $data;

    public function __construct()
    {
        $this->data = "My private data";
    }

    public function serialize()
    {
        // TODO: Implement serialize() method.
        //serialize()  返回字符串，此字符串包含了表示value的字节流，可以存储在任何地方
        //这有利于存储或传递PHP的值，同事不丢失其类型和结构  ==》》》序列化
        return serialize($this->data);
    }

    public function unserialize($serialized)
    {
        // TODO: Implement unserialize() method.
        ///unserialize 对单一的已序列化的变量进行操作，将其换回PHP的值
        $this->data = unserialize($serialized);
    }

    public function getData()
    {
        return $this->data;
    }
}

$serObj = new SerializationClass();
$ser = serialize($serObj);
$newObj = unserialize($ser);
var_dump($newObj->getData());

///
///closure 用于代表匿名函数的类
///


///caution 对象不能通过new实例化
///
