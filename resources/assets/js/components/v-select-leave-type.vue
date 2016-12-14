<template>
    <basic-select :options="options"
                  :selected-option="item"
                  @select="onSelect">
    </basic-select>
</template>

<script>



  import { BasicSelect } from 'vue-search-select'

export default {
    data () {
      return {
        options: [],
        searchText: '', // If value is falsy, reset searchText & searchItem
        item: {
          value: '',
          text: ''
        }
      }
    },
    methods: {
      onSelect (item) {
        this.item = item
      },
      reset () {
        this.item = {}
      },
      selectOption () {

        this.item = this.options[0];

      }
    },
    components: {
      BasicSelect
    },

        watch: {
        item: function (newItem)
        {
        this.$emit('new_item_chosen',newItem);
        }


        },
    mounted: function () {
        this.$http.get('/api/select/leave_types/active').then((response) => {
    // success callback
       this.options=response.data;
  }, (response) => {
    // error callback
  });
    }
  }
</script>