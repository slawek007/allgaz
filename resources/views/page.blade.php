@extends('layouts.layout')
@section('title') {!! $page->title !!} @endsection
@section('description') {!! $page->meta_description !!} @endsection
@section('content')

  <div class="container pt-4">
      <article>
        <h2>{{ $page->title }}</h2>
        <hr class="mt-1 mb-2">
        {!! $page->body !!}
      </article>
  </div>

@endsection
