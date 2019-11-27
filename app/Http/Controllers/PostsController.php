<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use Illuminate\Support\Facades\Validator;
use App\Repositories\Post\PostRepositoryInterface;
use App\Http\Requests\PostRequest;

class PostsController extends Controller
{
    protected $postRepository;

    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function getShow()
    {
        $posts = $this->postRepository->show();

        return view('Post.show', ['posts' => $posts]);
    }

    public function getEdit($id)
    {
        $posts = $this->postRepository->find($id);

        return view('Post.edit', ['posts' => $posts]);
    }

    public function postEdit($id, PostRequest $request)
    {
        $posts = $this->postRepository->find($id);
        $posts->title = $request->Title;
        $posts->content = $request->Content;
        $posts->save();

        return redirect(route('post.show'))->with('notification', __('Edit done.'));
    }

    public function getCreate()
    {
        return view('Post.create');
    }

    public function postCreate(PostRequest $request)
    {
        $post = $this->postRepository->Create();
        $post->title = $request->Title;
        $post->content = $request->Content;
        $post->save();

        return redirect(route('post.create'))->with('notification', __('Add done.'));    
    }

    public function getDelete($id)
    {
        $posts = $this->postRepository->find($id);
        $posts->delete();

        return redirect(route('post.show'))->with('notification', __('Delete done.'));
    }
    
    public function changeLanguage($language)
    {
        \Session::put('lang', $language);

        return redirect()->back();
    }
}
