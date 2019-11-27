<?php

namespace App\Repositories;

use App\Repositories\RepositoryInterface;
use Illuminate\Support\Carbon;
use App\Models\Post;
use Illuminate\Database\Eloquent\ModelNotFoundException;

abstract class RepositoryAbstract implements RepositoryInterface
{
    protected $model;

    public function __construct()
    {

    }

    public function create()
    {
        return $this->model = new Post;
    }

    public function find($id)
    {
        
        $post = $this->model->find($id);
        if(!$post)
        {
            throw new ModelNotFoundException('User not found by ID ' . $id);
        }

        return $post;
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
