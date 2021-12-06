<template>
    <button
        class="inline-flex items-center justify-center px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md focus:shadow-outline focus:outline-none"
        :class="cls + ' bg-' + clr + '-500 ' + 'hover:bg-' + clr + '-600'"
        type="button"
        @click="opnForm"
    >
        {{ txt }}
    </button>
</template>

<script>
import {mapGetters} from "vuex";

export default {
    props: ['cls', 'clr', 'txt', 'slug', 'priceid', 'cost'],
    methods: {
        opnForm() {
            this.$store.dispatch('TUGGLE_FORM', true);
            this.$store.dispatch('PUSH_VARS', {
                marker: 'PROMO ' + this.slug + ' ' + this.txt,
                priceid: this.priceid,
                cost: this.cost,
            });
            // вызываем событие GA
            gtag('event', 'opnForm', {'event_category': 'getPhone', 'event_label': this.txt});
        },
    },

}


</script>
