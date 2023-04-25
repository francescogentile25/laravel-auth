@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h1>Modifica:{{ $project->title }}</h1>
    </div>
    <div class="container">
        <form action="{{ route('projects.update', $project) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                    value="{{ old('title', $project->title) }}" id="title" aria-describedby="titleHelp">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                <div class="mb-3">
                    <label for="website_link" class="form-label">Link sito</label>
                    <input type="text" name="website_link"
                        class="form-control @error('website_link') is-invalid @enderror"
                        value="{{ old('website_link', $project->website_link) }}" id="website_link"
                        aria-describedby="titleHelp">
                    @error('website_link')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="description">{{ old('description', $project->description) }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Salva</button>
        </form>
    </div>
@endsection
