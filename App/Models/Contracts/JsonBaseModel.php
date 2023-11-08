<?php

namespace App\Models\Contracts;


class JsonBaseModel extends BaseModel
{
    // create
    public function create(array $data): ?int
    {

        return 0;
    }

    // read
    public function find(int $id): ?object
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
