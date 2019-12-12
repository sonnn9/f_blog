<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use Illuminate\Support\Facades\Validator;
use App\Repositories\Post\PostRepositoryInterface;
use App\Repositories\Category\CategoryRepositoryInterface;
use App\Http\Requests\PostRequest;

class PostsController extends Controller
{
    protected $postRepository, $categoryRepository;

    public function __construct(PostRepositoryInterface $postRepository, CategoryRepositoryInterface $categoryRepository)
    {
        $this->postRepository = $postRepository;
        $this->categoryRepository = $categoryRepository;
    }

    public function getShow()
    {
        $posts = $this->postRepository->show();

        return view('Post.show', ['posts' => $posts]);
    }

    public function getEdit($id)
    {
        $posts = $this->postRepository->find($id);
        $categories = $this->categoryRepository->all();
        if(empty($posts))
        {
            return redirect(route('post.show'))->withError(__('Post has ID = ') . $id . __('does not exist'));
        }

        return view('Post.edit', ['posts' => $posts, 'categories' => $categories]);
    }

    public function postEdit($id, PostRequest $request)
    {
        $posts = $this->postRepository->edit($id, $request->all());

        return redirect(route('post.show'))->with('notification', __('Edit done.'));
    }

    public function getCreate()
    {
        $categories = $this->categoryRepository->all();

        return view('Post.create', ['categories' => $categories]);
    }

    public function postCreate(PostRequest $request)
    {
        $this->postRepository->create($request->all());
        $data = $request->all();
        
        return redirect(route('post.create'))->with('notification', __('Add done.'));    
    }

    public function getDelete($id)
    {
        $result = $this->postRepository->find($id);
        $posts = $this->postRepository->delete($id);
        if(empty($result))
        {
            return redirect(route('post.show'))->withError(__('Post has ID = ') . $id . __('does not exist'));
        }
        
        return redirect(route('post.show'))->with('notification', __('Delete done.'));
    }

    public function changeLanguage($language)
    {
        \Session::put('lang', $language);
        return redirect()->back();
    }
}
