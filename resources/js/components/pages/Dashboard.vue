<template>
  	<div class="page">
			<div class="page-main">

				<!--aside open-->
                <sidebar></sidebar>
							<!--aside closed-->

				<!-- App-Content -->
				<div class="app-content main-content">
					<div class="side-app">

						<!--app header-->
                        <navhead></navhead>

						<!--/app header-->

						<!--Page header-->
                       <navbar></navbar>
						<!--End Page header-->



					</div>
				</div>
				<!-- End app-content-->


				<!--Footer-->
  <footer></footer>
				<!-- End Footer-->
			</div>
		</div>
 </template>

<script>
import sidebar from '../parts/Sidebar.vue'
import navhead from '../parts/Header.vue'
import navbar from '../parts/Navbar.vue'
import footer from '../parts/Footer.vue'
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
