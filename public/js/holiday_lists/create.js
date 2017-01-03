

var currencies_vn =new Vue({

    el:'#holiday_lists_vue',
    data:{
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
        this.holidays.push(this.newHoliday);
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
                        alert(start);
                      currencies_vn.newHoliday.startDate=start.toString('yyyy-MM-dd');
                        currencies_vn.newHoliday.endDate=end;
                       // this.newHoliday.endDate=end;;
                        $("#add-holiday-modal").modal('show');
                    },
                    editable: true,
                    eventLimit: true, // allow "more" link when too many events
                    events: [
                        {
                            title: 'All Day Event',
                            start: '2016-12-01'
                        },
                        {
                            title: 'Long Event',
                            start: '2016-12-07',
                            end: '2016-12-10'
                        },
                        {
                            id: 999,
                            title: 'Repeating Event',
                            start: '2016-12-09T16:00:00'
                        },
                        {
                            id: 999,
                            title: 'Repeating Event',
                            start: '2016-12-16T16:00:00'
                        },
                        {
                            title: 'Conference',
                            start: '2016-12-11',
                            end: '2016-12-13'
                        },
                        {
                            title: 'Meeting',
                            start: '2016-12-12T10:30:00',
                            end: '2016-12-12T12:30:00'
                        },
                        {
                            title: 'Lunch',
                            start: '2016-12-12T12:00:00'
                        },
                        {
                            title: 'Meeting',
                            start: '2016-12-12T14:30:00'
                        },
                        {
                            title: 'Happy Hour',
                            start: '2016-12-12T17:30:00'
                        },
                        {
                            title: 'Dinner',
                            start: '2016-12-12T20:00:00'
                        },
                        {
                            title: 'Birthday Party',
                            start: '2016-12-13T07:00:00'
                        },
                        {
                            title: 'Click for Google',
                            url: 'http://google.com/',
                            start: '2016-12-28'
                        }
                    ]
                });




        },
        setNewHolidayStartDate: function (startDate) {

            this.newHoliday.startDate= startDate;
        }

      


      
        }

       




    

});