<?php

namespace App\Models\Contracts;

use Medoo\Medoo;


class mysqlBaseModel extends BaseModel
{

    public function __construct()
    {
        try {
            $this->connection = new Medoo([
                'type' => 'mysql',
                'host' => $_ENV['DB_HOST'],
                'database' => $_ENV['DB_NAME'],
                'username' => $_ENV['DB_USER'],
                'password' => $_ENV['DB_PASSWORD'],
                'error' => \PDO::ERRMODE_EXCEPTION,
            ]);
        } catch (\PDOException $th) {
            throw $th;
        }
    }
    // create
    public function create(array $data): int
    {
        $this->connection->insert($this->table, $data);
        return $this->connection->id() ?? -1;
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
