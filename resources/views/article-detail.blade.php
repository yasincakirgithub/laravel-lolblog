@extends('layouts.app')

@section('content')
    @include('components.singleArticle', ['article' => $article])
@endsection


@section('customCss')
    <style>
        .tm-post-full {

            max-width: none;

        }

        .tm-comment-form {
            max-width: none;
        }
    </style>
@endsection
