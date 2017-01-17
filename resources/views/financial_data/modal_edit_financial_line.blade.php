<!-- Create Item Modal -->
<div class="modal fade" id="modal-edit-financial-line" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form class="form-horizontal" >
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-pencil"></i>  Éditer</h4>
            </div>
            <div class="modal-body">
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Dept ID</label>
                            <div  class="col-sm-6">
                                <v-select url="/api/select/funds/active" default_item="edit_line.fundCode" v-on:new_select="new_line.fundCode=arguments[0]"></v-select>
                            </div>
                        </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Fund Code</label>
                    <div  class="col-sm-6">
                        <v-select url="/api/select/funds/active" v-on:new_select="new_line.fundCode=arguments[0]"></v-select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Business Unit</label>
                    <div  class="col-sm-6">
                        <v-select url="/api/select/funds/active" v-on:new_select="new_line.fundCode=arguments[0]"></v-select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Project Id</label>
                    <div  class="col-sm-6">
                        <v-select url="/api/select/funds/active" v-on:new_select="new_line.fundCode=arguments[0]"></v-select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Activity ID</label>
                    <div  class="col-sm-6">
                        <v-select url="/api/select/funds/active" v-on:new_select="new_line.fundCode=arguments[0]"></v-select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Distribution</label>
                    <div  class="col-sm-4">
                        <input type="number" class="form-control" min="1"/>
                    </div>

                        <label class="col-sm-1 control-label">%</label>

                </div>


            </div>
                    <div class="modal-footer">

                        <div class="row">
                            <div class="col-md-4">
                                <button class="btn btn-block btn-info">Sauvegarder</button>
                            </div>
                            <div class="col-md-4">

                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-block btn-success">Soumettre</button>
                            </div>
                        </div>
                    </div>





            </form>
        </div>

    </div>
</div>