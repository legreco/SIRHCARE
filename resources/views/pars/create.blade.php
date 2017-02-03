@extends('layouts.app')
@section('css')
    <link href="{{ asset("/bower_components/AdminLTE/plugins/datatables/dataTables.bootstrap.css") }}" rel="stylesheet" type="text/css" />
    <style>
        .par_input
        {
            text-align:center;
            vertical-align:middle;
            background:inherit;
            border:none;
            width: 50px;
        }
        </style>
@endsection
@section('content-header')
    <h1>Personal Activity Report</h1>
@endsection
@section('content')
<div id="create_par_vue">
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered table-striped">
                <thead>

                <tr bgcolor="black">
                    <th> <span style="color: white;"> Employee Name</span></th>
                    <th><span style="color: white"> Employee No.</span></th>
                    <th><span style="color: white"> Job Title</span></th>
                    <th><span style="color: white">Business Unit Name</span></th>
                    <th><span style="color: white">Period</span></th>
                </tr>
                </thead>
                <tbody>

                <tr>
                    <td style="">{{Auth::user()->employee->fullName}}</td>
                    <td>{{Auth::user()->employee->employeeId}}</td>
                    <td>IT Web Developer Intern</td>
                    <td>CARE</td>
                    <td>
                     <input type="month" v-model="par.period"/>
                    </td>
                </tr>

                </tbody>

            </table>
        </div>
    </div>

    <div class="row" >
        <div class="col-md-12">
            <div class="box">
                <div class="box-body">
                    <table  class="table table-bordered table-striped">
                        <thead style="font-size:12px">
                        <tr bgcolor="#87cefa">
                            <th colspan="7">Time Allocation</th>
                            <th colspan="6"> Number of Hours Worked</th>
                            <th colspan="1">Percentage</th>
                            <th></th>
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
                            <th>
                                <button class="btn btn-sm" style="background:transparent; border:none;" v-on:click="showAddParLineModal"><i class="fa fa-plus fa-lg"></i></button>
                                <button class="btn btn-sm" style="background:transparent; border:none;"><i class="fa fa-trash fa-lg"></i></button> </th>
                        </tr>

                        </thead>
                        <tbody>

                            <tr style="background-color: #f0ad4e" v-if="par_lines.length==0">
                                <th colspan="15" style="text-align: center;"><i class="fa fa-warning"></i> Vide! </th>
                            </tr>



                            <tr v-else v-for="(par_line,index) in par_lines">
                                <td>@{{par_line.deptId.name }}</td>
                                <td>@{{ par_line.fundCode.name }}</td>
                                <td>@{{ par_line.businessUnit.name }}</td>
                                <td>@{{ par_line.projectId.name }}</td>
                                <td>@{{ par_line.activity.name }}</td>
                                <td>@{{ par_line.sourceType.name }}</td>
                                <td>Category</td>
                                <td><input type="text" class="par_input" v-model.number="par_line.week1"/></td>
                                <td><input type="text" class="par_input" v-model.number="par_line.week2"/></td>
                                <td><input type="text" class="par_input" v-model.number="par_line.week3"/></td>
                                <td><input type="text" class="par_input" v-model.number="par_line.week4"/></td>
                                <td><input type="text" class="par_input" v-model.number="par_line.week5"/></td>
                                <td>@{{ totalWeek(par_line) }}</td>
                                <td></td>
                                <td>

                                        <button class="btn btn-xs" style="background:transparent; border:none;" v-on:click="showEditParLineModal(index)"><i class="fa fa-pencil fa-lg"></i></button>
                                        <button class="btn btn-xs" style="background:transparent; border:none;" v-on:click="removeParLine(index)"><i class="fa fa-trash fa-lg"></i></button>

                                </td>
                            </tr>






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
                        <button class="btn btn-primary btn-flat pull-left" v-on:click.prevent="save">Sauvergarder</button>
                        <button class="btn btn-primary btn-flat pull-right" data-toggle="modal" data-target="#myModal">Soumettre</button>
                    </div>
                </div>
            </div>
            @include('pars.add_par_line_modal')
            @include('pars.edit_par_line_modal')
            @include('utilities.modal_loading')
        </div>
    </div>
</div>
@endsection
@section('script')
    <script src="{{asset("/js/pars/create.js") }}" type="text/javascript"></script>
    <script src="{{ asset ("/bower_components/AdminLTE/plugins/datatables/jquery.dataTables.min.js") }}" type="text/javascript"></script>
    <script src="{{ asset ("/bower_components/AdminLTE/plugins/datatables/dataTables.bootstrap.min.js") }}" type="text/javascript"></script>

@endsection