<?php

namespace App\Repositories\Post;

use App\Models\Post;
use App\Repositories\RepositoryAbstract;
use App\Repositories\Post\PostRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class PostRepository extends RepositoryAbstract implements PostRepositoryInterface
{
    public function __construct()
    {
        $this->model = new Post;
    }
}
