@extends('layout')

@section('content')



    @foreach($users as $user)
        @cache($user)
            <div class="col-md-4 col-md-offset-1 well">
                <p><span class="label label-primary">Név:</span> {{$user->name}}</p>
                <p><span class="label label-primary">Email:</span> {{$user->email}}</p>

                @foreach($user->address as $address)
                    @cache($address)
                        <p><span class="label label-danger">Város:</span> {{$address->city}}</p>
                    @endcache
                @endforeach
            </div>
        @endcache
    @endforeach




@stop