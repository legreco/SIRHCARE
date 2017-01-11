/**
 * Created by MarcGrecoPeralte on 12/31/2016.
 */

var leave_request_create_vm= new Vue({
    el:'#leave_request_create_vue',
    data:{
        leave_request:{
            'type':'',
            'duration':'',
            'startDate':'',
            'endDate':'',
            'comments':'',
            'address':'',
            'telephone':''

        }



    },
    methods:{
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
                document.open();
                document.write(response.data);
                document.close();
               // toastr.success(response.data, 'Success Alert', {timeOut: 5000});

            },(response) => {

             
            });
          
        },
        save: function () {
            var input= JSON.parse(JSON.stringify(this.leave_request));
            
            
        }
    }
});