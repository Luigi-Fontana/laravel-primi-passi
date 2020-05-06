 @extends('layouts.admin')
@section('titolo')
    Prodotti
@endsection
@section('main')
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Tipo</th>
                    <th>Cottura</th>
                    <th>Peso</th>
                </tr>
            </thead>
            <tbody>
                @foreach (config('prodotti') as $prodotto)
                    <tr>
                        <td>{{$prodotto['titolo']}}</td>
                        <td>{{$prodotto['tipo']}}</td>
                        <td>{{$prodotto['cottura']}}</td>
                        <td>{{$prodotto['peso']}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
