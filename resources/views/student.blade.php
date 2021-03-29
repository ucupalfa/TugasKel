@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach($list as $mhs)
                <ul>
                    <li>{{$mhs->nama}}</li>
                </ul>
            @endforeach
        </div>
    </div>
</div>
@endsection
