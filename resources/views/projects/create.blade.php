@extends('layout')

@section('content')

<div class="container d-flex flex-column align-items-stretch justify-content-center" style="min-height:80vh">
        <h2 class="my-2" >Projekt létrehozása</h2>


        @if ($errors->any())
            
                    @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">
                        {{ $error }}
                    </div>
                    @endforeach
            
        @endif

        

    <form action="{{ route('projects.store') }}" method="post">
        <div class="form-group">
        @csrf
        <fieldset>
            <label for="name" >Projekt neve</label>
            <input class="form-control" type="text" name="name" id="name">
        </fieldset>

        <fieldset>
            <label style="text-align:top;" for="description">Leírás</label>
            <textarea class="form-control" type="text" name="description" id="description"></textarea>
        </fieldset>

        <fieldset>
            <label for="status">Státusz</label>
            <select class="form-control form-control-sm" name="status" id="status">
                <option value="1">Fejlesztésre vár</option>
                <option value="2">Folyamatban</option>
                <option value="3">Kész</option>
            </select>
        </fieldset>



        <button class="btn btn-success my-3 " type="submit">Mentés</button>
        </div>
    </form>
</div>
@endsection