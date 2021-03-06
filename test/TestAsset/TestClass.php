<?php

/**
 * @see       https://github.com/laminas/laminas-xmlrpc for the canonical source repository
 * @copyright https://github.com/laminas/laminas-xmlrpc/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-xmlrpc/blob/master/LICENSE.md New BSD License
 */

namespace LaminasTest\XmlRpc\TestAsset;

class TestClass
{
    private $value1;
    private $value2;

    /**
     * Constructor
     *
     */
    public function __construct($value1 = null, $value2 = null)
    {
        $this->value1 = $value1;
        $this->value2 = $value2;
    }

    /**
     * Test1
     *
     * Returns 'String: ' . $string
     *
     * @param string $string
     * @return string
     */
    public function test1($string)
    {
        return 'String: ' . (string) $string;
    }

    /**
     * Test2
     *
     * Returns imploded array
     *
     * @param array $array
     * @return string
     */
    public static function test2($array)
    {
        return implode('; ', (array) $array);
    }

    /**
     * Test3
     *
     * Should not be available...
     *
     * @return void
     */
    protected function test3()
    {
    }

    /**
     * @param string $arg
     * @return struct
     */
    public function test4($arg)
    {
        return ['test1' => $this->value1, 'test2' => $this->value2, 'arg' => func_get_args()];
    }

    /**
     * Test base64 encoding in request and response
     *
     * @param  base64 $data
     * @return base64
     */
    public function base64($data)
    {
        return $data;
    }
}
