<template>
    <basic-select :options="options"
                  :selected-option="item"
                  @select="onSelect">
    </basic-select>
</template>

<script>



  import { BasicSelect } from 'vue-search-select'

export default {

    props:['url'],
    data () {
      return {
        options: [],
        searchText: '', // If value is falsy, reset searchText & searchItem
        item: {
          value: '',
          text: ''
        },

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

      },
      getOptions ()
      {
         this.$http.get(this.url).then((response) => {
    // success callback
       this.options=response.data;
  }, (response) => {
    // error callback
  });
      }
    },
    components: {
      BasicSelect
    },

        watch: {
        item: function (newItem)
        {
        this.$emit('new_select',newItem);
        },
         url: function ()
        {
         this.reset();
         this.getOptions();

        }



        },
    mounted: function () {

    if(this.url!=null)

    this.getOptions();


    }
  }
</script>