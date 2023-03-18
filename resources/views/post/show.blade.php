@extends('layouts.app')

@section('template_title')
    {{ $post->name ?? 'Show Post' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Post</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('posts.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Categoria Id:</strong>
                            {{ $post->categoria_id }}
                        </div>
                        <div class="form-group">
                            <strong>Title:</strong>
                            {{ $post->title }}
                        </div>
                        <div class="form-group">
                            <strong>Content:</strong>
                            {{ $post->content }}
                        </div>
                        <div class="form-group">
                            <strong>Author:</strong>
                            {{ $post->author }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
