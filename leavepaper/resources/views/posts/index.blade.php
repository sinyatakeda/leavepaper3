@extends('layouts.app')

@section('content')
    <div class="container pt-5">
    <div class="mb-4">
    <a href="{{ route('posts.create') }}" class="btn btn-success">
        書き込み
    </a>
        <div class="row">
        @foreach ($posts as $post)
        <div class="col-10 mb-2 box23">
                <div class="title">
                    {{ $post->title }}
                </div>
                <div class="text-success">
                    <span class="mr-2">
                        {{ $post->created_at->format('Y.m.d') }}
                    </span>

                    <a class="card-link" href="{{ route('posts.show', ['post' => $post]) }}">
                    <button class="btn text-primary">詳細</button>
                    </a>
                    <form style="display: inline-block;" method="POST" action="{{ route('posts.destroy', ['post' => $post]) }}">
                    @csrf
                    @method('DELETE')

                    <button class="btn text-danger">削除</button>
                    </form>
                </div>
        </div>
        @endforeach
        </div>
        <div class="d-flex justify-content-center mb-5">
    {{ $posts->links() }}
        </div>
    </div>
@endsection