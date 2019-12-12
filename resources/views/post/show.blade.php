@extends('layouts.index')
@section('content')
@section('title', __('News'))
<div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">{{ __('Category') }}
                        <small>{{ __('Post') }}</small>
                    </h1>
                </div>
                @if (session('notification'))
                <div class="alert alert-success">
                    {{ session('notification') }}
                </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger text-center">{{ session('error') }}</div>
                @endif
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr align="center">
                            <th>{{ __('ID') }}</th>
                            <th>{{ __('Title') }}</th>
                            <th>{{ __('Content') }}</th>
                            <th>{{ __('Category')}}</th>
                            <th>{{ __('Created at') }}</th>
                            <th>{{ __('Updated at') }}</th>
                            <th>{{ __('Delete') }}</th>
                            <th>{{ __('Edit') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            @foreach ($post->categories->pluck('name') as $cate)
                                <tr class="odd gradeX" align="center">
                                    <td>{{ $post->id }}</td>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->content }}</td>
                                    <td>{{ $cate }}</td>
                                    <td>{{ $post->created_at }}</td>
                                    <th>{{ $post->updated_at }}</th>
                                    <td class="center"><i class="fa fa-trash-o fa-fw"></i><a href="{{ route('post.delete', $post->id) }}">{{ __('Delete') }}</a></td>
                                    <td class="center"><i class="fa fa-pencil fa-fw"></i><a href="{{ route('post.edit', $post->id) }}">{{ __('Edit') }}</a></td>
                                </tr>
                            @endforeach
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
