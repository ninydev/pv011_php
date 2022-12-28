<template>
  <label>Email: <input v-model="email" ></label><br>
  <label>Password: <input v-model="password" type="password" ></label><br>
  <input type="button" @click="doLogin" value="Login"><br>
</template>

<script setup>
  import {ref} from "vue";

  let email = ref()
  let password = ref()

  const doLogin = () => {
    console.log('try login: ' + email.value + ' ' + password.value)

    let frmData = new FormData()
    frmData.append('email', email.value)
    frmData.append('password', password.value)

    fetch('http://localhost:63342/full_project/backend/serivce_users/test.php', {
      method: 'POST',
      headers: {
        // 'Content-Type': 'application/json'
        // 'Content-Type': 'application/x-www-form-urlencoded',
      },
      body: frmData
    }).then(res => {
      console.log(res)
      if (res.status === 403) {
        throw {message: ' Auth '}
      }
      return res.json()
    }).then(data => {
      console.log(data)
    })
        .catch(ex => {
          console.log(ex.message)
        })

  }

</script>

<style scoped>

</style>