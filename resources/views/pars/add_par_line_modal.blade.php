<div class="modal fade" id="myModal">
    <div class="modal-dialog" >
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Nouvelle ligne</h4>
            </div>
            <form class="form" method="post" action="/permission" id="my-modal-form">
                <div class="modal-body">

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label>Dept ID</label>
                        <input type="text"  name="display_name" class="form-control"  placeholder="Nom de la permission">
                    </div>
                    <div class="form-group">
                        <label>Fund Code</label>
                        <input type="text" name="name" class="form-control"  placeholder="Code de la permission">
                    </div>

                    <div class="form-group">
                        <label>Business Unit</label>
                        <input type="text" name="name" class="form-control"  placeholder="Code de la permission">
                    </div>
                    <div class="form-group">
                        <label>Project ID</label>
                        <input type="text" name="name" class="form-control"  placeholder="Code de la permission">
                    </div>
                    <div class="form-group">
                        <label>	Activity</label>
                        <input type="text" name="name" class="form-control"  placeholder="Code de la permission">
                    </div>
                    <div class="form-group">
                        <label>Source Type</label>
                        <input type="text" name="name" class="form-control"  placeholder="Code de la permission">
                    </div>
                    <div class="form-group">
                        <label>Category</label>
                        <input type="text" name="name" class="form-control"  placeholder="Code de la permission">
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
                    <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-primary">Sauvegarder</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>


