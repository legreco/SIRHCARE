@extends('layouts.app')
@section('content-header')
    <h1>Liste des employés</h1>
@endsection
@section('content')
    <div class="row">
        <div class='col-md-12'>
            <!-- Box -->
            @include('includes.info.session_flash_status')
            <div class="box box-primary">
                <div class="box-header with-border">

                </div>
                <div class="box-body">


                    <table class="table table-bordered table-hover" id="employees-table">
                        <thead>
                        <tr>
                            <th>Statut</th>
                            <th>Code</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <td>Sexe</td>
                            <td>Cin Ou Nif</td>
                            <td>Date naissance</td>
                            <td>Poste</td>
                            <td>Departement</td>
                            <td>Location</td>
                        </tr>
                        </thead>


                    </table>

                </div><!-- /.box-body -->

            </div><!-- /.box -->
        </div><!-- /.col -->
        <div class='col-md-2'>
            </div>
    </div>
@endsection
@section('script')
<script>

    $(function() {
        $('#employees-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! url('/datatables/employees') !!}',
            columns: [
                { data: 'employee_status_id', name: 'employee_status_id' },
                { data: 'employeeId', name: 'employeeId' },
                { data: 'firstName', name: 'firstName' },
                { data: 'lastName', name: 'lastName' },
                { data: 'gender_id', name: 'gender_id' },
                { data: 'cinOrNif', name: 'CinOrNif' },
                { data: 'birthDate', name: 'birthDate' }
            ]
        });
    });
</script>

    @stop