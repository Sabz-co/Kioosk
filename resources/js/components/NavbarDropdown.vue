<template>
          <div class="relative">
            <div>
              <button  @click="isNavbarOpen = !isNavbarOpen" class="flex rounded-full bg-white text-gray-700 hover:text-gray-900 focus:outline-none" id="navbar-menu" aria-haspopup="true">
                <span class="sr-only">Open navbar menu</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                </svg>
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
            <div  v-if="isNavbarOpen" class="z-50 origin-top-right absolute right-0 left-auto sm:right-auto sm:left-0 mt-2 w-48 rounded-md shadow-2xl py-1 bg-white ring-black ring-opacity-5" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
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