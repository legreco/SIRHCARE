@extends('layouts.app')

@section('content-header')
    <h1><i class="fa fa-line-chart"></i> <i class="fa fa-money"></i> Taux de change<small></small></h1>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-3">

        </div>
        <div class="col-md-6">
            <!-- Box -->
            {{$rates->links()}}
            <div class="box box-info">
                <div class="box-header">

                </div>
                <div class="box-body">
                    <table class="table table-hover table-striped">
                        <tr>
                            <th>Devise</th>
                            <th></th>
                            <th>Devise</th>
                            <th>Taux</th>

                            <th>Date</th>
                            <th></th>

                        </tr>
                        @foreach($rates as $rate)
                            <tr>
                                <td >
                                    {{$rate->input_currency_id}}
                                </td>
                                <td>
                                    <span> <i class="fa fa-long-arrow-right"></i> </span>
                                </td>
                                <td>
                                    {{$rate->output_currency_id}}
                                </td>
                                <td>
                                    {{$rate->rate}}
                                </td>
                                <td>
                                    {{$rate->date}}
                                </td>
                                <td>
                                    <div class="btn btn-group-xs">

                                    </div>

                                </td>
                            </tr>
                        @endforeach

                    </table>

                </div><!-- /.box-body -->
                <div class="box-footer">

                </div>
            </div>

          <!-- /.box -->


        </div><!-- /.col -->
        <div class="col-md-3">

        </div>



    </div>


@endsection

