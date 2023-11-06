<?php

namespace App\Models\Contracts;



abstract class BaseModel implements CrudInterface
{
    protected $connection;
    protected $table;
    protected $primaryKey = "id";
    protected $attribute = [];

    protected function __construct($connection, $table, $primaryKey)
    {
    }


    protected function getPrimaryKey()
    {
        return $this->primaryKey;
    }

    protected function setPrimaryKey($primaryKey)
    {
        $this->primaryKey = $primaryKey;
    }

    protected function getAttribute($key)
    {
        if (is_null($key) || !array_key_exists($key, $this->attribute)) {
            return null;
        }
        return $this->attribute[$key];
    }
}
