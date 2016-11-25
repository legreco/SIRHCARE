

var create_fund_vm =new Vue({

    el:'#create_fund_vue',
    data:{
        fund:{'name':'','code':''}
      
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