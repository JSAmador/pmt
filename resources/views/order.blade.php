@extends('layouts.app')


@section('content')

    <div class="container orders">

        <h1>Datos de la compra</h1>

        <div>
            <ul class="list-group left">

                <li class="list-group-item"><strong>ID</strong> {{$order['id']}}</li>
                <li class="list-group-item"><strong>Referencia</strong> {{$order['order_id']}}</li>
                <li class="list-group-item"><strong>Valor</strong> {{$order['amount']}} €</li>
                <li class="list-group-item"><strong>Tipo de venta</strong> Cuotas</li>
                <li class="list-group-item"><strong>Fecha</strong> {{$order['created_at']}}</li>
                <li class="list-group-item"><strong>Estado</strong> {{$order['status']}}</li>
                <li class="list-group-item"><strong>Descripcion</strong> {{$order['description']}}</li>
                <li class="list-group-item"><strong>Codigo de error</strong> {{$order['error_code']}}</li>
                <li class="list-group-item"><strong>Mensaje de error</strong> {{$order['error_message']}}</li>
                <li class="list-group-item"><strong>Numero de Tarjeta</strong> **** **** ****{{$order['card']['last4']}}</li>


            </ul>



            <ul class="list-group right">
                <h3>Datos del comprador</h3>
                <li class="list-group-item"><strong>Telefono</strong>{{$order['metadata']['phone']}}</li>
                <li class="list-group-item"><strong>Direccion</strong>{{$order['metadata']['address']}}</li>
                <li class="list-group-item"><strong>Poblacion</strong>{{$order['metadata']['city']}}</li>
                <li class="list-group-item"><strong>Provincia</strong>{{$order['metadata']['province']}}</li>
                <li class="list-group-item"><strong>Cuotas</strong>{{$order['metadata']['num_installments']}}</li>
                <li class="list-group-item"><strong>Email</strong>{{$order['metadata']['user_email']}}</li>


            </ul>
        </div>


    </div>





@endsection