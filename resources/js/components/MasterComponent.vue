<template>
   <div class="page">
			<div class="page-main">
                 <sidebar></sidebar>
				<div class="app-content main-content">
					<div class="side-app">
                        <navhead></navhead>
                        <router-view></router-view>
					</div>
				</div>
                <footer></footer>
		   </div>
   </div>
 </template>

<script>
import sidebar from './parts/Sidebar.vue'
import navhead from './parts/Header.vue'
import navbar from './parts/Navbar.vue'
import footer from './parts/Footer.vue'
    export default {
        components:{
            sidebar : sidebar,
            navhead: navhead,
            navbar : navbar,
            footwe : footer
        },

        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
