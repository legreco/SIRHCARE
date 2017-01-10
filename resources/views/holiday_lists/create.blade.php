@extends('layouts.app')
@section('content-header')

    <h1> Gestion des jours chomés <small>Nouvelle liste</small> </h1>
@endsection

@section('content')
    <div id="holiday_list_create_vue">
<div class="row">
    <div class='col-md-2'>
    </div>
    <div class='col-md-8'>
        <!-- Box -->
        @include('includes.info.session_flash_status')

        <div class="box box-primary">
            <form class="form" method="post" action="/holiday_lists">
                <div class="box-body">


                    <div class="box-body">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label>Spécifier l'année</label>
                            <v-select url="/api/select/calendar_years" v-on:new_select="holiday_list.year=arguments[0].text"></v-select>
                        </div>

                    </div>



                </div><!-- /.box-body -->

            </form>
        </div><!-- /.box -->
        <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Liste des jours chomés</h3>
                </div>
                <div class="box-body">

                <table class="table table-hover">
                    <tr>
                        <th>
                            No
                        </th>
                        <th>
                            Date
                        </th>
                        <th>
                            Jour
                        </th>
                        <th>
                            Evènement
                        </th>
                        <th>
                            Déduit de AL
                        </th>
                        <th>
                            <button class="btn  btn-sm btn-flat btn-success" v-on:click="showAddHolidayModal"><i class="fa fa-plus"></i> </button>
                        </th>
                    </tr>

                    <tr v-for="(holiday, index) in holiday_list.holidays" >
                        <td >
                            <div v-cloak>
                                @{{index+1}}
                            </div>
                        </td>
                        <td >
                            <div v-cloak>
                                @{{ holiday.date |dayMonthDisplay}}
                            </div>
                        </td>
                        <td>
                            <div v-cloak>
                                @{{ holiday.date | dayOfWeekName}}
                            </div>
                        </td>
                        <td>
                            <div v-cloak>
                                @{{ holiday.name }}
                            </div>
                        </td>
                        <td>
                            <span v-if="holiday.isALDeductible"><i class="fa fa-check" style="color: #00a65a"></i> </span>
                            <span v-else><i class="fa fa-remove" style="color: red"></i> </span>
                        </td>
                        <td>
                            <button class="btn btn-xs btn-warning">
                                <span class="glyphicon glyphicon-edit"></span>
                            </button>
                            <button class="btn btn-xs btn-danger">
                                <span class="glyphicon glyphicon-remove" v-on:click="removeHoliday(index)"></span>
                            </button>
                        </td>
                </table>




                </div><!-- /.box-body -->
                <div class="box-footer">
                    <div class="row">
                        <div class="col-md-4">
                            <button   class="btn btn-block btn-danger">Annuler</button>
                        </div>
                        <div class="col-md-4">

                        </div>
                        <div class="col-md-4">
                            <button  class="btn btn-block btn-success" v-on:click="submit">Appliquer</button>
                        </div>
                    </div>

                </div>
            </form>
        </div><!-- /.box -->
    </div><!-- /.col -->
    <div class='col-md-2'>
    </div>
</div>
        @include('holiday_lists.add_holiday_modal')
    </div>
@endsection

@section('script')
    <script src="{{asset("/js/holiday_lists/create.js") }}" type="text/javascript"></script>

@endsection