<!-- Create Item Modal -->
<div class="modal fade" id="modal-add-leave-type" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Create Item</h4>
            </div>
            <div class="modal-body">

                <form method="POST"  v-on:submit.prevent="createCurrency">

                    <div class="form-group">
                        <label>Nom:</label>
                        <input type="text" name="title" class="form-control" v-model="newCurrency.name"  placeholder="Nom de la devise"/>
                        <span v-if="formErrors.name" class="error text-danger">
                            @{{ formErrors.name }}
                        </span>
                    </div>

                    <div class="form-group">
                        <label>Code</label>
                        <input type="text" name="code" class="form-control" v-model="newCurrency.code"  placeholder="Code de la devise"/>
                        <span v-if="formErrors['code']" class="error text-danger">
                            @{{ formErrors['code'] }}
                        </span>
                    </div>
                    <div class="form-group">
                        <label>Symbole</label>
                        <input type="text" name="symbol" class="form-control" v-model="newCurrency.symbol"  placeholder="Symbole de la devise "/>
                        <span v-if="formErrors['symbol']" class="error text-danger">
                            @{{ formErrors['symbol'] }}
                        </span>
                    </div>
                    <div class="modal-footer">

                        <button type="submit" v-if="submitting" class="btn btn-success"><i class="fa fa-spinner"></i> Saving .....</button>
                        <button type="submit" v-if="!submitting" class="btn btn-success">Submit</button>
                    </div>

                </form>


            </div>
        </div>
    </div>
</div>