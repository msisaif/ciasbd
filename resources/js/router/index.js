import {createRouter, createWebHistory} from 'vue-router';
import publicRoutes from "./public";
import clientLayout from "../layouts/client/App";


const routes = [
  {
    path: '/',
    component: clientLayout,
    children: publicRoutes,
  },
]

const router = createRouter({
  history: createWebHistory(),
  routes,
})

export default router;
