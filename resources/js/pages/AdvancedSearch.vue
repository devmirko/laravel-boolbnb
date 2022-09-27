<template>
    <div class="bg-dark">
        <div class="container">
            <h1 class="text-center">Benvenuti in BoolBnB</h1>
            <h4>Filtra per:</h4>
                <ul >
                    <!-- ricerca per citta -->
                    <li>
                        <SearchAdvancedBad :is-in-edit-mode='true' @coordinates="saveCoordinates" @edit="setEdit"></SearchAdvancedBad>
                    </li>
                    <li>
                        <!-- <FindAddress/> -->
                        <p>Distanza max dall'indirizzo indicato:</p>
                        <input class="" type="text" v-model="radius">
                        <label class="" for="distance">Km </label><br><br>

                    </li>
                <!-- ricerca per stanze -->
                <li>
                    <span>Seleziona le stanze :</span>
                    <select v-model="rooms">
                        <option disabled value="0">Seleziona le stanze</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                    </select><br><br>
                </li>
                <!-- ricerca per letti -->
                <li>
                    <span>Seleziona gli ospiti :</span>
                    <select v-model="beds">
                        <option disabled value="0">Seleziona gli ospiti</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                    </select><br><br>
                </li>
                <!-- ricerca per servizi -->
                <li class="list-group-item">
                    <span class="my_select">Servizi inclusi:</span><br>
                <div id='check'>
                    <fieldset :disabled="setCheckboxes">
                       <label class='check-item'>
                            <input type="checkbox" value="1" v-model="checkedServices" @change="onChange">
                            <span>Wifi</span>
                        </label>

                        <label class='check-item'>
                            <input type="checkbox" value="2" v-model="checkedServices" @change="onChange">
                            <span>Cucina</span>
                        </label>

                        <label class='check-item'>
                            <input type="checkbox" value="3" v-model="checkedServices" @change="onChange">
                            <span>Lavatrice</span>
                        </label>

                        <label class='check-item'>
                            <input type="checkbox" value="4" v-model="checkedServices" @change="onChange">
                            <span>Asciugatrice</span>
                        </label>

                        <label class='check-item'>
                            <input type="checkbox" value="5" v-model="checkedServices" @change="onChange">
                            <span>Aria Condizionata</span>
                        </label>

                        <label class='check-item'>
                            <input type="checkbox" value="6" v-model="checkedServices" @change="onChange">
                            <span>Riscaldamento</span>
                        </label>

                        <label class='check-item'>
                            <input type="checkbox" value="7" v-model="checkedServices" @change="onChange">
                            <span>TV</span>
                        </label>

                        <label class='check-item'>
                            <input type="checkbox" value="8" v-model="checkedServices" @change="onChange">
                            <span>Spazio di lavoro dedicato</span>
                        </label>

                        <label class='check-item'>
                            <input type="checkbox" value="9" v-model="checkedServices" @change="onChange">
                            <span>Asciugacapelli</span>
                        </label>

                        <label class='check-item'>
                            <input type="checkbox" value="10" v-model="checkedServices" @change="onChange">
                            <span>Ferro da stiro</span>
                        </label>
                        <label class='check-item'>
                            <input type="checkbox" value="11" v-model="checkedServices" @change="onChange">
                            <span>Piscina</span>
                        </label>

                        <label class='check-item'>
                            <input type="checkbox" value="12" v-model="checkedServices" @change="onChange">
                            <span>Idromassaggio</span>
                        </label>

                        <label class='check-item'>
                            <input type="checkbox" value="13" v-model="checkedServices" @change="onChange">
                            <span>Parcheggio Gratuito</span>
                        </label>

                        <label class='check-item'>
                            <input type="checkbox" value="14" v-model="checkedServices"  @change="onChange">
                            <span>Postazione di ricarica per veicoli elettrici</span>
                        </label>

                        <label class='check-item'>
                            <input type="checkbox" value="15" v-model="checkedServices" @change="onChange">
                            <span>Culla</span>
                        </label>

                        <label class='check-item'>
                            <input type="checkbox" value="16" v-model="checkedServices" @change="onChange">
                            <span>Palestra</span>
                        </label>

                        <label class='check-item'>
                            <input type="checkbox" value="17" v-model="checkedServices" @change="onChange">
                            <span>Griglia per barbecue</span>
                        </label>

                        <label class='check-item'>
                            <input type="checkbox" value="18" v-model="checkedServices" @change="onChange">
                            <span>Colazione</span>
                        </label>

                        <label class='check-item'>
                            <input type="checkbox" value="19" v-model="checkedServices" @change="onChange">
                            <span>Camino</span>
                        </label>

                        <label class='check-item'>
                            <input type="checkbox" value="20" v-model="checkedServices" @change="onChange">
                            <span>Permesso Fumatori</span>
                        </label>

                        <label class='check-item'>
                            <input type="checkbox" value="21" v-model="checkedServices" @change="onChange">
                            <span>Lungo la spiaggia</span>
                        </label>

                        <label class='check-item'>
                            <input type="checkbox" value="22" v-model="checkedServices" @change="onChange">
                            <span>Lungo la riva</span>
                        </label>

                        <label class='check-item'>
                            <input type="checkbox" value="23" v-model="checkedServices" @change="onChange">
                            <span>Allarme antincendio</span>
                        </label>
                    </fieldset>
                    <div id="my_btn">
                        <button @click="onClick" :disabled="setCheckboxes"> Cerca </button>
                    </div>

                </div>

                    </li>
                </ul>


            <!-- <input type="search" class="form-control mr-sm-2 rounded-start" v-model="search" aria-label="Search"  @keyup.enter="searchInput"> -->
            <!-- <router-lik :to="{name: 'AdvancedSearch'}">ricerca</router-lik> -->
            <div class="d-flex row justify-content-center">
            <CardHouse v-for="(house, index) in houses" :key="index" :house="house"/>
            </div>
        </div>
    </div>
  </template>

  <script>
    import CardHouse from '../components/CardHouse.vue';
    import SearchAdvancedBad from '../components/SearchAdvancedBad.vue';
    export default {
        name: 'AdvancedSearch',
        data() {
        return {
          houses: [],
          checkedServices: [],
          search: false,
          radius: 20,
          rooms: 0,
          beds: 0,
          address_lat: 0,
          address_lon: 0,
          noHouses: "",
          checkboxes: false,
        }
      },
      components: {
          CardHouse,
          SearchAdvancedBad
      },

      computed: {
        setCheckboxes() {
            return !this.checkboxes;
        }
      },
      methods: {
        onChange() {
            if (this.search) {
                this.houses= [];
                this.search = true;
                this.getData();
            }
        },
        onClick() {
            this.getData();
            this.houses= [];
            this.search = true;
        },
        saveCoordinates(lat, lon) {
            this.address_lat = lat;
            this.address_lon = lon;
            this.checkboxes = true;
        },
        setEdit() {
            this.checkboxes = false;
            this.search = false;
            this.checkedServices = [];
            this.beds = 0;
            this.rooms = 0;
        },
        getData() {
            axios.get('/api/search', {
                    params: {
                        latitude: this.address_lat,
                        longitude: this.address_lon,
                        radius: this.radius,
                        rooms: this.rooms,
                        beds: this.beds,
                        services: this.checkedServices
                    }
                }).then(res => {
              if (res.data.success) {
                this.houses = res.data.result;
                console.log(this.houses);
              }
            })
            .catch(function(error) {
                    console.log(error);
            })
         }
      }
  }
  </script>

  <style lang="scss" scoped>

    .container {
        color: white;
    }

    ul {
        color: white;

    }
    li {
        margin: 2%;
        list-style: none;
    }

    @media only screen and (min-width: 800px) {
        ul {
            // display: flex;
        }

    }
    .list-group-item {
        color: black;
        margin-bottom: 100px;
    }

    #check {
        background-color: white;
        padding: 20px;
        border-radius: 7px;
    }

    .my_select {
        color: white;
    }



  </style>
