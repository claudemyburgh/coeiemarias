@extends('layouts.app')

@section('title', 'Home page')

@section('content')
<div class="wrapper trigger">

    <div class="row">
        <div class="md-col-5 trigger--element">
            <h1 class="heading trigger--element " data-text="Services">Services</h1>

        </div>
    </div>
    <div class="row trigger">
        <div class="md-col-12">

            <ul>
                @foreach($services as $service)
                    <li class="trigger--element">{{ $service->name }}</li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
