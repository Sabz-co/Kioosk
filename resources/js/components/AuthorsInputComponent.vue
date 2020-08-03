<template>
<div>

  <div>
    <vue-tags-input
      v-model="author"
      :tags="tags"
      :autocomplete-items="autocompleteItems"
      :add-only-from-autocomplete="false"
      @tags-changed="update"
    />
  </div>


<div v-for="product in tags" :key="product.id" class="flex form-group">

  <div class="flex p-title">
    <label :for="product.title">{{ product.title }}</label>
    <small>{{ product.price }}$</small>
  </div>

  <div class="flex p-input">
    <input class="input" type="number" placeholder="1" :name="product.title" v-model="quantity[product.id]">
  </div>

  <div class="flex p-total">
  </div>

</div>
</div>

</template>

<script>
import VueTagsInput from '@johmun/vue-tags-input';
import axios from 'axios';

export default {
  components: {
    VueTagsInput,
  },
  data() {
    return {
      author: '',
      tags: [],
      autocompleteItems: [],
      debounce: null,
    };
  },
  watch: {
    'author': 'initItems',
  },
  methods: {
    update(newTags) {
      this.autocompleteItems = [];
      this.tags = newTags;
    },
    initItems() {
      if (this.author.length < 2) return;
      // const url = `https://itunes.apple.com/search?term=
      //   ${this.author}&entity=allArtist&attribute=allArtistTerm&limit=6`;
      const url ='/author/search/' + this.author; 

      clearTimeout(this.debounce);
      this.debounce = setTimeout(() => {
        axios.get(url).then(response => {
          this.autocompleteItems = response.data.suggestions.map(a => {
            return { text: a.full_name };
          });
        }).catch(() => console.warn('Oh. Something went wrong'));
      }, 600);
    },
  },
};
</script>