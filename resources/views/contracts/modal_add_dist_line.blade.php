<!-- Create Item Modal -->
<div class="modal fade" id="modal-add-dist-line" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title"><i class="fa fa-money"></i> Ligne financière</h4>
            </div>
            <div class="modal-body">

                <form method="POST"  v-on:submit.prevent="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label > Dept ID</label>
                               <v-select url="/api/select/dept_ids/active" v-on:new_select="new_dist_line.deptId=arguments[0]"></v-select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Business Unit</label>
                                <v-select url="/api/select/business_units/active" v-on:new_select="new_dist_line.businessUnit=arguments[0]"></v-select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Fund</label>
                                <v-select url="/api/select/funds/active" v-on:new_select="new_dist_line.fundCode=arguments[0]"></v-select>
                            </div>


                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Project ID</label>
                                <v-select v-bind:url="fund_projects_url" v-on:new_select="new_dist_line.projectId=arguments[0]"></v-select>
                            </div>
                            <div class="form-group">
                                <label>Source</label>
                                <v-select url="/api/select/source_types/active" v-on:new_select="new_dist_line.sourceType=arguments[0]"></v-select>
                            </div>

                            <div class="form-group">
                                <label>Activity</label>
                                <input type="number" class="form-control" min="0" max="100"/>
                            </div>
                        </div>


                    </div>
                    <div class="row">
                        <div class="col-md-3">

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Distribution</label>
                                <input type="number" class="form-control" min="0" max="100"/>
                            </div>
                        </div>
                        <div class="col-md-3">

                        </div>
                    </div>
                </form>


            </div>
            <div class="modal-footer">
            <div class="row">
                <div class="col-md-4">
                    <button class="btn btn-flat btn-danger btn-block"> Annuler</button>
                </div>
                <div class="col-md-4">

                </div>
                <div class="col-md-4">
                    <button class="btn btn-flat btn-success btn-block" v-on:click.prevent="addDistLine"> Ajouter</button>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>