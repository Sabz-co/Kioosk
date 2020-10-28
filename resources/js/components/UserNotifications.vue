<template>
<div class="" v-if="notifications.length">

  <div class="dropdown inline-block relative">
    <button class="mt-4 hidden lg:inline-flex items-center p-1 rounded lg:mt-0 text-gray-200 hover:text-white hover:bg-gray-700 mr-3 xl:mr-5  -ml-1">
                    <span class="ml-2 flex items-center justify-center  rounded bg-brown-500 border border-transparent border-brown-500 text-white px-2 text-sm">{{notifications.length}}</span>

                    <i class="fa fa-bullhorn"></i>
    </button>
    <ul class="dropdown-menu absolute hidden text-gray-700 pt-1 z-10 left-0">
        <li v-for="notification in notifications">
            <a class="rounded-t bg-white text-gray-600 hover:text-black border-b border-gray-200 py-2 px-4 block whitespace-no-wrap" :href="notification.data.link" v-text="notification.data.message" @click="markAsRead(notification)"></a>
        </li>
    </ul>
  </div>

</div>
</template>


<script>
    export default {
        data(){
            return { notifications: false}
        },
        created(){
            axios.get("/profiles/" + window.Kioosk.user.id + "/notifications")
                .then(response => this.notifications = response.data);
        },

        methods: {
            markAsRead(notification){
                axios.delete('/profiles/' + window.Kioosk.user.id + '/notifications/' + notification.id)
            }
        }

    }
</script>