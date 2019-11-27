<?php

namespace App\Repositories\Category;

use App\Repositories\RepositoryInterface;

interface CategoryRepositoryInterface
{
    public function find($id);

    public function create(array $data);

    public function all();

    public function edit(array $data, $id);

    public function delete($id);
}
