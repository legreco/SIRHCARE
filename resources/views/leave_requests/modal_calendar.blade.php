<!-- Create Item Modal -->
<div class="modal fade" id="modal-calendar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form class="form-horizontal" >
                <div class="modal-body">
                    <div id="calendar">

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
                            <button class="btn btn-block btn-success" v-on:click.prevent="addNewLine">Ajouter</button>
                        </div>
                    </div>
                </div>





            </form>
        </div>

    </div>
</div>