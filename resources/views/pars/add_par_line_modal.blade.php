<div class="modal fade" id="add-par-line-modal">
    <div class="modal-dialog" >
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title"><i class="fa fa-plus fa-2x"></i> Nouvelle ligne</h4>
            </div>
            <form class="form-horizontal">
                <div class="modal-body">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#menu1">Financial codes</a></li>
                        <li><a data-toggle="tab" href="#menu2">Worked hours</a></li>
                    </ul>

                    <div class="tab-content">
                        <div id="menu1" class="tab-pane fade in active">
                            <h3></h3>
                            <div class="form-group">
                                <label class="control-label col-sm-4">Dept ID</label>
                                <div class="col-sm-6">
                                    <m-select url="/api/select/dept_ids" v-on:new_value="new_par_line.deptId=arguments[0]" :reset="reset"></m-select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4">Fund Code</label>
                                <div class="col-sm-6">
                                    <m-select url="/api/select/funds" v-on:new_value="new_par_line.fundCode=arguments[0]" :reset="reset"></m-select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-4">Business Unit</label>
                                <div class="col-sm-6">
                                    <m-select url="/api/select/business_units" v-on:new_value="new_par_line.businessUnit=arguments[0]" :reset="reset"></m-select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4">Project Id</label>
                                <div class="col-sm-6">
                                    <m-select url="/api/select/projects" v-on:new_value="new_par_line.projectId=arguments[0]" :reset="reset"></m-select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4">Activity</label>
                                <div class="col-sm-6">
                                    <m-select url="/api/select/funds" v-on:new_value="new_par_line.activity=arguments[0]" :reset="reset"></m-select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4">Source Type</label>
                                <div class="col-sm-6">
                                    <m-select url="/api/select/source_types" v-on:new_value="new_par_line.sourceType=arguments[0]" :reset="reset"></m-select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4">Category</label>
                                <div class="col-sm-6">
                                    <m-select url="/api/select/funds" v-on:new_value="new_par_line.fundCode=arguments[0]" :reset="reset"></m-select>
                                </div>
                            </div>
                        </div>
                        <div id="menu2" class="tab-pane fade">
                            <h3></h3>
                            <div class="form-group">
                                <label class="control-label col-sm-4">Week 1</label>
                                <div class="col-sm-4">
                                 <input type="number" v-model="new_par_line.week1" class="form-control"/>
                                </div>
                                <div class="col-md-4"></div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4">Week 2</label>
                                <div class="col-sm-4">
                                    <input type="number" v-model="new_par_line.week2" class="form-control"/>
                                </div>
                                <div class="col-md-4"></div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4">Week 3</label>
                                <div class="col-sm-4">
                                    <input type="number" v-model="new_par_line.week3" class="form-control"/>
                                </div>
                                <div class="col-md-4"></div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4">Week 4</label>
                                <div class="col-sm-4">
                                    <input type="number" v-model="new_par_line.week4" class="form-control"/>
                                </div>
                                <div class="col-md-4"></div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4">Week 5</label>
                                <div class="col-sm-4">
                                    <input type="number" v-model="new_par_line.week5" class="form-control"/>
                                </div>
                                <div class="col-md-4"></div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4">Distribution</label>
                                <div class="col-sm-4">
                                    <input type="number" v-model="new_par_line.distribution" class="form-control"/>
                                </div>
                                <div class="col-md-4"></div>
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


