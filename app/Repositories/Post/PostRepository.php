<?php

namespace App\Repositories\Post;

use App\Models\Post;
use App\Repositories\RepositoryAbstract;
use App\Repositories\Post\PostRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class PostRepository extends RepositoryAbstract implements PostRepositoryInterface
{
    public function __construct()
    {
        $this->model = new Post;
        $this->table = 'posts';
    }

    public function create($data)
    {
        $category_id = $data['categories'];
        $post = $this->model->create($data);
        $post->categories()->attach($category_id);

        return $post;
    }

    public function edit($id, $data)
    {
        $categoriy_id = $data['categories'];
        $result = $this->model->find($id);
        $result->update($data);
        $result->categories()->sync($categoriy_id);

        return $result;
    }

    public function find($id)
    {
        $result = $this->model->with('categories')->find($id);
        if(!$result)
        {
            return [];
        }

        return $result;
    }
}
