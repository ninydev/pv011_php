import {defineStore} from "pinia";

export  const  usePostStore = defineStore('posts', {
    state: () => ({
        isLoaded: false,
        posts: []
    }),
    actions: {
        loadFromServer() {
            this.isLoaded = false
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