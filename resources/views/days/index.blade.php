@extends('layouts.app')

@section('content-header')
@endsection
@section('content')
    <div class="row" id="currencies_vue">
        <div class="col-md-3">

        </div>
        <div class="col-md-6">
            <!-- Box -->

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Jours de la semaine</h3>



                </div>
                <div class="box-body">


                    <table class="table table-striped table-hover">
                        <tr>
                            <th>Position</th>
                            <th>Code</th>
                            <th> Nom</th>
                            <th> Ouvrable?</th>
                        </tr>

                        @foreach($days as $day)

                            <tr>
                                <td>{{$day->numberInWeek}}</td>
                                <td>{{$day->code}}</td>
                                <td> {{$day->name}}</td>
                                <td>
                                    @if($day->isBusinessDay)
                                    <i class="fa fa-check" style="color:green;"></i>
                                        @else
                                        <i class="fa fa-remove" style="color:red;"></i>
                                    @endif
                                </td>
                            </tr>
                        @endforeach


                    </table>

                </div><!-- /.box-body -->

            </div><!-- /.box -->


        </div><!-- /.col -->
        <div class="col-md-3">

        </div>


        @include('currencies.modal_create')
    </div>


@endsection


@section('script')
    <script src="{{asset("/js/currencies/index.js") }}" type="text/javascript"></script>
@endsection