<!-- Create Item Modal -->
<div class="modal fade" id="add-holiday-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Create Item</h4>
            </div>
            <div class="modal-body">

                <form method="POST" enctype="multipart/form-data" v-on:submit.prevent="addHoliday">

                    <div class="form-group">
                        <label>Nom du jour férié</label>
                        <input type="text" name="title" class="form-control" v-model="newHoliday.name"  placeholder="Nom de la devise"/>
                    </div>

                    <div class="form-group">
                        <label>Date:</label>
                        <input type="date" name="title" class="form-control" v-model="newHoliday.date"/>
                    </div>

                    <div class="form-group">
                        <label>Date:</label>
                        <input type="date" name="title" class="form-control" v-model="newHoliday.date"/>
                    </div>

                    <div class="modal-footer">

                        <button type="submit"  class="btn btn-success">Submit</button>
                    </div>

                </form>


            </div>
        </div>
    </div>
</div>