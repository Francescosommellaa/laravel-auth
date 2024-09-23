@extends('layouts.app')

@section('content')
    <h1>Lista Progetti</h1>

    <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">Aggiungi Nuovo Progetto</a>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Descrizione</th>
                <th>Slug</th>
                <th>Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->name }}</td>
                    <td>{{ $project->description }}</td>
                    <td>{{ $project->slug }}</td>
                    <td>
                        <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-warning">Modifica</a>

                        <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST"
                            style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Sei sicuro di voler eliminare questo progetto?')">Elimina</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
