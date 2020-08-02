<template>
<div>
    <div class="relative">
        <button @click="isOpen = !isOpen" class="relative z-10 block mt-4 items-center justify-center rounded-full lg:mt-0 text-white h-8 w-8 hover:text-white hover:bg-gray-700 mr-3 xl:mr-5 border-2 border-white">
            <img src="/images/avatar.jpg" alt="" class=" rounded-full">
        </button>
        <button v-if="isOpen" @click="isOpen = false" tabindex="-1" class="fixed inset-0 w-full h-full cursor-default"></button>
        <div v-if="isOpen" class="absolute mt-2 py-2 w-48 bg-white rounded-lg shadow-lg left-0">
            <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-500 hover:text-white">تنظیمات پروفایل</a>
            <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-500 hover:text-white">پشتیبانی</a>
            <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-500 hover:text-white">خروج</a>
        </div>
    </div>

    <div class="relative">

        <button v-if="isOpen" @click="isOpen = false" tabindex="-1" class="fixed inset-0 w-full h-full cursor-default"></button>
        <div v-if="isOpen" class="absolute mt-2 py-2 w-48 bg-white rounded-lg shadow-lg left-0">
            <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-500 hover:text-white">تنظیمات پروفایل</a>
            <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-500 hover:text-white">پشتیبانی</a>
            <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-500 hover:text-white">خروج</a>
        </div>
    </div>
</div>

</template>

<script>
export default {
    data() {
        return {
            isOpen: false
        }
    },
    created() {
        const handleEscape = (e) => {
            if(e.key === 'Esc' || e.key === 'Escape') {
                this.isOpen = false
            }
        } 

        document.addEventListener('keydown', handleEscape);

        this.$once('hook:beforeDestroy', () => {
            document.removeEventListener('keydown', handleEscape)
        })
    }
}
</script>