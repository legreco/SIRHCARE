toastr.options = {
    "closeButton": false,
    "debug": false,
    "newestOnTop": false,
    "progressBar": false,
    "positionClass": "toast-top-center",
    "preventDuplicates": true,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "3000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
}

var create_par_vm =new Vue({

    el:'#create_par_vue',
    data:{

        saving:false,
        reset:false,
        par:{
            'id':'',
            'period':'',
            'par_lines':[]
        },

        par_lines:[],
        new_par_line:{
            'deptId':'',
            'fundCode':'',
            'businessUnit':'',
            'projectId':'',
            'activity':'',
            'sourceType':'',
            'week1':0,
            'week2':0,
            'week3':0,
            'week4':0,
            'week5':0
        },
        edit_par_line:{
            'deptId':'',
            'fundCode':'',
            'businessUnit':'',
            'projectId':'',
            'activity':'',
            'sourceType':'',
            'week1':'',
            'week2':'',
            'week3':'',
            'week4':'',
            'week5':''
        }
       

    },


  
    mounted: function(){
        var par_line={
            'deptId':'',
                'fundCode':'',
                'businessUnit':'',
                'projectId':'',
                'activity':'',
                'sourceType':'',
                'week1':0,
                'week2':0,
                'week3':0,
                'week4':0,
                'week5':0
        };

        this.par_lines.push(par_line);
        this.par_lines.push(par_line);




    },


    methods : {
        save: function () {
            this.par.par_lines=this.par_lines;

            var input = this.par;
            $("#modal-loading").modal('show');
            this.$http.post('/pars/save',input,{emulateJSON:true}).then((response) => {

                $("#modal-loading").modal('hide');
                toastr.success('Sauvegarde réussie', 'Success Alert');
            },(response) => {
                $("#modal-loading").modal('hide');
                toastr.error('La sauvegarde à échouée', 'Error Alert');
               
            });

        },
        submit: function(){

        },
        totalWeek: function (par_line) {
            return par_line.week1+par_line.week2+par_line.week3+par_line.week4+par_line.week5;
        },
        showAddParLineModal: function () {

            this.reset=true;


           $("#add-par-line-modal").modal('show');
        },
        
        addParLine: function(){
            var input= JSON.parse(JSON.stringify(this.new_par_line));

            this.par_lines.push(input);
            $("#add-par-line-modal").modal('hide');
            this.reset=false;

        },
        showEditParLineModal: function (index) {
            this.edit_par_line=JSON.parse(JSON.stringify(this.par_lines[index]));
            $("#edit-par-line-modal").modal('show');
        },

        editParLine: function () {

        },
        removeParLine: function (index) {

            swal({
                    title: "Are you sure?",
                    text: "You will not be able to recover this imaginary file!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes, delete it!",
                    cancelButtonText: "No, cancel plx!",
                    closeOnConfirm: false,
                    closeOnCancel: false
                },
                function(isConfirm){
                    if (isConfirm) {
                        swal("Deleted!", "Your imaginary file has been deleted.", "success");
                        create_par_vm.par_lines.splice(index,1);
                    } else {
                        swal("Cancelled", "Your imaginary file is safe :)", "error");
                    }
                });


        }

       
        },


        


    computed:{
        totalWeek1: function () {
    var totalWeek1=0;
            for(var i=0; i<this.par_lines.length; i++)
            {
                totalWeek1=totalWeek1+par_lines[i].week1;
            }


            return totalWeek1;

        }
      
    }

});