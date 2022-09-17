<template>
    <div>
      <h1 class="text-center">Benvenuti in BoolBnB</h1>
      <div class="image">
        <img src="../../../public/img/background/Immagine1.jpeg" alt="">
      </div>
      <div class="d-flex justify-content-center">
        <CardHouse v-for="(house, index) in houses" :key="index" :house="house"/>
      </div>
    </div>
</template>

<script>

import CardHouse from '../components/CardHouse.vue'
  export default {
      name: 'PageHome',
      data() {
      return {
        houses: [],
      }
    },
    components: {
        CardHouse,
    },
    created() {
      axios.get('/api/houses')
        .then(res => {
            if (res.data.success) {
              this.houses = res.data.result;
              console.log(this.houses);
            }
          })
    }

  }
</script>

<style lang="scss" scoped>
    .image {
        width: 100%;
        height: auto;

        img {
            width: 100%;
            height: auto;
        }
    }
</style>
