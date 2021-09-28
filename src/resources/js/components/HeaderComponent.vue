 <template>
     <div class="container-fluid bg-dark mb-3">
         <div class="container">
             <nav class="navbar navbar-dark">
                 <span class="navbar-brand mb-0 h1">Vue Laravel SPA</span>
                 <div>
                    <router-link v-bind:to="{name: 'task.list'}">
                        <button class="btn btn-success">List</button>
                    </router-link>
                    <router-link v-bind:to="{name: 'task.create'}">
                        <button class="btn btn-success">ADD</button>
                    </router-link>
                    <button class="btn btn-danger" v-on:click="openWindow">Nuxt(SSR)</button>
                 </div>
             </nav>
         </div>
     </div>
 </template>

 <script>
     export default {
        methods: {
            openWindow: function() {
            const url = "http://localhost:90/ssr"
            window.open(url, '_blank', 'width=1024,height=768,scrollbars=yes,resizable=yes')
            }
        }
     }
 </script>
