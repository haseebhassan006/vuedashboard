import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)
function setComponent(path_file) {
    const route_path = "./components/pages/" + path_file + ".vue";
    return import ("" + route_path);
}

const routes = [{
        path: '/',
        component: () => setComponent("Dashboard"),
        name: "dashboard",
    },
    {
        path: '/categories',
        component: () => setComponent("Category"),
        name: "categories",
    },


]

// 3. Create the router instance and pass the `routes` option
// You can pass in additional options here, but let's
// keep it simple for now.
const router = new VueRouter({
    routes,
    linkActiveClass: "active",
    linkExactActiveClass: "active",
    mode: 'history'

})




export default router;
