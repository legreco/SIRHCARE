<!-- Create Item Modal -->
<div class="modal fade" id="add-holiday-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Nouveau jour chômé</h4>
            </div>
            <div class="modal-body">

                    <div class="form-group">
                        <label>Nom du jour férié</label>
                     <v-select url="/api/select/holiday/types" v-on:new_select="newHoliday.name=arguments[0].text"></v-select>
                    </div>

                    <div class="form-group">
                        <label>Date</label>
                        <input type="date" name="title" class="form-control" v-model="newHoliday.date"/>
                    </div>


                    <div class="checkbox">
                        <label>
                            <input type="checkbox" v-model="newHoliday.isALDeductible"> Déduire de congé annuel
                        </label>
                    </div>





            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-md-4">
                        <button   class="btn btn-block btn-danger">Annuler</button>
                    </div>
                    <div class="col-md-4">

                    </div>
                    <div class="col-md-4">
                        <button  class="btn btn-block btn-success" v-on:click="addHoliday">Ajouter</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>