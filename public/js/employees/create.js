

var create_employee_vm =new Vue({

  el:'#create_employee_vue',
  data:{
    employee:{
      'id':'',
      'firstName':'',
      'lastName':'',
      'gender_id':'',
      'cinOrNif':'',
      'birthDate':'',
      'country_id':'',
      'address':'',
      'business_tel':'',
      'business_email':'',
      'organizational_email':'',
      'created_at':'',
      'updated_at':''
    }


  },



  computed: {

  },

  mounted: function(){

  },


  methods : {
      save: function () {
        var input=JSON.parse(JSON.stringify(this.employee));

        $("#modal-loading").modal('show');
        this.$http.post('/employees',input,{emulateJSON:true}).then((response) => {
          this.employee.id=response.data.id;
          this.employee.employeeId=response.data.employeeId;
            this.employee.updated_at=response.data.updated_at;
          $("#modal-loading").modal('hide');
          toastr.success('succes', 'Success Alert', {timeOut: 5000});
        },(response) => {

          $("#modal-loading").modal('hide');
          toastr.error('Une erreur est survenue!', 'ECHEC',{timeOut: 5000});
        });

      }



    }


});