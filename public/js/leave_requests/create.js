/**
 * Created by MarcGrecoPeralte on 12/31/2016.
 */

var leave_request_create_vm= new Vue({
    el:'#leave_request_create_vue',
    data:{
        



    },
    methods:{
        showAddLeaveSettingsModal: function () {
            $("#add-leave-settings-modal").modal('show');
        },
        addLeaveSetting: function(){
            var inputs= JSON.parse(JSON.stringify(this.new_leave_setting));
            this.leave_settings.push(inputs);
            $("#add-leave-settings-modal").modal('hide');

        }
    }
});