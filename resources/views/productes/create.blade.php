@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Crear producte</div>

                <div class="card-body">
                    <a href="{{ route('productes.index')}}" class="btn btn-warning"> Enrere</a>
                    <br>
                    <br>
                    <form action="{{ route('productes.store') }}" method="POST">
                        @csrf                        
                        @include('productes.form', ['submit' => 'Crear'])
                    </form>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
