<template>
    <button :class="classes" @click="subscribe">{{btnname}}</button>
</template>

<script>
    export default {
        props: ['active'],



        computed: {
            classes() {
                return ['btn', this.active ? 'btn-secondary' : 'btn-danger'];
            },
               btnname() {
                return  this.active ? 'Unsubscribe' : 'Subscribe';
            }

        },

        methods: {
            subscribe() {
                axios[
                    (this.active ? 'delete' : 'post')
                ](location.pathname + '/subscriptions');

                this.active = ! this.active;
            }
        }
    }
</script>
