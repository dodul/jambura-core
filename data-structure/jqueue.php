<?php
class jQueue extends jDataStructures
{
    public function __construct($data)
    {
        parent::__construct($data);
    }

    /**
     * put the element to the first position
     * @param mixed $elem
     * @return jQueue
     */
    public function push($elem)
    {
        array_unshift($this->_data, $elem);
        return $this;
    }

    /**
     * returns the element in the first position
     * @throws Exception
     * @return mixed
     */
    public function peek()
    {
        if ($this->isEmpty()) {
            throw new Exception('The Queue is Empty');
        }

        return $this->_data[array_key_first($this->_data)];
    }

    /**
     * remove the first element and returns it
     * @throws Exception
     * @return mixed
     */
    public function pop()
    {
        if ($this->isEmpty()) {
            throw new Exception('The Queue is Empty');
        }

        return array_shift($this->_data);
    }

    /**
     * check if the queue is empty
     * @return bool
     */
    public function isEmpty()
    {
        return empty($this->_data);
    }

    /**
     * returns the element against the key | index
     * @param mixed $key
     * @throws Exception
     * @return mixed
     */
    public function get($key)
    {
        if (!isset($this->_data[$key])) {
            throw new Exception('No value against the index/key');
        }

        return $this->_data[$key];
    }
}
