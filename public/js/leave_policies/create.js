/**
 * Created by MarcGrecoPeralte on 12/6/2016.
 */
var leave_policy_create_vm= new Vue({
    el:'#leave_policy_create_vue',
    data:{
            leave_settings:[],
        selected:{},
        selected2:{},
        selected3:{},
        new_leave_setting:{
            leave_type:{},
            'yearly_allowance':'1',
            'renew_on':{
                'dayOfMonth':'',
                'month':{}
            },
            'maxBalance':''
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

        }
    }
});