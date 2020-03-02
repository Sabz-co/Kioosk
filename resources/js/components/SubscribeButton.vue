<template>
    <button :class="classes" @click="subscribe"></button>
</template>

<script>
    export default {
        props: ['active'],

        computed: {
            classes() {
                return ['outline-none focus:outline-none my-2 mx-auto w-full sm:w-5/6 rounded-lg  py-1 px-2 lg:px-6',  this.active ? 'bg-brown border border-transparent hover:text-brown hover:border-brown hover:bg-silver-100 text-white' : 'hover:bg-brown border  text-brown border-brown bg-silver-100 hover:text-white']
            }
            
        },
        data(){
            return {
                isSubscribed: this.active ? 'لغو ' : 'مشترک شدن'
            }
        },

        mounted() {
            console.log('Component mounted.')
        },
        methods: {
            subscribe(){

                axios[(this.active ? 'delete' : 'post')](location.pathname + '/subscribe')

                this.active = ! this.active;

                console.log(location.pathname + '/subscribe')
            }
        }
    }
</script>
