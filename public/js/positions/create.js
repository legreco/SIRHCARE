

$("#location").select2({
    placeholder: "Région du poste",
    allowClear: true,
    ajax: {
        dataType: 'json',
        url: appUrl+'api/select2/locations',
        data: function(params) {
            return {
                term: params.term
            }
        },
        processResults: function (data, page) {
            return {
                results: data
            };
        }
    }
});


$("#department").select2({
    placeholder: "Choisir le département",
    allowClear: true,
    ajax: {
        dataType: 'json',
        url: appUrl+'api/select2/departments',
        data: function(params) {
            return {
                term: params.term
            }
        },
        processResults: function (data, page) {
            return {
                results: data
            };
        }
    }
});


$("#position_status").select2({
    placeholder: "Choisir le statut de la position",
    allowClear: true,
    ajax: {
        dataType: 'json',
        url: appUrl+'api/select2/position_statuses',
        data: function(params) {
            return {
                term: params.term
            }
        },
        processResults: function (data, page) {
            return {
                results: data
            };
        }
    }
});