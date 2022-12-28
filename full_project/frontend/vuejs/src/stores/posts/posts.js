import {defineStore} from "pinia";
import {useJwtStore} from "../auth/jwt";
import router from "../../router";

export  const  usePostStore = defineStore('posts', {
    state: () => ({
        isLoaded: false,
        posts: []
    }),
    actions: {
        loadFromServer() {
            this.isLoaded = false

            // Получаю доступ к ключу
            const jwtStore = useJwtStore()
            if (jwtStore.jwt === null) {
                alert('Go Login')
                router.push('/login')
                return
            }
            console.log(jwtStore.jwt.jwt.token)

            fetch('http://localhost:63342/full_project/backend/service_posts/index.php')
                .then(res => res.json())
                .then(data => {
                    this.posts = data
                    this.isLoaded = true
                    localStorage.setItem('posts', JSON.stringify(data))
                })
                .catch(err => {
                    console.log('Err')
                })
        }
    }
})