/**
 * Created by MarcGrecoPeralte on 1/15/2017.
 */


var financial_data_create_vm =new Vue({
    el:'#financial_data_create_vue',
    data:{
        fin_data:{
            lines:[]
        },


      new_line:{
          'deptId':'',
          'fundCode':'',
          'businessUnit':'',
          'projectId':'',
          'activity':'',
          'sourceType':'',
          'category':'',
          'distribution':''
      }

    },




    mounted: function(){

       // this.positions.push(this.new_position);

    },


    methods : {
        removeLine: function (index) {

            swal({
                    title: "Confirmez la suppression",
                    text: "Vous allez supprimez",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Confirmer",
                    cancelButtonText: "Annuler",
                    closeOnConfirm: false,
                    closeOnCancel: false
                },
                function(isConfirm){
                    if (isConfirm) {
                        financial_data_create_vm.fin_data.lines.splice(index,1);
                        swal("Supprimée", "La ligne a été supprimée", "success");
                    } else {
                        swal("Cancelled", "Your imaginary file is safe :)", "error");
                    }
                });


        },
        editLine: function () {
            $("#modal-edit-financial-line").modal('hide');
        },
        addNewLine: function () {
           var line = JSON.parse(JSON.stringify(this.new_line));
            this.fin_data.lines.push(line);
            $("#modal-add-financial-line").modal('hide');
        },
        showAddNewLineModal: function () {
            $("#modal-add-financial-line").modal('show');
        },
        showEditLineModal: function () {
            $("#modal-edit-financial-line").modal('show');
        },
        search: function () {
            this.positions=[];
            this.loading=true;
        },
        showAddDistributionLineModal: function () {
            $("#modal-add-dist-line").modal('show');
        },
        addDistLine : function () {
            $("#modal-add-dist-line").modal('hide');
            var inputs=JSON.parse(JSON.stringify(this.new_dist_line));
            this.dist_lines.push(inputs);
        }







    },

    computed: {
        fund_projects_url: function () {
            if(this.new_dist_line.fundCode==null) return ;
            return '/api/select/fund/'+this.new_dist_line.fundCode.value+'/projects/active';
        }
    }



});