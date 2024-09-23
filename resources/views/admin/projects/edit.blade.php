@extends('layouts.app')

@section('content')
    <div class="container my-admin-main mt-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h1>Modifica Progetto</h1>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.projects.update', $project->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="name">Nome Progetto:</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name', $project->name) }}"
                            required>
                    </div>

                    <div class="form-group">
                        <label for="description">Descrizione:</label>
                        <textarea name="description" class="form-control" rows="5" required>{{ old('description', $project->description) }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="img">Immagine (URL):</label>
                        <input type="text" name="img" class="form-control" value="{{ old('img', $project->img) }}">
                    </div>

                    <div class="form-group">
                        <label for="thumbnail_img">Miniatura (URL):</label>
                        <input type="text" name="thumbnail_img" class="form-control"
                            value="{{ old('thumbnail_img', $project->thumbnail_img) }}">
                    </div>

                    <div class="form-group">
                        <label for="website_url">Link al Sito:</label>
                        <input type="url" name="website_url" class="form-control"
                            value="{{ old('website_url', $project->website_url) }}">
                    </div>

                    <button type="submit" class="btn btn-success mt-3">Aggiorna Progetto</button>
                </form>
            </div>
        </div>
    </div>
@endsection
