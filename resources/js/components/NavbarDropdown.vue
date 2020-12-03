<template>
          <div class="mr-3 relative">
            <div>
              <button  @click="isNavbarOpen = !isNavbarOpen" class="bg-gray-800 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="navbar-menu" aria-haspopup="true">
                <span class="sr-only">Open navbar menu</span>
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" stroke="fill-current text-green-600" class="h-6 w-6 " y="0px"
	 viewBox="0 0 512 512" xml:space="preserve">
<g>
	<path class="st0" d="M315.1,452.9c0,32.6-26.5,59.1-59.1,59.1s-59.1-26.5-59.1-59.1s26.5-59.1,59.1-59.1S315.1,420.3,315.1,452.9z
		 M315.1,256c0,32.6-26.5,59.1-59.1,59.1s-59.1-26.5-59.1-59.1s26.5-59.1,59.1-59.1S315.1,223.4,315.1,256z M315.1,59.1
		c0,32.6-26.5,59.1-59.1,59.1s-59.1-26.5-59.1-59.1S223.4,0,256,0S315.1,26.5,315.1,59.1z"/>
</g>
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
            <div  v-if="isNavbarOpen" class="z-50 origin-top-right absolute right-0 left-auto sm:right-auto sm:left-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">کتب</a>
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