@extends('layouts.app')
@section('content')
    <section class="container">
        <div class="d-flex justify-content-between ">
            <h1>Projects</h1>
            <a href="{{ route('admin.projects.create') }}" class="btn btn-success ">Aggiungi nuovo progetto</a>
        </div>
        <table class="table">
            <tbody>

                @foreach ($projects as $key => $project)
                    <tr>
                        <td>{{ $project->title }}</td>
                        <td class="d-flex justify-content-end align-items-center">
                            <a href="{{ route('admin.projects.show', $project->id) }}" class="btn btn-success mx-2">Mostra</a>

                            <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-primary cancel-button"
                                    data-item-title="{{ $project->title }}"><i class="fa-solid fa-trash-can"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </section>
    @include('partials.modal_delete');
@endsection
