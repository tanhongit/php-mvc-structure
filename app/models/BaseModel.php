<?php

class BaseModel extends Database
{
    protected $connectResult;

    public function __construct()
    {
        $this->connectResult = $this->connect();
    }

    /**
     * Create new data to table
     * @param $table
     * @param $data
     * @return int|string|void
     */
    public function create($table, $data)
    {
        $data['id'] = 0;
        return $this->save($table, $data);
    }

    public function update()
    {
        return __METHOD__;
    }

    public function delete()
    {
        return __METHOD__;
    }

    /**
     * Get all data in the table
     * @param $table
     * @return array|void
     */
    public function all($table)
    {
        return $this->getByOptions($table);
    }

    /**
     * Get data in table by ID
     * @param $table
     * @param $id
     * @return array|false|string[]|void|null
     */
    public function find($table, $id)
    {
        return $this->getRecordByID($table, $id);
    }


    public function _query($sql)
    {
        return mysqli_query($this->connectResult, $sql);
    }
}