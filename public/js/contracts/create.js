

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
        loading:false
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
        }







    },



});