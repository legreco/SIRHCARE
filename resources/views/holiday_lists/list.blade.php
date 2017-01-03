
    <div class="row" >
        <div class="col-md-2">

        </div>

        <div class="col-md-8">
            <!-- Box -->

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Liste des jours chomés de l'année @{{year}}</h3>

                    <div class="box-tools">
                        <button type="button" class="btn btn-flat btn-xs btn-info" v-on:click="showAddHolidayModal">
                            <i class="fa fa-plus"></i>
                            Ajouter jour férié
                        </button>
                    </div>

                </div>
                <div class="box-body">


                    <div v-if="holidays.length==0" class="callout callout-warning">
                        <h4><i class="fa fa-warning"></i>     Liste vide!</h4>
                        La liste est vide. Veuillez ajouter des éléments
                    </div>
                    <table v-if="holidays.length>0" class="table table-condensed">
                        <tr>
                            <th>Date</th>
                            <th> Nom du jour</th>
                            <th> Symbole</th>
                            <th></th>

                        </tr>

                        <tr v-for="holiday in holidays" >
                            <td >
                                <div v-cloak>
                                    @{{ holiday.name }}
                                </div>
                            </td>
                            <td>
                                <div v-cloak>
                                    @{{ holiday.date }}
                                </div>
                            </td>
                            <td>
                                <div v-cloak>

                                </div>
                            </td>
                           <td>
                                 <button class="btn btn-warning">
                                     <span class="glyphicon glyphicon-edit"></span>
                                 </button>
                                 <button class="btn btn-info">
                                     <span class="glyphicon glyphicon-search"></span>
                                 </button>
                                 <button class="btn btn-danger">
                                     <span class="fa fa-ban"></span>
                                 </button>
                             </td>

                    </table>

                </div><!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit"  class="btn btn-success pull-right">
                        <i class="fa fa-save"></i>
                        Sauvegarder liste
                    </button>
                    <button type="submit"  class="btn btn-success pull-left">
                        <i class="fa fa-arrow-right"></i>
                        Suivant
                    </button>
                </div>
            </div><!-- /.box -->


        </div>
        <div class="col-md-2">

        </div>


        @include('holiday_lists.add_holiday_modal')
    </div>




