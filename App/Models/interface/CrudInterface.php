<?php

namespace App\Models\interface;

interface CrudInterface
{

    // create
    public function create(array $data): ?int;

    // read
    public function find(int $id): ?object;
    public function get(array $columns, array $where): array;

    // update

    public function update(array $columns, array $where): array;
    // delete
    public function delete(array $where) : int;
}
