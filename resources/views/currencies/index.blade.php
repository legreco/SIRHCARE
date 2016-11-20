@extends('layouts.app')

@section('content')
    <div class="row" id="currencies_vue">
        <div class="col-md-3">

        </div>
    <div class="col-md-6">
        <!-- Box -->

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Devises</h3>


<div class="box-tools">
    <button type="button" class="btn btn-success" v-on:click="showCreateModal">
        <i class="fa fa-plus"></i>
        Create Item
    </button>
</div>
            </div>
            <div class="box-body">


                <table class="table table-condensed">
                    <tr>
                        <th>Nom</th>
                        <th> Code</th>
                        <th> Symbole</th>
                        <th></th>

                    </tr>

                        <tr v-for="currency in currencies" >
                            <td >
                                <div v-cloak>
                                @{{currency.name}}
                                </div>
                            </td>
                            <td>
                                <div v-cloak>
                                @{{currency.code}}
                                </div>
                            </td>
                            <td>
                                <div v-cloak>
                                @{{currency.symbol}}
                                </div>
                            </td>
                            <td>
                                <button class="btn btn-warning" @click.prevent="editCurrency(currency)">
                                    <span class="glyphicon glyphicon-edit"></span>
                                </button>
                                <button class="btn btn-info" @click.prevent="editCurrency(currency)">
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>
                                <button class="btn btn-danger" @click.prevent="editCurrency(currency)">
                                    <span class="fa fa-ban"></span>
                                </button>
                            </td>
                        </tr>

                </table>

            </div><!-- /.box-body -->
<div class="box-footer">

</div>
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