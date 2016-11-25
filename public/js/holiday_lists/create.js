

var currencies_vn =new Vue({

    el:'#holiday_lists_vue',
    data:{
        holidays:[],
        newHoliday:{'id':'','name':'','date':'','isALDeductible':''}
    },


    computed: {
       
    },

    mounted: function(){


       



    },


    methods : {

        showAddHolidayModal: function () {
            this.formErrors=[];
            $("#add-holiday-modal").modal('show');
        },

        addHoliday: function () {

            $("#add-holiday-modal").modal('hide');
        this.holidays.push(this.newHoliday);
        }
      


      
        }

       




    

});