@extends('layouts.app')
@section('content-header')
    <h1>Gestion du personnel<small>Nouvel employé</small></h1>

@endsection
@section('content')
   @include('includes.css.datepicker3')
   @include('includes.css.select2')
   <div id="create_employee_page">
   <div class="row">

           <div class="col-md-2">
           </div>
       <div class="col-md-8">
           <form class="form" method="post" action="/employee" id="my-form" enctype="multipart/form-data">
           <div class="box box-solid">
               <div class="box-header with-border">
                   <h3 class="box-title">Informations personnelles</h3>

                   <div class="box-tools pull-right">
                       <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                       </button>
                   </div>
                   <!-- /.box-tools -->
               </div>
               <!-- /.box-header -->
               <div class="box-body" style="display: block;">

                       <div class="box-body">
                           <input type="hidden" name="_token" value="{{ csrf_token() }}">

                           <div class="row">


                               <div class="col-md-6">
                                   <div class="form-group">
                                       <label>Titre</label>
                                       <select name="title_id" id="title" class="form-control" style="width: 100%;" ></select>

                                   </div>
                                   <div class="form-group">
                                       <label>Nom</label>
                                       <input type="text" name="lastName" class="form-control"  placeholder="Nom de famille de l'employé">

                                   </div>
                                   <div class="form-group">
                                       <label>Prénom</label>
                                       <input type="text" name="firstName" class="form-control"  placeholder="Prénom de l'employé">
                                   </div>
                                   <div class="form-group">
                                       <label>Sexe</label>
                                       <select id="gender" class="form-control" name="gender_id" style="width: 100%;"  ></select>
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
                                   <div class="form-group pull-right">
                                       <img id="blah" src="{{ asset("/images/profil/default/defaultUserImage.png") }}"  alt="User Image"  alt="your image" style="height: 256px; width: 256px;" />
                                       <input type='file' id="imgInp" />
                                   </div>
                               </div>

                           </div>

                       </div>

                       <!-- /.box-footer -->

               </div>
               <!-- /.box-body -->
           </div>
           <!-- /.box -->
           </form>
       </div>

       <div class="col-md-2"></div>
   </div>
   <div class="row">

       <div class="col-md-2">
       </div>
       <div class="col-md-8">

               <div class="box box-solid">
                   <div class="box-header with-border">
                       <h3 class="box-title">Contrat</h3>

                       <div class="box-tools pull-right">
                           <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                           </button>
                       </div>
                       <!-- /.box-tools -->
                   </div>
                   <!-- /.box-header -->
                   <div class="box-body" style="display: block;">

                       <div class="box-body">


                           <div class="row">
                               <div class="col-md-6">
                                   <div class="form-group">
                                       <label>Code employé</label>
                                       <input type="text" name="employeeId" class="form-control"  placeholder="EmployeeID">
                                   </div>
                                   <div class="form-group">
                                       <label>Category ID</label>
                                       <input type="text" name="categoryId" class="form-control"  placeholder="CategoryID">
                                   </div>

                                   <div class="form-group">
                                       <label>Supérieur hiérarchique</label>
                                       <select name="employee_id" id="employee_sup" class="form-control"  placeholder="Supérieur hierachique" style="width: 100%;"></select>
                                   </div>
                                   <div class="form-group">
                                       <label>Email interne</label>
                                       <input type="text" name="email" class="form-control"  placeholder="email">
                                   </div>


                               </div>
                               <div class="col-md-6"></div>
                           </div>

                       </div>
                       <div class="box-footer">

                           <button type="submit" class="btn btn-primary btn-flat pull-right">Créer employé</button>
                       </div>
                       <!-- /.box-footer -->

                   </div>
                   <!-- /.box-body -->
               </div>
               <!-- /.box -->
           </form>
       </div>

       <div class="col-md-2"></div>
   </div>


   </div>


@endsection
@section('script')
    @include('includes.js.datepicker3')
    @include('includes.js.select2')
    <script src="{{asset("/js/employees/create.js") }}" type="text/javascript"></script>
    <script>


    </script>
@endsection