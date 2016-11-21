@extends('layouts.app')
@section('content-header')
    <h1>Gestion du personnel<small>Nouvel employé</small></h1>

@endsection
@section('content')
   @include('includes.css.datepicker3')
   @include('includes.css.select2')
   <div class="row" id="create_employee_page">

           <div class="col-md-3">
           <div class="box box-solid">
               <div class="box-header with-border">
                   <h3 class="box-title">Folders</h3>

                   <div class="box-tools">
                       <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                       </button>
                   </div>
               </div>
               <div class="box-body no-padding" style="display: block;">
                   <ul class="nav nav-pills nav-stacked">
                       <li class="active"><a href="#"><i class="fa fa-inbox"></i> Inbox
                               <span class="label label-primary pull-right">12</span></a></li>
                       <li><a href="#"><i class="fa fa-envelope-o"></i> Sent</a></li>
                       <li><a href="#"><i class="fa fa-file-text-o"></i> Drafts</a></li>
                       <li><a href="#"><i class="fa fa-filter"></i> Junk <span class="label label-warning pull-right">65</span></a>
                       </li>
                       <li><a href="#"><i class="fa fa-trash-o"></i> Trash</a></li>
                   </ul>
               </div>
               <!-- /.box-body -->
           </div>
           </div>

       <div class="col-md-8">
        <!-- Horizontal Form -->
        <div class="box box-solid">
            <div class="box-header with-border">
                <h2 class="box-title">Nouvel employé</h2>
            </div>

            <form class="form" method="post" action="/employee" id="my-form" enctype="multipart/form-data">
                <div class="box-body">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="row">


                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Titre</label>
                                <input type="text" name="lastName" class="form-control"  placeholder="Nom de famille de l'employé">

                            </div>
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
                        <div class="col-md-6">
                            <div class="form-group">
                                <img id="blah" src="{{ asset("/images/profil/default/defaultUserImage.png") }}"  alt="User Image"  alt="your image" style="height: 256px; width: 256px;" />
                                <input type='file' id="imgInp" />
                            </div>
                        </div>

                </div>

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
                        <div class="col-md-6"></div>
                        </div>
                <div class="box-footer">

                    <button type="submit" class="btn btn-primary btn-flat pull-right">Créer employé</button>
                </div>
                <!-- /.box-footer -->
            </form>
        </div>
        <!-- /.box -->
           <!-- /.box -->
       </div>
       <div class="col-md-1"></div>
   </div>






@endsection
@section('script')
    @include('includes.js.datepicker3')
    @include('includes.js.select2')
    <script src="{{asset("/js/employees/create.js") }}" type="text/javascript"></script>
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