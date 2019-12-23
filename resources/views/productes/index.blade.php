@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Productes</div>

                <div class="card-body">
                    <a href="{{ route('productes.create') }}" class="btn btn-success" title="Crear producte"> <i class="fas fa-plus"></i> Crear</a>
                    <br>
                    <br>
                    @if (session('producte'))
                        <div class="alert alert-success" role="alert">
                            {{ session('producte') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    
                    
                   <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Referència</th>
                                    <th>Preu</th>
                                    <th>Actiu</th>
                                    <th>Accions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($productes as $producte)                        
                                <tr>
                                    <td>{{ $producte->nom }}</td>
                                    <td>{{ $producte->referencia }}</td>
                                    <td>{{ $producte->preu . ' €'}}</td>
                                    <td>{{ $producte->getActiu() }}</td>
                                    <td>
                                        <a href="{{ route('productes.edit', ['id' => $producte->id])  }}" class="btn btn-primary" title="Actualitzar producte"> <i class="fas fa-pencil-alt"></i></a>
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#eliminar{{$producte->id}}" title="Eliminar producte">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                        @include('productes.eliminar')
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $productes->appends($_GET)->links() }}
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection