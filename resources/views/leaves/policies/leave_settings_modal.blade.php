<div class="modal fade" id="add-leave-settings-modal">
    <div class="modal-dialog" >
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Nouvelle ligne</h4>
            </div>
            <form class="form-horizontal" method="post" action="/permission" id="my-modal-form">
                <div class="modal-body">

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group">
                        <label  class="col-sm-4 control-label">Type de congé</label>

                        <div class="col-sm-8">
                            <select  class="form-control"  ></select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-4 control-label">Renouveler le</label>

                        <div class="col-sm-2">
                            <select  class="form-control"  ></select>
                        </div>
                        <div class="col-sm-4">
                            <select  class="form-control"  ></select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-4 control-label">Allocation annuelle</label>

                        <div class="col-sm-2">
                            <input  type="number" class="form-control" min="1" />
                        </div>
                        <div class="col-sm-6">
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-4 control-label">Balance limite</label>

                        <div class="col-sm-2">
                            <input  type="number" class="form-control" min="1" />
                        </div>
                        <div class="col-sm-6">
                        </div>
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-4 control-label">Balance par défaut</label>


                        <div class="col-sm-4">
                            <select  class="form-control"  >
                                <option value="1">Allocation annuelle</option>
                                <option value="2">Zéro</option>
                            </select>
                        </div>
                        <div class="col-sm-4">

                        </div>
                    </div>


                    <div class="form-group">
                        <label  class="col-sm-4 control-label">Au renouvellement</label>


                        <div class="col-sm-8">
                            <select  class="form-control" v-model="selected" >
                                <option value="1">Remise à zéro</option>
                                <option value="2">Remise à l'allocation annuelle</option>
                                <option value="3">Conserver l'ancienne balance</option>
                                <option value="4">Conserver l'ancienne balance + allocation annuelle</option>
                                <option value="5">Conserver x jours de l'ancienne balance</option>
                                <option value="6">Conserver x jours de l'ancienne balance + allocation annuelle</option>
                                <option value="7">Conserver l'ancienne balance + allocation annuelle</option>
                                <option value="8">Conserver l'ancienne balance + allocation annuelle</option>
                            </select>
                        </div>

                    </div>


                    <div class="form-group" v-if="selected==3">
                    <label  class="col-sm-4 control-label">Balance limite</label>


                    <div class="col-sm-2">
                        <input  type="number" class="form-control" min="1" />
                    </div>
                        <div class="col-sm-6">

                        </div>
                </div>

                    <div class="form-group">
                        <label  class="col-sm-4 control-label">Delai expiration</label>


                        <div class="col-sm-3">
                            <select  class="form-control"  >
                                <option value="1">NON</option>
                                <option value="2">OUI</option>
                            </select>
                        </div>
                        <div class="col-sm-5">
                            <div>
                                <input  type="number" class="form-control" min="1" />
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-4 control-label">Augmentation périodique</label>


                        <div class="col-sm-8">
                            <select  class="form-control" v-model="selected2" >
                                <option value="1">Aucun</option>
                                <option value="2">Chaque mois</option>
                            </select>
                        </div>

                    </div>

                    <div class="form-group" v-if="selected2==2">
                        <label  class="col-sm-4 control-label">Augmenter de</label>

                        <div class="col-sm-3">
                            <input  type="number" class="form-control" min="1" />
                        </div>
                        <div class="col-sm-5">
                            <select  class="form-control"  >
                                <option value="1">Jours</option>
                                <option value="2">% Allocation annuelle</option>
                            </select>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <div class="row">
                        <div class="col-md-4">
                            <button type="button" class="btn btn-block btn-danger pull-left" data-dismiss="modal">
                                <i class="fa fa-remove"></i>
                                Annuler
                            </button>
                        </div>
                        <div class="col-md-4">

                        </div>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-block btn-primary ">
                                <i class="fa fa-plus"></i>
                                Ajouter
                            </button>
                        </div>

                    </div>


                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>


