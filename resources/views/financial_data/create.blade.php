@extends('layouts.app')

@section('content-header')
    <h1>Information financière emplo<small></small></h1>
@endsection

@section('content')
    <div id="financial_data_create_vue">
    <div class="row">
        <div class=" col-md-2"></div>
        <div class=" col-md-8">
            <div class="box">
                <div class="box-body">
                    <table class="table table-hover table-striped">
                        <thead>
                        <tr>
                            <th>
                                DeptID
                            </th>
                            <th>
                                Fund Code
                            </th>

                            <th>
                                Business Unit
                            </th>
                            <th>
                                Project ID
                            </th>
                            <th>
                                Activity
                            </th>
                            <th>
                                Source Type
                            </th>
                            <th>
                                Category
                            </th>
                            <th>
                                Distribution
                            </th>
                            <th>
                                <button class="btn btn-flat btn-xs btn-success" v-on:click="showAddNewLineModal"><i class="fa fa-plus"></i> </button>
                            </th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr v-if="fin_data.lines.length==0"> sfsfs</tr>

                        <tr v-else v-for="(line, index) in fin_data.lines">
                            <td>
                              @{{ line.deptId.text }}
                            </td>
                            <td>
                             @{{ line.fundCode.text }}
                            </td>
                            <td>
                              @{{ line.businessUnit.text }}
                            </td>
                            <td>
                                @{{ line.projectId.text }}
                            </td>
                            <td>
                                @{{ line.activity.text }}
                            </td>
                            <td>
                                @{{ line.sourceType.text }}
                            </td>
                            <td>
                                @{{ line.category.text }}
                            </td>
                            <td>
                                @{{ line.distribution }} %
                            </td>
                            <td>
                                <div class="btn-group-sm">
                                    <button class="btn btn-flat btn-sm btn-warning" v-on:click="showEditLineModal"><i class="fa fa-pencil"></i> </button>
                                    <button class="btn btn-flat btn-sm btn-danger" v-on:click="removeLine(index)"><i class="fa fa-trash"></i> </button>
                                </div>
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
                            </tr>
                        </tfoot>

                    </table>
                </div>
            </div>
        </div>
        <div class=" col-md-2"></div>



    </div>
@include('financial_data.modal_add_financial_line')
        @include('financial_data.modal_edit_financial_line')
    </div>

@endsection
@section('script')

    <script src="{{asset("/js/financial_data/create.js") }}" type="text/javascript"></script>
@endsection