@extends('layout')

@section('content')

<div class="container d-flex flex-column align-items-stretch justify-content-center" style="min-height:80vh">
    <h2 class="my-2" >Projekt módosítása</h2>

    @if ($errors->any())
            
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">
                {{ $error }}
            </div>
        @endforeach

    @endif

<form action="{{ route('projects.update', $project->id) }}" method="post">
    <div class="form-group">
    @csrf
    @method('PUT')
    <fieldset>
        <label for="name">Projekt neve</label>
        <input class="form-control" type="text" name="name" id="name" value="{{ old('name', $project->name) }}">
    </fieldset>

    <fieldset>
        <label style="text-align:top;" for="description">Leírás</label>
        <textarea class="form-control" type="text" name="description" id="description" >{{ old('description', $project->description) }}</textarea>
    </fieldset>

    <fieldset>
        <label for="status">Státusz</label>
        <select class="form-control fomr-control-sm" name="status" id="status">
            
            @switch($project->status)
                @case(1)
                    <option value="{{ $project->status }}" selected>Fejlesztésre vár</option>
                    <option value="2">Folyamatban</option>
                    <option value="3">Kész</option>
                    @break
                @case(2)
                    <option value="1">Fejlesztésre vár</option>
                    <option value="{{ $project->status }}" selected>Folyamatban</option>
                    <option value="3">Kész</option>
                    @break
                @case(3)
                    <option value="1">Fejlesztésre vár</option>
                    <option value="2">Folyamatban</option>
                    <option value="{{ $project->status }}" selected>Kész</option>
                    @break
            
                @default
                    
            @endswitch

        </select>
    </fieldset>

    <button class="btn btn-success my-3" type="submit">Mentés</button>
</form>
</div>
@endsection
    