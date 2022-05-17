@extends('layout.template')

@section('title','Listando editorial')
@section('content')
<div class="container">
    <div class="row">
        <h3>Lista de editoriales</h3>
    </div>
    <div class="row">
        <div class="col-md-12">
            <a type="button" class="btn btn-primary btn-md" href="{{route('editoriales.create')}}"> Nuevo editorial</a>
            <br><br>
            <table id="editoriales" class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Codigo del editorial</th>
                        <th>Nombre del editorial</th>
                        <th>Contacto</th>
                        <th>Telefono</th>
                        <th>Operaciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($editoriales as $editorial)
                    <tr>
                        <td>{{$editorial->codigo_editorial}}</td>
                        <td>{{$editorial->nombre_editorial}}</td>
                        <td>{{$editorial->contacto}}</td>
                        <td>{{$editorial->telefono}}</td>
                        <td>                         
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div> 
    </div>                    
</div>

<script>
    $(document).ready(function() {
        $('#editoriales').DataTable();
    });
</script>
@endsection
