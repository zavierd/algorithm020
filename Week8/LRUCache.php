<?php
class LRUCache {

    private $map;
    private $cap;

    /**
     * @param Integer $capacity
     */
    function __construct($capacity) {
        $this->cap = $capacity;
    }

    /**
     * @param Integer $key
     * @return Integer
     */
    function get($key) {
        $key = 'k_' . $key;
        if (isset($this->map[$key])){
            $value = $this->map[$key];
            unset($this->map[$key]);
            $this->map[$key] = $value;

            return  $value;
        }else{
            return -1;
        }
    }

    /**
     * @param Integer $key
     * @param Integer $value
     * @return NULL
     */
    function put($key, $value) {
        $key = 'k_' . $key;
        if (isset($this->map[$key])){
            unset($this->map[$key]);
            $this->map[$key] = $value;

            return ;
        }

        if (count($this->map) >= $this->cap){
            array_shift($this->map);
        }
        $this->map[$key] = $value;
    }
}