
import Dashboard  from './Pages/SuperAdmin/Dashboard.vue';
    import { createRouter, createWebHistory } from "vue-router";
    const router = createRouter({

        history: createWebHistory('super_admin/dashboard'),
        routes: [{
            path: '/teams',
            component: Dashboard
        },
        // {
        //     path: '/teams',
        //     component: Dashboard
        // }
    ]

        // history: createWebHistory('/super_admin/dashboard'),
        // routes: [{ path: '/test', component: Dashboard }],
      })
      
    
    
    export default router;