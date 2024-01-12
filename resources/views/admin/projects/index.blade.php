@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>Projects</h1>
        @foreach ($projects as $item)
            <p><a href="{{ route('admin.projects.show', $item->id) }}">
                    {{ $item->title }}
                </a></p>
        @endforeach
    </section>
@endsection
