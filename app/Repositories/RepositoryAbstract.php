<?php

namespace App\Repositories;

use App\Repositories\RepositoryInterface;
use Illuminate\Support\Carbon;
use App\Models\Post;

abstract class RepositoryAbstract implements RepositoryInterface
{
    protected $model;

    public function __construct()
    {

    }

    public function Create()
    {
        return $this->model = new Post;
    }

    public function find($id)
    {
        return $this->model->findOrFail($id);
    }

    public function show()
    {
        return $this->model->all();
    }

    public function edit($id)
    {
        return $this->model->find($id);
    }

    public function delete($id)
    {
        return $this->model->find($id);
    }
}
