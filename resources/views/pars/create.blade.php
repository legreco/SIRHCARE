@extends('layouts.app')
@section('css')
    <link href="{{ asset("/bower_components/AdminLTE/plugins/datatables/dataTables.bootstrap.css") }}" rel="stylesheet" type="text/css" />
@endsection
@section('content-header')
    <h1>Personal Activity Report</h1>
@endsection
@section('content')

    <div class="row">
        <div class="col-md-12">
            <table id="example3" class="table table-bordered table-striped">
                <thead>

                <tr bgcolor="#87cefa">
                    <th>Employee Name</th>
                    <th>Employee No.</th>
                    <th>Job Title</th>
                    <th>Business Unit Name</th>
                    <th>Period</th>
                </tr>
                </thead>
                <tbody>

                <tr>
                    <td>{{Auth::user()->employee->fullName}}</td>
                    <td>{{Auth::user()->employee->employeeId}}</td>
                    <td>IT Web Developer Intern</td>
                    <td>CARE</td>
                    <td><input type="month"/> </td>
                </tr>

                </tbody>

            </table>
        </div>
    </div>
    <div class="row" id="create_par_vue">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <div class="box-tools">
                        <button class="btn btn-primary btn-flat pull-right" data-toggle="modal" data-target="#myModal">Add Line</button>
                    </div>
                </div>
                <div class="box-body">
                    <table  class="table table-bordered table-striped">
                        <thead style="font-size:12px">
                        <tr bgcolor="#87cefa">
                            <th colspan="7">Time Allocation</th>
                            <th colspan="6"> Number of Hours Worked</th>
                            <th colspan="1">Percentage</th>
                        </tr>
                        <tr bgcolor="silver">
                            <th>Dept ID</th>
                            <th>Fund Code</th>
                            <th>Business Unit</th>
                            <th>Project ID</th>
                            <th>Activity</th>
                            <th>Source Type</th>
                            <th>Category</th>
                            <th>Week 1</th>
                            <th>Week 2</th>
                            <th>Week 3</th>
                            <th>Week 4</th>
                            <th>Week 5</th>
                            <th>Total</th>
                            <th>Distribution</th>
                        </tr>

                        </thead>
                        <tbody>
                        <div v-if="par_lines.length==0">
                            <tr style="background-color: #f0ad4e">
                                <th colspan="14" style="text-align: center;"><i class="fa fa-warning"></i> Vide! </th>
                            </tr>
                        </div>

                        <div v-else>
                            <tr v-for="par_line in par_lines">
                                <th>Dept ID</th>
                                <th>Fund Code</th>
                                <th>Business Unit</th>
                                <th>Project ID</th>
                                <th>Activity</th>
                                <th>Source Type</th>
                                <th>Category</th>
                                <th>Week 1</th>
                                <th>Week 2</th>
                                <th>Week 3</th>
                                <th>Week 4</th>
                                <th>Week 5</th>
                                <th>Total</th>
                                <th>Distribution</th>
                            </tr>
                        </div>





                        </tbody>
                        <tfoot>
                        <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th>Total</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                        </tfoot>

                    </table>

                </div>
                <div class="box-footer">
                    <div class="box-tools">
                        <button class="btn btn-primary btn-flat pull-left" data-toggle="modal" data-target="#myModal">Sauvergarder</button>
                        <button class="btn btn-primary btn-flat pull-right" data-toggle="modal" data-target="#myModal">Soumettre</button>
                    </div>
                </div>
            </div>
            @include('pars.add_par_line_modal')
        </div>
    </div>

@endsection
@section('script')
    <script src="{{asset("/js/pars/create.js") }}" type="text/javascript"></script>
    <script src="{{ asset ("/bower_components/AdminLTE/plugins/datatables/jquery.dataTables.min.js") }}" type="text/javascript"></script>
    <script src="{{ asset ("/bower_components/AdminLTE/plugins/datatables/dataTables.bootstrap.min.js") }}" type="text/javascript"></script>

@endsection