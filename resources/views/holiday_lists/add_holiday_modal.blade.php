<!-- Create Item Modal -->
<div class="modal fade" id="add-holiday-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Nouveau jour chômé</h4>
            </div>
            <div class="modal-body">

                <form method="POST" enctype="multipart/form-data" v-on:submit.prevent="addHoliday">

                    <div class="form-group">
                        <label>Nom du jour férié</label>
                        <input type="text" name="title" class="form-control" v-model="newHoliday.name"  placeholder="Nom du jour férié"/>
                    </div>

                    <div class="form-group">
                        <label>Date début</label>
                        <input type="text" name="title" class="form-control" v-model.date="newHoliday.startDate"/>
                    </div>

                    <div class="form-group">
                        <label>Date fin</label>
                        <input type="text" name="title" class="form-control" v-model="newHoliday.endDate"/>
                    </div>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" v-model="newHoliday.isALDeductible"> Déduire de congé annuel
                        </label>
                    </div>

                    <div class="modal-footer">

                        <button type="submit"  class="btn btn-success">Ajouter</button>
                    </div>

                </form>


            </div>
        </div>
    </div>
</div>