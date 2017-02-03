/**
 * Created by MarcGrecoPeralte on 1/16/2017.
 */


var exchange_rate_create_vm =new Vue({
    el:'#exchange_rate_create_vue',
    data:{
        value: { name: 'Vue.js', language: 'JavaScript' },
        options: [
            { name: 'Vue.js', language: 'JavaScript' },
            { name: 'Rails', language: 'Ruby' },
            { name: 'Sinatra', language: 'Ruby' },
            { name: 'Laravel', language: 'PHP' },
            { name: 'Phoenix', language: 'Elixir' }
        ]
       

    },



    mounted: function(){

       // this.positions.push(this.new_position);

    },


    methods : {

        addAllocationLine: function () {
            this.allocations.push({
                "amount":345,
                "currency":"USD",
                "allocation_type":"Logement"
            });
        },
        showSearchPositionModal: function () {
            $("#modal-search-position").modal('show');
        },
        search: function () {
            this.positions=[];
            this.loading=true;
        },
        showAddDistributionLineModal: function () {
            $("#modal-add-dist-line").modal('show');
        },
        addDistLine : function () {
            $("#modal-add-dist-line").modal('hide');
            var inputs=JSON.parse(JSON.stringify(this.new_dist_line));
            this.dist_lines.push(inputs);
        }







    },

    computed: {
        fund_projects_url: function () {
            if(this.new_dist_line.fundCode==null) return ;
            return '/api/select/fund/'+this.new_dist_line.fundCode.value+'/projects/active';
        }
    }



});