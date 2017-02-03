@extends('layouts.app')

@section('content-header')
    <h1>Drafts</h1>
@endsection
@section('content')
    <div class="row" >
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="box">
                <div class="box-body">
                    <table  class="table table-bordered table-striped table-hover" id="employee_pars_table">
                        <thead>
                        <tr>
                            <th>Poste</th>
                            <th>CategoryID</th>
                            <th>Période</th>
                            <th>Created At</th>
                            <th>Actions</th>
                        </tr>

                        </thead>

                        <tbody>
                        @foreach($draftedPars as $par)
                        <tr>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>
                                {{$par->period->format('F Y')}}
                            </td>
                            <td>
                                {{$par->created_at->diffForHumans()}}
                            </td>
                            <td>
                                <div class="btn-group-xs ">
                                    <a class="btn btn-flat btn-primary">
                                        <i class="fa fa-search">

                                        </i>
                                    </a>
                                    <a class="btn btn-flat btn-danger">
                                        <i class="fa fa-trash">

                                        </i>
                                    </a>
                                </div>
                            </td>


                        </tr>
                            @endforeach
                        </tbody>



                    </table>

                </div>
                <div class="box-footer">
                    {{$draftedPars->links()}}
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>

@endsection
