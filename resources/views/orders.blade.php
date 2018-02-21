@extends('layouts.app')


@section('content')

<div class="container">


    <table class="table table-striped">

        <thead>

            <th>ID Operacion</th>
            <th>Referencia</th>
            <th>Fecha</th>
            <th>Estado</th>
            <th>Importe</th>
            <th>Acciones</th>

        </thead>

        <tbody>

        @foreach($orders as $order)
            <td>{{$order['id']}}</td>
            <td>{{$order['order_id']}}</td>
            <td>{{$order['created_at']}}</td>
            <td>{{$order['status']}}</td>
            <td>{{$order['amount']}}</td>
            <td><a href="/orders/{{$order['id']}}">Detalles</a></td>
        @endforeach


        </tbody>

    </table>

</div>




@endsection