<template>
    <div class="card col-3 m-2">
        <div class="image">
            <img class="card-img-top" :src="house.cover_photo">
        </div>

        <div class="card-body bg-gradient text-dark sfondo">
            <h5 class="card-title text-center"> {{ house.name_house }} </h5>
            <!-- <ul>
                <li>{{ house.type }}</li>
                <li>{{ house.address }}</li>
            </ul> -->
            <div class="read text-center mt-4">
                <router-link :to="{name: 'show', params: {id: house.id} }" class="nav-link active bg-white">
                <p>Read</p>
                </router-link>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'CardHouse',
    props: {
        house: Object,
    }
}
</script>

<style lang="scss" scoped>

    .image {
        width: 100%;
        height: 200px;

        img {
            width: 100%;
            height: 100%;
        }
    }
    .sfondo {
        background-color: rgb(192, 178, 175);

        h5 {
            font-size: 15px;
        }
    }
    .read {
        width: 20%;
        margin: 0 auto;

        p {
            font-size: 12px;
        }
    }
</style>
