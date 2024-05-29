import { createRouter, createWebHistory } from 'vue-router';

const router = createRouter({
  history: createWebHistory(),
  routes: [
    {
      path: '/home',
      alias: '/',
      component: () => import('../views/Home.vue'),
    },
    {
      path: '/friends',
      //alias: '/',
      component: () => import('../components/AllFriends.vue'),
    },
    {
      path: '/tasks',
      //alias: '/',
      component: () => import('../components/TaskList.vue'),
    },
    {
      path: '/:patchMatch(.*)',
      name: 'Not Found',
      //alias: '/',
      component: () => import('../views/NotFound.vue'),
    },
    {
      path: '/pokeapi',
      name: 'Api Pokemon',
      //alias: '/',
      component: () => import('../views/PokeApi.vue'),
    },
    {
      path: '/meteo',
      name: 'Meteo',
      //alias: '/',
      component: () => import('../views/Meteo.vue'),
    },
    {
      path: '/correc',
      name: 'Correction',
      //alias: '/',
      component: () => import('../views/Correction.vue'),
    },
  ],
});

export default router;
