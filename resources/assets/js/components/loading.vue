<template>
    <pulse-loader :loading="loading" :color="color" :size="size"></pulse-loader>
</template>

<script>

import PulseLoader from 'vue-spinner/src/PulseLoader.vue'

export default {

  components: { PulseLoader },

  data () {
    return {
      loading: true,
       color: 'green',
      size: '10px',
    }
  }
}
</script>