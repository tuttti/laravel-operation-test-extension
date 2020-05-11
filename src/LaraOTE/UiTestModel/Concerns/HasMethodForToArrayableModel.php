<?php
namespace Tuttti\LaraOTE\UiTestModels\Concerns;

trait HasMethodForToArrayableModel
{
    public function setUpData($data):void
    {
        if(! isValidData($data))
        {
            return;
        }

        foreach($data as $name => $value)
        {
            if(isset($value))
            {
                $this[$name] = $value;   
            }
        }
    }
    public function toArray():array
    {
        $data = [];
        foreach($this as $name => $value)
        {
            if(isset($value))
            {
                $data[$name] = $value;   
            }
        }
        return $data;
    }

    //オフセットが存在するかどうか
    public function offsetExists($offset) 
    {
        return isset($this->$offset);
    }
    //オフセットを取得する
    public function offsetGet($offset) 
    {
        if (! ($this->$offset ?? null)) 
        {
            return null;
        }
        return $this->$offset;
    }
    //オフセットを設定する
    public function offsetSet($offset, $value) 
    {
        if(! property_exists($this, $offset)) 
        {
            return;
        }
        $this->$offset = $value;
    }

    //オフセットの設定を解除する
    public function offsetUnset($offset) 
    {
        if(! property_exists($this, $offset)) 
        {
            return;
        }
        $this->$offset = null;
    }
}