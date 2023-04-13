@extends('layouts.app')

@section('content')

    @include('components.articlesWithPagination',['articles' => $articles])

@endsection
