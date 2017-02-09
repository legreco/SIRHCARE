


var create_position_vm =new Vue({

    el:'#create_position_vue',
    data:{
        
        
        position:{
            'id':'',
            'categoryId':'',
            'name':'',
            'position_type':'',
            'department':'',
            'location':'',
            'fonction':'',
            'grade':'',
            'position_sup':''

        },

        _position:''


    },


    mounted: function(){





    },


    methods : {
        save: function () {
            this.prepareSave();
            var input=JSON.parse(JSON.stringify(this._position));
            $("#modal-loading").modal('show');
            this.$http.post('/positions',input,{emulateJSON:true}).then((response) => {
                this.position.id=response.data.id;
                this.position.categoryId=response.data.categoryId;
                $("#modal-loading").modal('hide');
                toastr.success('SUCCESS', 'Sauvegarde réussie', {timeOut: 5000});
                audio.play();
            },(response) => {
                $("#modal-loading").modal('hide');
                toastr.error('ECHEC', 'Une erreur est survenue',{timeOut: 5000});

            });
            alert('saving');

        },
        prepareSave: function () {
        this._position={
            'id':this.position.id,
            'categoryId':this.position.categoryId,
            'name':this.position.name,
            'position_type_id':this.position.position_type.id,
            'department_id':this.position.department.id,
            'location_id':this.position.location.id,
            'fonction_id':this.position.fonction.id,
            'grade_id': this.position.grade.id,
            'position_id':this.position.position_sup.id
        }
        }
    },

    watch:
    {
        'position.fonction': function (value) {

            this.position.name=value.name;

        }
    }






});