@extends('layouts.app')
@section('content-header')
    <h1> Acceuil</h1>

@endsection

@section('content')
<div class="container">
    <div class="row" id="home">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>

                <v-select-countries></v-select-countries>
            </div>
        </div>
    </div>
</div>

@endsection
@section('script')
    <script src="https://npmcdn.com/vue-select@latest"></script>
    <script src="{{asset("/js/home/home.js") }}" type="text/javascript"></script>
@endsection