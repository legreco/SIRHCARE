<!-- Create Item Modal -->
<div class="modal fade" id="modal-search-position" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title"><i class="glyphicon glyphicon-search"></i>  Rechercher le poste</h4>
            </div>
            <div class="modal-body">

                <form method="POST"  v-on:submit.prevent="">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Poste</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Location</label>
                     <v-select url="/api/select/locations"></v-select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Departement</label>
                        <v-select url="/api/select/departments"></v-select>
                    </div>
                    <button class="btn btn-primary btn-block margin-bottom"><i class="fa fa-search"></i> Rechercher</button>
                </div>
                <div class="col-md-8">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Résultats</div>
                        <div class="panel-body">
                            <table class="table table-striped table-hover">
                                <tr>
                                    <th>
                                        POSTE
                                    </th>
                                    <th>
                                        DEPARTEMENT
                                    </th>
                                    <th>
                                        LOCATION
                                    </th>
                                    <th>

                                    </th>
                                </tr>
                                <tr v-for="position in positions">
                                    <td>
                                        @{{ position.name }}
                                    </td>
                                    <td>
                                        @{{ position.department }}
                                    </td>
                                    <td>
                                        @{{ position.location }}
                                    </td>
                                    <td>

                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>

                </div>


            </div>

                </form>


            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>