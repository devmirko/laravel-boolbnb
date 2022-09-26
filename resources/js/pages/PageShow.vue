<template>
    <div class="bg-dark">
        <div class="container bg-dark bg-gradient pt-3 text-white">
            <div class="text-center">
                <h2>{{ showHouse.name_house }}</h2>
            </div>


            <div class="d-flex justify-content-start mt-3">
                <div class="image">
                    <img :src="showHouse.cover_photo" alt="Foto della casa">
                </div>


                <div class="mx-5">
                    <div class="caratteristiche">
                        <h5>Cosa Troverai:</h5>
                        <div class="col-12, col-sm-12, col-md-6, col-lg-6, d-flex, flex-column, justify-content-center, gap-2, order-2, car">
                            <li class="d-flex">
                                <b class="fst-italic">STANZE: </b>
                                <div class="mx-3"> {{ showHouse.rooms }}</div>
                            </li>
                            <li class="d-flex">
                                <b class="fst-italic">LETTI: </b>
                                <div class="mx-3"> {{ showHouse.beds }}</div>
                            </li>
                            <li class="d-flex">
                                <b class="fst-italic">INDIRIZZO: </b>
                                <div class="mx-3"> {{ showHouse.address }}</div>
                            </li>
                            <li class="d-flex">
                                <b class="fst-italic">METRI QUADRATI: </b>
                                <div class="mx-3"> {{ showHouse.mq }} Mq</div>
                            </li>
                            <li class="d-flex">
                                <b class="fst-italic">TIPO STRUTTURA: </b>
                                <div class="mx-3"> {{ showHouse.type }}</div>
                            </li>

                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-start align-items-center mt-5 pb-5">
                <div class="row mx-5">
                    <p>Visualizza la struttura sulla mappa</p>
                    <div id="map-div"></div>
                </div>

                <div class="contact">
                    <h1>Contact us</h1>
                    <form @submit.prevent="submitMessage(showHouse.id)" novalidate>
                        <div class="mb-3">
                            <label class="form-label" for="name">Name</label>
                            <input class="form-control" type="text" name="name" id="name" v-model="name">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="email">Email</label>
                            <input class="form-control" type="email" name="email" id="email" v-model="email">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="message">Message</label>
                            <textarea class="form-control" name="message" id="message" cols="30" rows="10" v-model="message"></textarea>
                        </div>

                        <div>
                            <input class="form-check-input" type="checkbox" name="newsletter" id="newsletter" checked>
                            <label class="form-check-label" for="newsletter">Iscrivimi alla newsletter</label>
                        </div>

                        <button type="submit" class="btn btn-primary mt-3">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';
export default {
    name: 'PageShow',
    data() {
        return {
            showHouse: [],
            API_KEY: '20u8gZALO9mr83SwluzAwlAqG0wNedfs',
            name : '',
            email : '',
            message : '',
        }
    },

    methods : {
        submitMessage($id){
            // console.log('funziona');    //se clicco Send mi stampa 'funziona' nella console

            axios.post('/api/messages/', {
                id : $id,
                name : this.name,
                email : this.email,
                message : this.message,
            })
            .then(res => console.log(res.data));
        }
    },

    mounted() {
        let tomTomScript = document.createElement('script')
        tomTomScript.setAttribute('src', 'https://api.tomtom.com/maps-sdk-for-web/cdn/6.x/6.5.0/maps/maps-web.min.js')
        document.head.appendChild(tomTomScript)

        let tomTomCss = document.createElement('link')
        tomTomCss.setAttribute('rel', 'stylesheet')
        tomTomCss.setAttribute('type', 'text/css')
        tomTomCss.setAttribute('href', 'https://api.tomtom.com/maps-sdk-for-web/cdn/6.x/6.5.0/maps/maps.css')
        document.head.appendChild(tomTomCss)

    },
    props: {
        id: String,
    },
    created() {
        axios.get('/api/houses/' + this.id)
            .then(res => {
                if (res.data.success) {
                    this.showHouse = res.data.result
                    var map = tt.map({
                        key: this.API_KEY,
                        container: 'map-div',
                        center: { lng: this.showHouse.longitude, lat: this.showHouse.latitude },
                        zoom: 12
                    });

                    var marker = new tt.Marker()
                        .setLngLat({lng: this.showHouse.longitude, lat: this.showHouse.latitude})
                        .addTo(map);
                    console.log(result)
                }
            })
    }
}
</script>

<style lang="scss" scoped>

    .image {
        width: 50%;
        height: auto;

        img {
            width: 100%;
            height: auto;
        }
    }

    .row {
        width: 50%;

        #map-div {
            height: 500px;
            width: 500px;
        }
    }

    .contact {
        width: 40%;
        height: auto;
        margin-right: 10%;
    }
</style>
