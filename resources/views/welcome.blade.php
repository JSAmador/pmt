@extends('layouts.app')

@section('content')
            <div class="container">
                <div class="row justify-content-md-center">
                    <h2>Crear una peticion de compra</h2>
                </div>
                   <div class="row justify-content-md-center">



                       {!! Form::open(['method'=>'POST', 'action'=>'TestController@checkout']) !!}

                       <input type="hidden" id="_token" name="_token" value="{{csrf_token()}}">

                           <div class="form-group">
                               {!! Form::label('invoice', 'Invoice ID') !!}
                               {!! Form::text('invoice', null, ['class'=>'form-control']) !!}
                           </div>
                           <div class="form-group">
                               {!! Form::label('price', 'Total Cost') !!}
                               {!! Form::number('price', null, ['class'=>'form-control']) !!}
                           </div>

                           <div class="form-group">
                               {!! Form::submit('Checkout', ['class'=>'btn btn-primary']) !!}
                           </div>
                       {!! Form::close() !!}


                   </div>

            </div>
@endsection