<template>
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="">
        <div class="card-body">
        <h5 class="card-title"> {{ house.name_house }} </h5>
        <div>{{ house.type }}</div>
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
