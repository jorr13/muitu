<template>
    <nav class="pagination">
        <span class="page-stats">{{pagination.from}} - {{pagination.to}} de {{pagination.total}}</span>
        <a v-if="pagination.prevPage" @click="$emit('prev')" class="button is-small pagination-previous">
            Anterior
        </a>
        <a class="button is-small pagination-previous" v-else disabled>
            Anterior
        </a>

        <a v-if="pagination.nextPage" @click="$emit('next')" class="button is-small pagination-next">
            Siguiente
        </a>
        <a class="button is-small pagination-next" v-else disabled>
            Siguiente
        </a>
    </nav>
</template>

<script>
    export default {
        props: ['pagination'],
    }
</script>