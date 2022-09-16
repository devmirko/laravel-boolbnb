<template>
    <div class="container mt-5">
          <div class="d-flex justify-content-between flex-wrap mb-5">
              <!-- lista info profilo -->
              <ul class="col-12 col-sm-12 col-md-6 col-lg-6 d-flex flex-column justify-content-center gap-2 order-2">
                  <li>
                      <b class="fst-italic">Nome: </b> {{ showHouse.name_house }}
                  </li>
                  <li>
                      <b class="fst-italic">Rooms: </b> {{ showHouse.rooms }}
                  </li>
                  <li>
                      <b class="fst-italic">Beds: </b> {{ showHouse.email }}
                  </li>
                  <li>
                      <b class="fst-italic">Bathrooms: </b> {{ showHouse.address }}
                  </li>
                  <li>
                      <b class="fst-italic">MQ: </b> {{ showHouse.phone }}
                  </li>
                  <li>
                      <b class="fst-italic">address: </b> {{ showHouse.city }}
                  </li>
                  <li>
                      <b class="fst-italic">type: </b> {{ showHouse.type }}
                  </li>

                </ul>

          </div>
      </div>
  </template>

  <script>
  import axios from 'axios';

  export default {
      name: 'PageShow',
      data() {
          return {
              showHouse: []
          }
      },
      created() {
          axios.get('/api/Houses/2')
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
  </style>
