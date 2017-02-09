/**
 * Created by MarcGrecoPeralte on 12/31/2016.
 */

var leave_request_create_vm= new Vue({
    el:'#leave_request_create_vue',
    data:{
        leave_request:{
            'leave_type_id':'',
            'duration':'',
            'startDate':'',
            'endDate':'',
            'returnDate':'',
            'comments':'',
            'address':'',
            'telephone':''

        }



    },
    mounted: function () {
        $("#calendar").fullCalendar({
            header:{
                left:'prev',
                center:'title',
                right:'next'
            },
            events: '/api/calendar/holidays',
            dayClick: function(date, jsEvent, view) {
                leave_request_create_vm.leave_request.startDate=date.format();
               // alert('Clicked on: ' + date.format());
                $("#modal-calendar").modal('hide');

                // change the day's background color just for fun
              //  $(this).css('background-color', 'red');

            }
        });
        $('#modal-calendar').on('shown.bs.modal', function () {
            $("#calendar").fullCalendar('render');
        });
    },
    watch: {

        'leave_request.duration': function (newValue) {
         var data={
             "date": this.leave_request.startDate,
             "duration": newValue
         }

            this.$http.get('/api/calendar/next?duration='+data.duration+'&date='+data.date,{emulateJSON:true}).then((response) => {
                this.leave_request.endDate=response.data.endDate;
                this.leave_request.returnDate=response.data.returnDate;
            },(response) => {

              
            }); 
        }
    },
    
    methods:{
        showCalendar: function () {
            $("#modal-calendar").modal('show');


        },
        showAddLeaveSettingsModal: function () {
            $("#add-leave-settings-modal").modal('show');
        },
        addLeaveSetting: function(){
            var inputs= JSON.parse(JSON.stringify(this.new_leave_setting));
            this.leave_settings.push(inputs);
            $("#add-leave-settings-modal").modal('hide');

        },
        submit: function () {
            var input= JSON.parse(JSON.stringify(this.leave_request));
            this.$http.post('/leaves/requests',input,{emulateJSON:true}).then((response) => {
             //   location.href='/leaves/requests/my_requests';
              /*  document.open();
                document.write(JSON.stringify(response.data));
                document.close();*/
               // toastr.success(response.data, 'Success Alert', {timeOut: 5000});

            },(response) => {

             
            });
          
        },
        save: function () {
            var input= JSON.parse(JSON.stringify(this.leave_request));
            
            
        },
        test: function () {
            this.$http.post('/leaves/requests',input,{emulateJSON:true}).then((response) => {
                //   location.href='/leaves/requests/my_requests';
                document.open();
                document.write(JSON.stringify(response.data));
                document.close();
                // toastr.success(response.data, 'Success Alert', {timeOut: 5000});

            },(response) => {


            });
            
        }
    },
    computed:{
        startDate: function () {
            return moment(this.leave_request.startDate).format('dddd  Do MMMM  YYYY');


        },
        endDate: function () {
            return moment(this.leave_request.endDate).format('dddd  Do MMMM  YYYY');

        },
        returnDate: function () {
            return moment(this.leave_request.returnDate).format('dddd  Do MMMM  YYYY');

        }



    }
});