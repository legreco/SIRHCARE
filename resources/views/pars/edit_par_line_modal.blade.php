<div class="modal fade" id="edit-par-line-modal">
    <div class="modal-dialog" >
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title"><i class="fa fa-pencil fa-2x"></i> Editer ligne</h4>
            </div>
            <form class="form-horizontal">
                <div class="modal-body">

                    <div class="form-group">
                        <label class="control-label col-sm-4">Dept ID</label>
                        <div class="col-sm-6">
                            <m-select url="/api/select/dept_ids" v-on:new_value="edit_par_line.deptId=arguments[0]" :selected="edit_par_line.deptId"></m-select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4">Fund Code</label>
                        <div class="col-sm-6">
                            <m-select url="/api/select/funds" v-on:new_value="edit_par_line.fundCode=arguments[0]" :selected="edit_par_line.fundCode"></m-select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-4">Business Unit</label>
                        <div class="col-sm-6">
                            <m-select url="/api/select/business_units" v-on:new_value="edit_par_line.businessUnit=arguments[0]" :selected="edit_par_line.businessUnit"></m-select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4">Project Id</label>
                        <div class="col-sm-6">
                            <m-select url="/api/select/projects" v-on:new_value="edit_par_line.projectId=arguments[0]" :selected="edit_par_line.projectId"></m-select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4">Activity</label>
                        <div class="col-sm-6">
                            <input type="text"  name="display_name" class="form-control"  placeholder="Nom de la permission">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4">Source Type</label>
                        <div class="col-sm-6">
                            <input type="text"  name="display_name" class="form-control"  placeholder="Nom de la permission">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4">Category</label>
                        <div class="col-sm-6">
                            <input type="text"  name="display_name" class="form-control"  placeholder="Nom de la permission">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Week 1</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Week 2</label>
                                <input type="text" name="name" class="form-control" >
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Week 3</label>
                                <input type="text" name="name" class="form-control"  >
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Week 4</label>
                                <input type="text" name="name" class="form-control"  >
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Week 5</label>
                                <input type="text" name="name" class="form-control" >
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="row">
                        <div class="col-md-4">
                            <button class="btn btn-block btn-danger" data-dismiss="modal">Annuler</button>
                        </div>
                        <div class="col-md-4">

                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-block btn-success" v-on:click.prevent="addParLine">Sauvegarder</button>
                        </div>
                    </div>

                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>


