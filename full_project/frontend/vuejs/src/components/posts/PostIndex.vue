<template>
  <div v-if="postsStore.isLoaded">
    <ul>
      <li v-for="post in postsStore.posts" :key="post.id">
        {{post.title}}
      </li>
    </ul>
  </div>
  <div v-else>
    Data is not loading

  </div>
  <input type="button" @click="doLoadFromServer">
</template>

<script setup>
  import {usePostStore} from "../../stores/posts/posts";

  const postsStore = usePostStore()
  const doLoadFromServer = () => postsStore.loadFromServer()

</script>

<style scoped>

</style>