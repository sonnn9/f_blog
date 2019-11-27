<?php

namespace App\Repositories\Category;

use App\Models\Category;
use App\Repositories\RepositoryAbstract;
use App\Repositories\Category\CategoryRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class CategoryRepository implements CategoryRepositoryInterface
{

    protected $model;

    public function __construct()
    {
        $this->model = new Category();
    }

    public function all()
    {
        $categories = $this->model->all();
        
        return $categories;
    }

    public function create(array $data)
    {
        $category = $this->model->create($data);

        return $category;
    }
  
    public function edit(array $data, $id)
    {
        $record = $this->find($id);
        $category = $record->update($data);

        return $category;
    }

    public function delete($id)
    {
        $category = $this->model->destroy($id);

        return $category;
    }

    public function find($id)
    {
        $category = $this->model->findOrFail($id);

        return $category;
    }
}
