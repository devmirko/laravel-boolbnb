<template>
    <div class="card" style="width: 15rem;">
        <img class="card-img-top" :src="house.cover_photo">

        <div class="card-body">
            <br>
        <h5 class="card-title"> {{ house.name_house }} </h5>
        <div>{{ house.type }}</div>
        <router-link :to="{name: 'show', params: {id: house.id} }">
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
