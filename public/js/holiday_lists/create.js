

var holiday_list_vm =new Vue({

    el:'#holiday_list_create_vue',
    data:{
        holiday_list:{
            'year':'',
            'holidays':[]
        },
        holidays:[],
        newHoliday:{'id':'','name':'','date':'','isALDeductible':''},
        showList:false,
        year:{}
    },


    computed: {
       
    },
    mounted: function(){






    },


    methods : {

        showAddHolidayModal: function () {
            this.newHoliday={};
            
            $("#add-holiday-modal").modal('show');
        },

        addHoliday: function () {
            var input=JSON.parse(JSON.stringify(this.newHoliday));
            this.holiday_list.holidays.push(input);
            $("#add-holiday-modal").modal('hide');
        }
        ,
        removeHoliday: function (index) {
            this.holiday_list.holidays.splice(index,1);

        },
        submit: function()
        {
            var input= this.holiday_list;
            this.$http.post('/holiday_lists/',input,{emulateJSON:true}).then((response)=>{

            alert(JSON.stringify(response.data));
            }, (response)=>{ n}
            )
        }

      


      
        },
    filters:{
        dayOfWeekName: function (value) {
          return moment(value).format('dddd');
        },
        dayMonthDisplay: function (value) {
            return moment(value).format('Do MMMM');

        }
        
        
    }

       




    

});