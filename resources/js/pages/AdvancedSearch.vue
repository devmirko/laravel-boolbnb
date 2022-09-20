<template>
    <div class="container">
        <h1 class="text-center">Benvenuti in BoolBnB</h1>
        <h4>filtra per:</h4>
            <ul>
                <!-- ricerca per citta -->
                <li>
                    <strong>citta:</strong>
                    <form action="">
                       <input type="text" placeholder="Scrivi qui.." name="address">
                       <button>filtra</button>
                    </form>
                </li>
                <!-- ricerca per stanze -->
                <li>
                    <strong>rooms:</strong>
                    <form action="">
                    <input type="text" name="rooms">
                    <button>filtra</button>
                    </form>
                </li>
                <!-- ricerca per letti -->
                <li>
                    <strong>beds:</strong>
                    <form action="">
                    <input type="text" name="beds">
                    <button>filtra</button>
                    </form>
                </li>
                <!-- ricerca per servizi -->
                <li class="list-group-item">
                    <strong>services:</strong>
                        <span>
                            <input class="form-check-input" type="radio" name="services" id="flexRadioDefault1">
                            <label class="form-check-label" for="services">

                            </label>
                        </span>
                </li>
                <!-- km di distanza dalla ricerca -->
                <li class="list-group-item">
                    <strong>distanza:</strong>
                        <span>
                            <input class="form-check-input" type="radio" name="radius" id="flexRadioDefault1">
                            <label class="form-check-label">
                        </label>
                    </span>
                 </li>

            </ul>


          <!-- <input type="search" class="form-control mr-sm-2 rounded-start" v-model="search" aria-label="Search"  @keyup.enter="searchInput"> -->
          <!-- <router-lik :to="{name: 'AdvancedSearch'}">ricerca</router-lik> -->
        <div class="d-flex row justify-content-center">
          <CardHouse v-for="(house, index) in houses" :key="index" :house="house"/>
        </div>
      </div>
  </template>

  <script>

    import CardHouse from '../components/CardHouse.vue';

    export default {
        name: 'AdvancedSearch',
        data() {
        return {
          houses: [],
          services: [],
          search: '',
          distanza: 0,
          rooms: '',
          beds: '',


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
      },
      methods: {
      }
  }


  </script>

  <style lang="scss" scoped>









  </style>
