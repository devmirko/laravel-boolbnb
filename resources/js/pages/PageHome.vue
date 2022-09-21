<template>
  <div>
      <div class="image">
        <div class="margin-top">
            <h1 class="text-center text-white bold">Benvenuti in BoolBnB</h1>
        </div>
        <div class="margin">
            <input type="search" class="form-control mr-sm-2 rounded-start search" v-model="search" aria-label="Search"  @keyup.enter="searchInput" placeholder="Ricerca...">
            <router-lik :to="{name: 'AdvancedSearch'}" class="text-white mt-3"></router-lik>
        </div>
      </div>
      <div class="d-flex justify-content-center flex-wrap pt-3 pb-3 bg-dark">
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
        search: '',
      }
    },
    components: {
        CardHouse,

    },
    watch: {
        search(after, before) {
            this.searchInput();
        }
    },
    created() {
      axios.get('/api/houses')
        .then(res => {
            if (res.data.success) {
              this.houses = res.data.result;
              console.log(this.houses);
            }
          })
    },
    methods: {
        searchInput() {
            if (this.search != ''){
                axios.get('/api/city', {params:{ search: this.search}})
            .then(res => {
            if (res.data.success) {
              this.houses = res.data.result;
              console.log(this.houses);
            }
          });
          }
        }
    }
}


</script>

<style lang="scss" scoped>

    .bold {
        font-weight: bold;
        font-size: 60px;
    }
    .image {
        height: 500px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: center;
        background-image: url('../../../public/img/background/Immagine4.jpg');
        background-position: center center;
        background-size: cover;


        .margin-top {
            margin-top: 80px;
        }

        .margin {
            margin-bottom: 120px;
        }

        .search {
            width: 500px;
            border: 1px solid black;
        }
    }
</style>
