<template>
    <div id="container">
        <div class="center titolo">
            <b>{{ showHouse.name_house }}</b>
        </div>
            
            <div class="center">
                <img :src="showHouse.cover_photo" alt="Foto della casa">
            </div>
            <div class="dati mt-5 d-flex justify-content-around">
                <b>CARATTERISTICHE:</b>
                <ul class="col-12, col-sm-12, col-md-6, col-lg-6, d-flex, flex-column, justify-content-center, gap-2, order-2, car">
                    <li class="d-flex">
                        <b class="fst-italic">Rooms: </b> <div> {{ showHouse.rooms }}</div>
                    </li>
                    <li class="d-flex">
                        <b class="fst-italic">Beds: </b> <div> {{ showHouse.beds }}</div>
                    </li>
                    <li class="d-flex">
                        <b class="fst-italic">address: </b> <div> {{ showHouse.address }}</div>
                    </li>
                    <li class="d-flex">
                        <b class="fst-italic">MQ: </b> <div> {{ showHouse.mq }}</div>
                    </li>
                    <li class="d-flex">
                        <b class="fst-italic">type: </b> <div> {{ showHouse.type }}</div>
                    </li>
                </ul>
            </div>
            <div class="center"><b>CONTATTACI</b></div>
            <form action="">
                <div class="center">
                    <div>
                        Inserisci Email:
                    </div>
                    <input class="email" type="text">
                    </input>
                </div>
                <div class="center">
                    <div>
                        Inserisci Testo:
                    </div>
                    <input class="text" type="text">
                    </input>
                </div>
            </form>
             
      </div>
  </template>

  <script>
  import axios from 'axios';
  export default {
      name: 'PageShow',
      data() {
          return {
              showHouse: [],
          }
      },
      props: {
        id: String,
      },
      created() {
          axios.get('/api/houses/' + this.id )
              .then(res =>{
                  if (res.data.success) {
                      this.showHouse = res.data.result
                      console.log(this.showHouse);
                  }
              })
      }
  }
  </script>

  <style lang="scss" scoped>
    .image {
        width: 40%;

        img {
            width: 100%;
        }
    }

    .dati {
        width: 100%;
    }
    .center {
        width: 100%;
        text-align: center;
    }
    .car {
        list-style-type: none;
    }
    .titolo {
        font-size: xx-large;
    }
    .percent30 {
        width: 20%;
    }
    .email {
        width: 80%;
    }
    .text {
        width: 80%;
        height: 80px;
    }
  </style>
