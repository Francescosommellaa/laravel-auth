@extends('layouts.app')

@section('content')
    <h1>Modifica Progetto</h1>

    <form action="{{ route('admin.projects.update', $project->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="name">Nome Progetto:</label>
            <input type="text" name="name" value="{{ old('name', $project->name) }}" required>
        </div>

        <div>
            <label for="description">Descrizione:</label>
            <textarea name="description" required>{{ old('description', $project->description) }}</textarea>
        </div>

        <div>
            <label for="img">Immagine (URL):</label>
            <input type="text" name="img" value="{{ old('img', $project->img) }}">
        </div>

        <div>
            <label for="thumbnail_img">Miniatura (URL):</label>
            <input type="text" name="thumbnail_img" value="{{ old('thumbnail_img', $project->thumbnail_img) }}">
        </div>

        <div>
            <label for="website_url">Link al Sito:</label>
            <input type="url" name="website_url" value="{{ old('website_url', $project->website_url) }}">
        </div>

        <button type="submit" class="btn btn-primary">Aggiorna Progetto</button>
    </form>
@endsection
