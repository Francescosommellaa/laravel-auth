@extends('layouts.app')

@section('content')
    <div class="container my-admin-main mt-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h1>Crea Nuovo Progetto</h1>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.projects.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nome Progetto:</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Descrizione:</label>
                        <textarea name="description" class="form-control" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="img">Immagine:</label>
                        <input type="text" name="img" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="thumbnail_img">Miniatura:</label>
                        <input type="text" name="thumbnail_img" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="website_url">Sito Web:</label>
                        <input type="url" name="website_url" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success mt-3">Crea Progetto</button>
                </form>
            </div>
        </div>
    </div>
@endsection
