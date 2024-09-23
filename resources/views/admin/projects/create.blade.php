@extends('layouts.app')

@section('content')
    <form action="{{ route('admin.projects.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Nome Progetto:</label>
            <input type="text" name="name" required>
        </div>
        <div>
            <label for="description">Descrizione:</label>
            <textarea name="description" required></textarea>
        </div>
        <div>
            <label for="img">Immagine:</label>
            <input type="text" name="img">
        </div>
        <div>
            <label for="thumbnail_img">Miniatura:</label>
            <input type="text" name="thumbnail_img">
        </div>
        <div>
            <label for="website_url">Sito Web:</label>
            <input type="url" name="website_url">
        </div>
        <button type="submit">Crea Progetto</button>
    </form>
@endsection
