@extends('layouts.app')
@section('content-header')
    <h1>Liste des employés</h1>
@endsection
@section('content')
    <div class="row" id="employees">
        <div class='col-md-12'>
            <!-- Box -->
            @include('includes.info.session_flash_status')

            <div class="box box-primary">
                <div class="box-header with-border">
        Liste des employés actifs
                </div>

                <div class="box-body">


                    <div v-if="loading" class="fa fa-spin fa-refresh text-center"></div>
                    <div v-if="!loading">
                    <table class="table table-hover ">
                        <tr>
                            <th>NOM</th>
                            <th>PRENOM</th>
                            <th v-if="sexe">SEXE</th>
                            <th>AGE</th>
                            <th>POSTE</th>
                            <th>SALAIRE</th>
                            <th>DEPARTEMENT</th>
                            <th>ACTIONS</th>
                        </tr>
                        <tr v-for="employee in employees">
                            <td>
                                @{{ employee.firstName }}
                            </td>
                            <td>
                                @{{ employee.lastName }}
                            </td>
                            <td>
                                @{{ employee.age }}
                            </td>
                            <td v-if="sexe">
                                @{{ employee.sex }}
                            </td>
                            <td>
                                @{{ employee.job }}
                            </td>
                            <td>
                                @{{ employee.salary }}
                            </td>
                            <td>
                                @{{ employee.departement }}
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
                        </div>
                    </div>


                <div class="box-footer">
                    <nav>
                        <ul class="pagination">
                            <li v-if="pagination.current_page > 1">
                                <a href="#" aria-label="Previous" @click.prevent="changePage(pagination.current_page - 1)">
                                    <span aria-hidden="true">«</span>
                                </a>
                            </li>
                            <li v-for="page in pagesNumber" v-bind:class="[ page == isActived ? 'active' : '']">
                                <a href="#" @click.prevent="changePage(page)">@{{ page }}</a>
                            </li>
                            <li v-if="pagination.current_page < pagination.last_page">
                                <a href="#" aria-label="Next" @click.prevent="changePage(pagination.current_page + 1)">
                                    <span aria-hidden="true">»</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div><!-- /.box -->

        </div><!-- /.col -->

    </div>
@endsection

@section('script')
    <script src="{{asset("/js/employees/employees.js") }}" type="text/javascript"></script>
@endsection