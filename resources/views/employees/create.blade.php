@extends('layouts.app')
@section('content-header')
    <h1>Gestion du personnel<small>Nouvel employé</small></h1>

@endsection
@section('content')

   <div id="create_employee_vue">
   <div class="row">

           <div class="col-md-2">
           </div>


       <div class="col-md-8">
           <form class="form-horizontal" enctype="multipart/form-data">

               <!-- /.box-body -->
<div class="box">
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



                       <div class="form-group">
                           <label class="control-label col-sm-4">Nom</label>
                           <div class="col-sm-8">
                               <input type="text" name="lastName" class="form-control"  placeholder="Nom de famille de l'employé">
                           </div>
                       </div>
                   <div class="form-group">
                       <label class="control-label col-sm-4">Nom</label>
                       <div class="col-sm-8">
                           <input type="text" name="lastName" class="form-control"  placeholder="Nom de famille de l'employé">
                       </div>
                   </div>






               </div>

               <!-- /.box-footer -->

       </div>

</form>
       <div class="col-md-2"></div>
   </div>


   </div>


@endsection
@section('script')
    <script src="{{asset("/js/employees/create.js") }}" type="text/javascript"></script>
    <script>


    </script>
@endsection