<?php

namespace App\Models\Contracts;

use Medoo\Medoo;


class mysqlBaseModel extends BaseModel
{

    public function __construct($id = null)
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

        if (!is_null($id)) {
            return $this->find($id);
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
        $record = $this->connection->get($this->table, '*', [$this->primaryKey => $id]);
        foreach ($record as $key => $value) {
            $this->setAttribute($key, $value);
        }
        return $this;
    }
    public function getAll(): array
    {
        return $this->connection->select($this->table, '*');
    }
    public function get(array $columns, array $where): array
    {
        return $this->connection->get($this->table, $columns, $where);
    }

    // update

    public function update(array $data, array $where): int
    {
        return $this->connection->update($this->table, $data, $where)->rowCount() ?? -1;
    }
    // delete
    public function delete(array $where): int
    {
        return $this->connection->delete($this->table, $where)->rowCount() ?? -1;
    }
}
