@extends('layouts.app');
@section('content')
    <section class="container">
        <h2>New Project</h2>
        <form action="{{ route('admin.projects.store') }}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="mb-3">
                {{-- TITLE --}}
                <label for="title">Titolo</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                    required maxlength="200" minlength="3" value="{{ old('title') }}">
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- BODY --}}
            <div class="mb-3">
                <label for="body">Descrizione</label>
                <textarea class="form-control @error('body') is-invalid @enderror" name="body" id="body" maxlength="200"
                    minlength="3" value="{{ old('body') }}">
                </textarea>
                @error('body')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- IMG --}}
            <div class="d-flex mb-3">
                <div class="me-3">
                    <img id="uploadPreview" width="100" src="https://via.placeholder.com/300x200">
                </div>
                <div class="w-100">
                    <label for="image">Immagine</label>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" name="image"
                        id="image" required maxlength="200" minlength="3" value="{{ old('image') }}">
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

            </div>

            <button type="submit">invia</button>
            <button type="reset">reset</button>

        </form>
    </section>
@endsection
