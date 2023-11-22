@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h6>Encyclopedia/</h6>
        </div>
        <div class="row">

            {{-- GPU || CPU || RAM || Storage --}}
            <div class="col">
                <div class="row">GPU</div>
                <div class="row">CPU</div>
                <div class="row">RAM</div>
                <div class="row">Storage</div>
            </div>

            {{-- Motherboard --}}
            <div class="col"></div>

            {{-- PC Casing --}}
            <div class="col"></div>

            {{-- Power supply || Casing || Monitor || Cooling --}}
            <div class="col">
                <div class="row">Power supply</div>
                <div class="row">Casing</div>
                <div class="row">Monitor</div>
                <div class="row">Cooling</div>
            </div>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <img src="{{ asset('assets/img/cool.png') }}" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
@endsection
