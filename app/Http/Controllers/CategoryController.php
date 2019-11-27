<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Repositories\Category\CategoryRepository;

class CategoryController extends Controller
{
    protected $repository;

    public function __construct(CategoryRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $categories = $this->repository->all();

        return view('categories.index')->with('categories', $categories);
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categories',
        ]);
            
        $data = $request->all();
        $categories = $this->repository->create($data);

        return redirect()->route('categories.index')->with('message',  __('success_add'));
    }

    public function edit($id)
    {
        $category = $this->repository->find($id); 

        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required|unique:categories',
        ]);

        $data = $request->all();
        $categories = $this->repository->edit($data, $id);

        return redirect()->route('categories.index')->with('message',  __('success_update'));
    }

    public function delete($id)
    {
        $categories = $this->repository->delete($id);

        return redirect()->route('categories.index')
            ->with('categories', $categories)
            ->with('message',  __('success_delete'));
    }
}
