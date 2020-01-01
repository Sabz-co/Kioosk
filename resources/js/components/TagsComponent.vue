<template>
  <div>
    <vue-tags-input
    placeholder="افزودن برچسب"
      v-model="tag"
      :class="classes"
      :tags="tags"
      @tags-changed="newTags => tags = newTags"
    />
  </div>
</template>

<script>
import VueTagsInput from '@johmun/vue-tags-input';
export default {
  props: {
      classes: String
  },
  components: {
    VueTagsInput,
  },
  data() {
    return {
      tag: '',
      tags: [],
    };
  },
};
</script>
