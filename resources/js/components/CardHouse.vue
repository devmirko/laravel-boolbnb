<template>
    <div class="card col-3 m-2">
        <img class="card-img-top" :src="house.cover_photo">

        <div class="card-body text-center">
            <h5 class="card-title"> {{ house.name_house }} </h5>
            <p>{{ house.type }}</p>
            <p>{{ house.address }}</p>
            <router-link :to="{name: 'show', params: {id: house.id} }" class="nav-link active bg-dark text-white">
            Read
            </router-link>
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
</style>
