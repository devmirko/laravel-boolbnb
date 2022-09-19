<template>
  <div class="container">
      <div class="row ">
        <img class="img-fluid rounded" src="../../../public/img/background/Immagine1.jpeg" alt="">
      </div>
      <h1 class="text-center">Benvenuti in BoolBnB</h1>
      <form action="">
        <input type="search" class="form-control mr-sm-2 rounded-start" v-model="search" aria-label="Search">
        <router-lik :to="{name: 'AdvancedSearch'}">ricerca</router-lik>
      </form>
      <div class="d-flex row justify-content-center">
        <CardHouse v-for="(house, index) in houses" :key="index" :house="house"/>
      </div>
    </div>
</template>

<script>

  import CardHouse from '../components/CardHouse.vue';

  export default {
      name: 'PageHome',
      data() {
      return {
        houses: [],
        search: "",
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
    // .image {
    //     width: 100%;
    //     height: auto;

    //     img {
    //         width: 100%;
    //         height: auto;
    //     }
    // }
</style>
