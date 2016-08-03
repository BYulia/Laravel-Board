@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Services: </div>

                <div class="panel-body">
                    @foreach($services as $service)
                    {{$service->title}}

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
