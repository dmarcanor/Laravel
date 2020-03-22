@extends("layouts.plantilla")

@section("main")
    <h2>Lista de players</h2>
    <p>{{$message}}</p>
    <table class="center-text table">
        <thead class="thead">
            <tr>
                <td>Nickname</td>
                <td>Level</td>
                <td>Class</td>
                <td>Guild</td>
            </tr>
        </thead>
        <tbody>
            @if(count($num))    <!--count($players)--> <!-- Un supuesto arreglo que tengo que recibir desde el controlador -->
                <tr>
                    <td>Ejem</td>
                    <td>Ejem</td>
                    <td>Ejem</td>
                    <td>Ejem</td>
                </tr>
                @else
                    {{"No hay jugadores registrados por el momento :( "}}

            @endif
        </tbody>
    </table>
@endsection

@section("footer")
    <h2>Enterprise</h2>
@endsection