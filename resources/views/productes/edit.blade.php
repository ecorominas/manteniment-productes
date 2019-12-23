@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Editar producte {{ $producte->nom }}</div>

                <div class="card-body">
                    <a href="{{ route('productes.index')}}" class="btn btn-warning"> Enrere</a>
                    <br>

                    <form action="{{ route('productes.update', ['id' => $producte->id]) }}" method="POST">
                        @csrf   
                        @method('PATCH')                     
                        @include('productes.form', ['submit' => 'Actualitzar'])
                    </form>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
