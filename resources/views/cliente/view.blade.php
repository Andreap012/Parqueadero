@extends('layouts.app', ['activePage' => 'Cliente', 'titlePage' => __('cliente')])

@section('content')

<br><br>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">

                <div class="card card-plain">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title mt-0"> Cliente</h4>
                        <p class="card-category"> Información del cliente selccionado</p>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">

                                <thead class="">
                                    <th>
                                        Nombre
                                    </th>
                                    <th>
                                        Apellido
                                    </th>
                                    <th>
                                        Telefono
                                    </th>
                                    <th>
                                        cedula
                                    </th>

                                 </thead>

                                 <tbody>
                                    <tr>                                      
                                        <td>{{$cliente->nombre}}</td>
                                        <td>{{$cliente->apellido}}</td>
                                        <td>{{$cliente->telefono}}</td>                                        
                                        <td>{{$cliente->cedula}}</td>                                        
                                    </tr>
                                </tbody>

                            </table>
                            <a href="{{route('cliente.index')}}"><button class="btn btn-info">Atras</button>
                        </div>
                    </div>
                </div>
            </div>    
        </div> 
    </div>
</div>
@endsection