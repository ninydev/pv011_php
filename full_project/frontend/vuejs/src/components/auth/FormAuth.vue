<template>
  <label>Email: <input v-model="email" ></label><br>
  <label>Password: <input v-model="password" type="password" ></label><br>
  <input type="button" @click="doLogin" value="Login"><br>
</template>

<script setup>
  import {ref} from "vue";
  import {useJwtStore} from "../../stores/auth/jwt";

  const jwtStore = useJwtStore()

  let email = ref()
  let password = ref()

  const doLogin = () => {
    console.log('try login: ' + email.value + ' ' + password.value)

    let frmData = new FormData()
    frmData.append('email', email.value)
    frmData.append('password', password.value)
    jwtStore.tryLogin(frmData)

  }





</script>

<style scoped>

</style>