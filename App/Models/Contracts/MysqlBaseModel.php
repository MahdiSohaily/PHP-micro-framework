<?php

namespace App\Models\Contracts;


class mysqlBaseModel extends BaseModel
{

    public function __construct()
    {
        try {
            $this->connection = new \PDO("mysql:host={$_ENV['DB_HOST']};dbname={$_ENV['DB_NAME']}", $_ENV['DB_USER'], $_ENV['DB_PASSWORD']);
            $this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $th) {
            throw $th;
        }
    }
    // create
    public function create(array $data): int
    {
        return 0;
    }

    // read
    public function find(int $id): object
    {
        return (object)[];
    }
    public function get(array $columns, array $where): array
    {
        return [];
    }

    // update

    public function update(array $columns, array $where): int
    {
        return 0;
    }
    // delete
    public function delete(array $where): int
    {
        return 0;
    }
}
