<template>
          <div class="mr-3 relative">
            <div>
              <button  @click="isNavbarOpen = !isNavbarOpen" class="flex bg-gray-800 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="navbar-menu" aria-haspopup="true">
                <span class="sr-only">Open navbar menu</span>
                <i class="fa fa-ellipsis-v text-xl" aria-hidden="true"></i>

              </button>
            </div>
            <!--
              Profile dropdown panel, show/hide based on dropdown state.
  
              Entering: "transition ease-out duration-100"
                From: "transform opacity-0 scale-95"
                To: "transform opacity-100 scale-100"
              Leaving: "transition ease-in duration-75"
                From: "transform opacity-100 scale-100"
                To: "transform opacity-0 scale-95"
            -->
            <button v-if="isNavbarOpen" @click="isNavbarOpen = false" tabindex="-1" class="fixed inset-0 w-full h-full cursor-default focus:outline-none"></button>
            <div  v-if="isNavbarOpen" class="z-50 origin-top-right absolute right-0 left-auto sm:right-auto sm:left-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
              <a href="/genres" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">کتب</a>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">ناشران</a>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">نویسندگان</a>
            </div>
          </div>
</template>

<script>
export default {
    data() {
        return {
            isNavbarOpen: false
        }
    },
    created() {
        const handleEscape = (e) => {
            if(e.key === 'Esc' || e.key === 'Escape') {
                this.isNavbarOpen = false
            }
        } 

        document.addEventListener('keydown', handleEscape);

        this.$once('hook:beforeDestroy', () => {
            document.removeEventListener('keydown', handleEscape)
        })
    }
}
</script>