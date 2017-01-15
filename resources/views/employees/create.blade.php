@extends('layouts.app')
@section('content-header')
    <h1>Gestion du personnel<small>Nouvel employé</small></h1>

@endsection
@section('content')

   <div id="create_employee_vue">
       <div class="row">
           <div class="col-md-2">
           </div>
           <div class="col-md-9">
               <form class="form-horizontal">
               <div class="nav-tabs-custom">
                   <ul class="nav nav-tabs">
                       <li class="active"><a href="#activity" data-toggle="tab" aria-expanded="true">Basics</a></li>
                       <li class=""><a href="#timeline" data-toggle="tab" aria-expanded="false">Position</a></li>
                       <li class=""><a href="#settings" data-toggle="tab" aria-expanded="false">Contract</a></li>
                       <li class=""><a href="#settings" data-toggle="tab" aria-expanded="false">Leave</a></li>
                       <li class=""><a href="#settings" data-toggle="tab" aria-expanded="false">Commentaires</a></li>
                   </ul>
                   <div class="tab-content">
                       <div class="tab-pane active" id="activity">




                                   <div class="form-group">
                                       <label class="col-sm-4 control-label">Nom</label>
                                       <div class="col-sm-8">
                                           <input type="text" name="lastName" class="form-control"  placeholder="Nom de famille de l'employé">
                                       </div>

                                   </div>
                                   <div class="form-group">
                                       <label class="col-sm-4 control-label">Prénom</label>
                                       <div class="col-sm-8">
                                           <input type="text" name="lastName" class="form-control"  placeholder="Nom de famille de l'employé">
                                       </div>

                                   </div>

                                   <div class="form-group">
                                       <label class="col-sm-4 control-label">Sexe</label>
                                       <div class="col-sm-4">
                                           <select class="form-control">
                                               <option value="H">Homme</option>
                                               <option value="F">Femme</option>

                                           </select>
                                       </div>
                                       <div class="col-sm-4">
                                       </div>
                                   </div>





                                           <div class="form-group">
                                               <label class="col-sm-4 control-label">Date de naissance</label>

                                               <div class="col-sm-4">
                                                   <input type="date" name="lastName" class="form-control"  placeholder="Nom de famille de l'employé">
                                               </div>
                                               <div class="col-sm-4">
                                               </div>

                                           </div>











                       </div>


                       <!-- /.tab-pane -->
                       <div class="tab-pane" id="timeline">

                           <div class="form-group">
                               <label  class="col-sm-4 control-label">Poste</label>

                               <div class="col-sm-8">

                                   <div class="input-group">
                                       <div class="input-group-btn">
                                           <button type="button" class="btn btn-primary" v-on:click.prevent="showSearchPositionModal"><i class="fa fa-search"></i> </button>
                                       </div>
                                       <!-- /btn-group -->
                                       <input type="text" class="form-control" readonly>
                                   </div>

                               </div>



                           </div>
                           <div class="form-group">
                               <label  class="col-sm-4 control-label">CategoryID</label>

                               <div class=" col-sm-4">
                                   <input type="text" class="form-control" readonly/>

                               </div>
                               <div class=" col-sm-4">


                               </div>


                           </div>
                           <div class="form-group">
                               <label  class="col-sm-4 control-label">Département</label>

                               <div class=" col-sm-8">
                                   <input type="text" class="form-control" readonly/>

                               </div>


                           </div>
                           <div class="form-group">
                               <label class="col-sm-4 control-label"> Location</label>


                               <div class=" col-sm-4">

                                   <input type="text" class="form-control" readonly>

                               </div>
                               <div class=" col-sm-4">

                               </div>

                               <!-- /.input group -->
                           </div>
                           <div class="form-group">
                               <label  class="col-sm-4 control-label">Poste supervisant</label>

                               <div class=" col-sm-8">
                                   <input type="text" class="form-control" readonly/>

                               </div>


                           </div>
                       </div>
                       <!-- /.tab-pane -->

                       <div class="tab-pane" id="settings">
                           <div class="form-group">
                               <label  class="col-sm-4 control-label">Type contrat</label>

                               <div class=" col-sm-6">
                                   <v-select url="/api/select/contract_types"></v-select>

                               </div>


                           </div>
                           <div class="form-group">
                               <label class="col-sm-4 control-label"> Début contrat</label>


                               <div class=" col-sm-4">
                                   <div class="input-group date">
                                       <div class="input-group-addon">
                                           <i class="fa fa-calendar"></i>
                                       </div>
                                       <input type="date" name="startDate" class="form-control pull-right">
                                   </div>
                               </div>

                               <!-- /.input group -->
                           </div>
                           <div class="form-group">
                               <label class="col-sm-4 control-label"> Fin contrat</label>


                               <div class=" col-sm-4">
                                   <div class="input-group date">
                                       <div class="input-group-addon">
                                           <i class="fa fa-calendar"></i>
                                       </div>
                                       <input type="date" name="startDate" class="form-control pull-right">
                                   </div>
                               </div>

                               <!-- /.input group -->
                           </div>
                           <div class="form-group">
                               <div class="col-sm-offset-4 col-sm-8">
                                   <div class="checkbox">
                                       <label>
                                           <input type="checkbox" v-model="trialPeriod"> Période probatoire
                                       </label>
                                   </div>
                               </div>
                           </div>

                           <div class="form-group" v-if="trialPeriod">
                               <label  class="col-sm-4 control-label">Durée probation</label>

                               <div class=" col-sm-2">
                                   <input type="number" class="form-control"/>

                               </div>

                               <label  class="col-sm-1 control-label">mois</label>
                               <div class=" col-sm-5">


                               </div>
                           </div>
                           <div class="form-group">
                               <label  class="col-sm-4 control-label">Salaire</label>

                               <div class=" col-sm-3">
                                   <input type="number" class="form-control" min="0" placeholder="0"/>

                               </div>

                               <div class=" col-sm-5">


                               </div>
                           </div>
                           <div class="form-group">
                               <label  class="col-sm-4 control-label">Devise</label>


                               <div class=" col-sm-3">
                                   <v-select url="/api/select/currencies"></v-select>

                               </div>

                               <div class=" col-sm-5">
                               </div>
                           </div>

                           <div class="form-group">
                               <label  class="col-sm-4 control-label">Période salaire</label>

                               <div class=" col-sm-4">
                                   <v-select url="/api/select/salary_periods"></v-select>

                               </div>

                               <div class=" col-sm-4">

                               </div>
                           </div>
                       </div>
                       <!-- /.tab-pane -->
                   </div>
                   <!-- /.tab-content -->
               </div>
                   </form>
           </div>
           <div class="col-md-1"></div>
       </div>
   <div class="row">

           <div class="col-md-2">
           </div>
       <div class="col-md-8">
           <form class="form" method="post" action="/employee" id="my-form" enctype="multipart/form-data">
           <div class="box box-solid">
               <div class="box-header with-border">
                   <h3 class="box-title">INFORMATIONS DE BASE</h3>

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


               <div class="box box-solid">
                   <div class="box-header with-border">
                       <h3 class="box-title">INFORMATIONS MÉDICALES</h3>

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
    <script src="{{asset("/js/employees/create.js") }}" type="text/javascript"></script>
    <script>


    </script>
@endsection