@extends('layouts.app')
@section('content-header')
    <h1>Gestion des congés<small>Nouvelle demande</small></h1>
@endsection
@section('content')

    <div class="row">
        <div class="col-md-1">


            <!-- /. box -->

            <!-- /.box -->
        </div>
        <div class="col-md-10">

            <div class="callout callout-success" style="margin-bottom: 0!important;">
                <h4><i class="fa fa-check"></i> Demande de congée soumise!</h4>
                Votre demande de congé a été soumise avec succès. Votre supérieur hiérachique recevra sous peu un mail pour valider votre demande.</br>
                <a href="{{url('/leaves/requests/my_requests')}}">Retournez à la liste des des demandes de congés</a>
            </div>

            <!-- /.box -->
        </div>
        <div class="col-md-1">

        </div>
    </div>

@endsection
@section('script')
    <script src="{{ asset ("/js/leave_requests/create.js") }}" type="text/javascript"></script>

@endsection