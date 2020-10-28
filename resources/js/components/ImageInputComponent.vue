<template>
  <div
    class="base-image-input flex w-full sm:h-24 md:h-40 lg:h-56 py-32 md:py-40 xl:py-56 items-center justify-center rounded-lg bg-gray-300"
    :style="{ 'background-image': `url(${imageData})` }"
    @click="chooseImage"
  >
    <span
      v-if="!imageData"
      class="placeholder"
    >
                <label class="w-4/5 bg-white flex flex-row p-2 items-center text-brown-500 rounded-lg shadow-lg uppercase border border-brown-500 cursor-pointer hover:bg-brown-500 hover:text-white">
                    <svg class="w-8 h-8 ml-2 " fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                    </svg>
                    <span class=" text-base leading-normal">عکس جلد کتاب را انتخاب کنید</span>
                    <input type='file' class="hidden" />
                </label>    </span>
    <input
      class="file-input"
      ref="fileInput"
      type="file"
      @input="onSelectFile"
    >
  </div>
</template>
<style scoped>
.base-image-input {
  display: block;
  height: 500px;
  cursor: pointer;
  background-size: cover;
  background-position: center center;
}
.placeholder {
  width: 100%;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  color: #333;
  font-size: 18px;
  font-family: Helvetica;
}

.file-input {
  display: none;
}
</style>
<script>
export default {
  data () {
    return {
      imageData: ''
    }
  },
  methods: {
    chooseImage () {
        this.$refs.fileInput.click()
    },
    onSelectFile () {
        const input = this.$refs.fileInput
        const files = input.files
        if (files && files[0]) {
            const reader = new FileReader
            reader.onload = e => {
            this.imageData = e.target.result
            }
            reader.readAsDataURL(files[0])
            this.$emit('input', files[0])
        }
    }
  }
}
</script>
