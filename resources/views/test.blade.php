@extends('layouts.app')


@section('content')

    <div class="container">

        <div class="col-sm-6">


        {!! Form::open(['method'=>'POST', 'url'=>'https://pmt.pagantis.com/v1/installments']) !!}

            <!--Parámetros de Configuración -->
            <input name="account_id" type="hidden" value="tk_fad3ed93fc2b5b00ba3cfd3d" />
            <input name="order_id" type="hidden" value="{{$invoice_id}}" />
            <input name="amount" type="hidden" value="{{$price}}" />
            <input name="currency" type="hidden" value="EUR" />
            <input name="description" type="hidden" value="DESC" />
            <input name="ok_url" type="hidden" value="/paymentSuccess" />
            <input name="nok_url" type="hidden" value="/paymentFail" />
            <input name="locale" type="hidden" value="ESP" />
            <input name="signature" type="hidden" value="{{$signature}}" />


            <div class="form-group">
                {!! Form::label('full_name', 'Name') !!}
                {!! Form::text('full_name', null, ['class'=>'form-control']) !!}
            </div>


            <div class="form-group">
                {!! Form::label('email', 'Email') !!}
                {!! Form::email('email', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('dni', 'DNI') !!}
                {!! Form::text('dni', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('mobile_phone', 'Telefono') !!}
                {!! Form::text('mobile_phone', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('address[street]', 'Direccion') !!}
                {!! Form::text('address[street]', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('address[city]', 'Ciudad') !!}
                {!! Form::text('address[city]', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('address[zipcode]', 'CP') !!}
                {!! Form::text('address[zipcode]', null, ['class'=>'form-control']) !!}
            </div>


            <!--metadata, opcional -->
            <input name="metadata[key_1]" type="hidden" value="value_1">
            <input name="metadata[key_2]" type="hidden" value="value_2">
            ....
            <input name="metadata[key_n]" type="hidden" value="value_n">


            <div class="form-group">
                {!! Form::submit('Realizar Pago', ['class'=>'btn btn-primary']) !!}
            </div>


        {!! Form::close() !!}


        </div>

    </div>



@endsection

@section('footerScripts')

<script>
    pmtClient.setPublicKey('tk_fad3ed93fc2b5b00ba3cfd3d');
    pmtClient.simulator.init();
</script>

@endsection
