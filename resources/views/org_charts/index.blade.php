@extends('layouts.app')
@section('css')
    <link href="{{ asset("/bower_components/getorgchart/getorgchart.css") }}" rel="stylesheet" type="text/css" />
@endsection
@section('content-header')
    <h1>Structure organisationnelle</h1>
@endsection
@section('content')
    <div class="row" id="org_chart_vue">
        <div class="col-md-12">
            <div id="people">

            </div>
        </div>


    </div>
@endsection

@section('script')
    <script src="{{ asset("/bower_components/getorgchart/getorgchart.js") }}" type="text/javascript"></script>
    <script src="{{ asset("/js/org_charts/index.js") }}" type="text/javascript"></script>



@endsection