@extends('layouts.app')
@section('content-header')

        <h1>
            Gestion du personnel
            <small>Nouvel employé</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Charts</a></li>
            <li class="active">Flot</li>
        </ol>

@endsection
@section('content')

   <div id="create_employee_vue">
   <div class="row">

       <div class="col-md-2">
           <div class="panel panel-success">
               <div class="panel-heading">EmployeeID</div>
               <div class="panel-body">
                   <form class="form-horizontal">
                       <div class="form-group">
                           <div class="col-sm-12">
                               <input type="text" v-model="employee.employeeId" class="form-control"  readonly/>
                           </div>
                       </div>
                   </form>
               </div>

           </div>
       </div>


       <div class="col-md-8">
           <form class="form-horizontal">

               <!-- /.box-body -->
<div class="box">
               <div class="box-header with-border">
                   <h3 class="box-title">INFORMATIONS DE BASE</h3>

                   <div class="box-tools pull-right">
                     <span><i class="fa fa-clock-o"></i> Last save: @{{employee.updated_at }}</span>
                   </div>
                   <!-- /.box-tools -->
               </div>
               <!-- /.box-header -->
               <div class="box-body" style="display: block;">


                   <div class="form-group">
                       <label class="control-label col-sm-4">Id</label>
                       <div class="col-sm-8">
                           <input type="text" v-model="employee.id"  class="form-control" readonly/>
                       </div>
                   </div>

                       <div class="form-group">
                           <label class="control-label col-sm-4">Nom</label>
                           <div class="col-sm-6">
                               <input type="text" v-model="employee.firstName"  class="form-control"  placeholder="Nom de l'employé">
                           </div>
                       </div>
                   <div class="form-group">
                       <label class="control-label col-sm-4">Prénom</label>
                       <div class="col-sm-6">
                           <input type="text" v-model="employee.lastName" class="form-control"  placeholder="Prénom de l'employé">
                       </div>
                   </div>
                   <div class="form-group">
                       <label class="control-label col-sm-4">Sexe</label>
                       <div class="col-sm-4">
                         <m-select url="/api/select/genders" v-on:new_value="employee.gender_id=arguments[0].id"></m-select>
                       </div>
                   </div>
                   <div class="form-group">
                       <label class="control-label col-sm-4">Cin ou NIF</label>
                       <div class="col-sm-3">
                           <input type="text" v-model="employee.cinOrNif" class="form-control"  placeholder="CIN ou  NIF">
                       </div>
                   </div>
                   <div class="form-group">
                       <label class="control-label col-sm-4">Date de naissance</label>
                       <div class="col-sm-3">
                           <input type="date" v-model="employee.birthDate" class="form-control"/>
                       </div>
                   </div>

                   <div class="form-group">
                       <label class="control-label col-sm-4">Pays d'origine</label>
                       <div class="col-sm-4">
                           <m-select url="/api/select/countries" v-on:new_value="employee.country_id=arguments[0].id"></m-select>
                       </div>
                   </div>

                   <div class="form-group">
                       <label class="control-label col-sm-4">Adresse</label>
                       <div class="col-sm-8">
                           <input type="text" v-model="employee.address" class="form-control"  placeholder="Adresse de l'employé">
                       </div>
                   </div>

                   <div class="form-group">
                       <label class="control-label col-sm-4">Telephone (principal)</label>
                       <div class="col-sm-4">
                           <input type="text" v-model="employee.business_tel" class="form-control"  placeholder="Téléphone principal">
                       </div>
                   </div>

                   <div class="form-group">
                       <label class="control-label col-sm-4">email (professionnel)</label>
                       <div class="col-sm-4">
                           <input type="email" v-model="employee.business_email" class="form-control"  placeholder="gmail, hotmail, yahoo, etc..">
                       </div>
                   </div>

                   <div class="form-group">
                       <label class="control-label col-sm-4">email (care.org)</label>
                       <div class="col-sm-4">
                           <input type="email" v-model="employee.organizationnal_email" class="form-control"  placeholder="email@care.org">
                       </div>
                   </div>






               </div>

               <!-- /.box-footer -->

       </div>

</form>

   </div>

       <div class="col-md-2">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">ACTIONS</h3>
                </div>
            <div  class="box-body">
            <button class="btn btn-block btn-primary" v-on:click.prevent="save"><i class="fa fa-floppy-o fa-lg pull-left"></i> Save</button>
                </div>
            </div>

       </div>
   </div>

       @include('utilities.modal_loading')
</div>
@endsection
@section('script')
    <script src="{{asset("/js/employees/create.js") }}" type="text/javascript"></script>
    <script>


    </script>
@endsection