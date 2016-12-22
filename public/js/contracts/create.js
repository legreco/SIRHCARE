

var create_contract_vm =new Vue({

    el:'#create_contract_vue',
    data:{
        trialPeriod:false,
        allocations:[],
        positions:[],
        new_position:{
            "name":"chef bureau",
        "department":"IT",
        "location":"Ouest"},
        loading:false,
        salaryRepartition:false,
        dist_lines:[],
        new_dist_line:{
            "deptId":{},
            "fundCode":{"value":1},
            "businessUnit":{},
            "projectId":{},
            "activity":{},
            "sourceType":{}
            
        }
          
    },




    mounted: function(){

this.positions.push(this.new_position);

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