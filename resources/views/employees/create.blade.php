@extends('layouts.app')
@section('content-header')
    <h1>Gestion du personnel<small>Nouvel employé</small></h1>

@endsection
@section('content')
   @include('includes.css.datepicker3')
   @include('includes.css.select2')
   <div class="row">
       <div class="col-md-12">
        <!-- Horizontal Form -->
        <div class="box box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">Intégration nouvel employé</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form" method="post" action="/employee" id="my-form" enctype="multipart/form-data">
                <div class="box-body">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                    <div class="box-group" id="accordion">
                                        <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                                        <div class="panel box box-primary">
                                            <div class="box-header with-border">
                                                <h4 class="box-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                        Informations personnelles
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne" class="panel-collapse collapse in">
                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                    <img id="blah" src="{{ asset("/images/profil/default/defaultUserImage.png") }}"  alt="User Image"  alt="your image" style="height: 256px; width: 256px;" />
                                                                    <input type='file' id="imgInp" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">


                                                            <div class="form-group">
                                                                <label>Nom</label>
                                                                <input type="text" name="lastName" class="form-control"  placeholder="Nom de famille de l'employé">

                                                            </div>
                                                            <div class="form-group">
                                                                <label>Prénom</label>
                                                                <input type="text" name="firstName" class="form-control"  placeholder="Prénom de l'employé">
                                                            </div>


                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Sexe</label>

                                                                        <select class="form-control" name="gender_id" >
                                                                            <option value="1">Homme</option>
                                                                            <option value="2">Femme</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Date de naissance</label>
                                                                        <input type="text" name="birthDate" class="form-control datepicker"  placeholder="">

                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>CIN ou NIF</label>
                                                                        <input type="text" name="cinOrNif" class="form-control"  placeholder="">

                                                                    </div>
                                                                </div>

                                                            </div>






                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel box box-danger">
                                            <div class="box-header with-border">
                                                <h4 class="box-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                                        Informations sur le contrat
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseTwo" class="panel-collapse collapse">
                                                <div class="box-body">

                                                    <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Type de contrat</label>
                                                            <select class="form-control" name="contract_type_id" id="contractType" style="width: 100%;" >
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Nom du poste</label>
                                                            <select name="job_id" id="job" class="form-control"  placeholder="Prénom" style="width: 100%;"></select>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Date début</label>
                                                                    <input type="text" name="contractStart" class="form-control datepicker"  placeholder="">

                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Date fin</label>
                                                                    <input type="text" name="contractEnd" class="form-control datepicker"  placeholder="">

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label>Salaire</label>
                                                                    <input type="text" name="salary" class="form-control"  placeholder="">

                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label>Devise</label>
                                                                    <select class="form-control" name="currency_id" id="currency" style="width: 100%;" >
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label>Période</label>
                                                                    <select class="form-control" name="salaryCurrency" >
                                                                        <option>Journalier</option>
                                                                        <option>Hebdomadaire</option>
                                                                        <option>Bihebdomadaire</option>
                                                                        <option>Mensuel</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>







                                                    </div>




                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel box box-success">
                                            <div class="box-header with-border">
                                                <h4 class="box-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                                        Informations bancaires
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse">
                                                <div class="box-body">
                                                    <div class="row">
                                                    <div class="col-md-6">

                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                        <h5>Informations sur le poste</h5>

                                                        <div class="form-group">
                                                            <label>Banque</label>
                                                            <select class="form-control" name="bank_id" >
                                                                <option value="1">Unibank</option>
                                                            </select>

                                                        </div>
                                                        <div class="form-group">
                                                            <label>Numéro de compte</label>
                                                            <input type="text" name="number" class="form-control"  placeholder="Prénom">
                                                        </div>



                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="panel box box-success">
                                            <div class="box-header with-border">
                                                <h4 class="box-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                                                        Informations employé
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseFour" class="panel-collapse collapse">
                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-md-6">



                                                            <div class="form-group">
                                                                <label>Code employé</label>
                                                                <input type="text" name="employeeId" class="form-control"  placeholder="Prénom">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Category ID</label>
                                                                <input type="text" name="categoryId" class="form-control"  placeholder="Prénom">
                                                            </div>

                                                            <div class="form-group">
                                                                <label>Supérieur hiérarchique</label>
                                                                <select name="employee_id" id="superieur" class="form-control"  placeholder="Nom supérieur" style="width: 100%;"></select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Email interne</label>
                                                                <input type="text" name="email" class="form-control"  placeholder="email">
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                    </div>

                                <!-- /.box-body -->

                </div>
                <!-- /.box-body -->
                <div class="box-footer">

                    <button type="submit" class="btn btn-info pull-right">Créer</button>
                </div>
                <!-- /.box-footer -->
            </form>
        </div>
        <!-- /.box -->
           <!-- /.box -->
       </div>
   </div>






@endsection
@section('script')
    @include('includes.js.datepicker3')
    @include('includes.js.select2')

    <script>

        //Date picker
        $('.datepicker').datepicker({
            autoclose: true,
            format: 'yyyy/mm/dd'
        });


    function readURL(input) {

    if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
    $('#blah').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
    }
    }

    $("#imgInp").change(function(){
    readURL(this);
    });


        $("#contractType").select2({
            placeholder: "Select an option",
            allowClear: true,
            ajax: {
                dataType: 'json',
                url: '{{ url("contractTypes/all") }}',
                delay: 400,
                data: function(params) {
                    return {
                        term: params.term
                    }
                },
                processResults: function (data, page) {
                    return {
                        results: data
                    };
                },
            }
        });

        $("#job").select2({
            placeholder: "Select an option",
            allowClear: true,
            ajax: {
                dataType: 'json',
                url: '{{ url("jobs/all") }}',
                delay: 400,
                data: function(params) {
                    return {
                        term: params.term
                    }
                },
                processResults: function (data, page) {
                    return {
                        results: data
                    };
                },
            }
        });

        $("#superieur").select2({
            placeholder: "Select an option",
            allowClear: true,
            ajax: {
                dataType: 'json',
                url: '{{ url("employees/all") }}',
                delay: 400,
                data: function(params) {
                    return {
                        term: params.term
                    }
                },
                processResults: function (data, page) {
                    return {
                        results: data
                    };
                },
            }
        });

        $("#currency").select2({
            placeholder: "Select an option",
            allowClear: true,
            ajax: {
                dataType: 'json',
                url: '{{ url("currencies/all") }}',
                delay: 400,
                data: function(params) {
                    return {
                        term: params.term
                    }
                },
                processResults: function (data, page) {
                    return {
                        results: data
                    };
                },
            }
        });
    </script>
@endsection