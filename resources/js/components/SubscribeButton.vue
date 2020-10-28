<template>
    <button :class="classes" @click="subscribe">دنبال کردن</button>
</template>

<script>
    export default {
        props: ['active'],

        computed: {
            classes() {
                return ['outline-none focus:outline-none my-2 mx-auto w-full sm:w-5/6 rounded-lg  py-1 px-2 lg:px-6',  this.active ? 'bg-brown-500 border border-transparent hover:text-brown-500 hover:border-brown-500 hover:bg-silver-100 text-white' : 'hover:bg-brown-500 border  text-brown-500 border-brown-500 bg-silver-100 hover:text-white']
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
