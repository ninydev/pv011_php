import {defineStore} from "pinia";

export  const useJwtStore = defineStore('jwt', {
    state: () => ({
        jwt: null
    }),
    actions: {
        tryLogin(frmData){
            fetch('http://localhost:63342/full_project/backend/serivce_users/test.php', {
                method: 'POST',
                headers: {
                    // 'Content-Type': 'application/json'
                    // 'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: frmData
            })
                .then(res => {
                console.log(res)
                if (res.status === 403) {
                    throw {message: ' Auth '}
                }
                return res.json()
            })
                .then(data => {
                    console.log(data)
                    console.log(typeof (data))
                    this.jwt = data
            })
                .catch(ex => {
                    console.log(ex.message)
                })

        }
    }
})