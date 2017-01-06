

var currencies_vn =new Vue({

    el:'#holiday_lists_vue',
    data:{
        holiday_list:{
            'year':'',
            'holidays':[]
        },
        holidays:[],
        newHoliday:{'id':'','name':'','startDate':'','endDate':'','isALDeductible':''},
        showList:false,
        year:{}
    },


    computed: {
       
    },
    mounted: function(){
        this.initFullCalendar();





    },


    methods : {

        showAddHolidayModal: function () {
            this.formErrors=[];
       
            $("#add-holiday-modal").modal('show');
        },

        addHoliday: function () {
            $("#add-holiday-modal").modal('hide');
            var event=[];

            event.title=this.newHoliday.name;
            event.start=this.newHoliday.startDate;
            event.end=this.newHoliday.endDate;
            var holiday=JSON.parse(JSON.stringify(this.newHoliday));
        this.holidays.push(holiday);
            $('#calendar').fullCalendar('renderEvent',event,true);
        }
        ,
        initFullCalendar: function () {





                $('#calendar').fullCalendar({
                    header: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'month,agendaWeek,agendaDay'
                    },
                    defaultDate: '2016-12-12',
                    navLinks: true, // can click day/week names to navigate views
                    selectable: true,
                    selectHelper: true,
                    select: function(start, end) {
                      currencies_vn.newHoliday.startDate=moment(start,"YYYY-MM-DD");
                        currencies_vn.newHoliday.endDate=moment(end,"YYYY-MM-DD");

                       currencies_vn.showAddHolidayModal();
                    },
                    editable: true,
                    eventLimit: true// allow "more" link when too many events

                });




        },
        setNewHolidayStartDate: function (startDate) {

            this.newHoliday.startDate= startDate;
        },
        createHolidayList: function()
        {
            var input= this.holiday_list;
            this.$http.post('',input,{emulateJSON:true}).then((response)=>{


            }, (response)=>{ n}
            )
        }

      


      
        }

       




    

});