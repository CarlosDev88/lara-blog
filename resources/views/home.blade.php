@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Todas las Publicaciones</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif                
                    
                    @foreach ($posts as $post)                    
                        <section class="mb-4 content container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="float-left">
                                                <span class="card-title"> {{ $post->title }}</span>
                                            </div>                                            
                                        </div>

                                        <div class="card-body">
                                            <div class="form-group">
                                                <strong>Content:</strong>
                                                {{ $post->content }}
                                            </div>
                                            <div class="form-group">
                                                <strong>Author:</strong>
                                                {{ $post->author }}
                                            </div>
                                            <div class="form-group">
                                             <a class="btn btn-sm btn-success" href="{{ route('posts.index') }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>                     
                    @endforeach
              
            </div>
        </div>
    </div>
</div>
@endsection
