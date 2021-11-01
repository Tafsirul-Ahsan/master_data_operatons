import Alldata from './components/Alldata.vue';
import CreateData from './components/CreateData.vue';
import EditData from './components/EditData.vue';
 
export const routes = [
    {
        name: 'home',
        path: '/',
        component: Alldata
    },
    {
        name: 'create',
        path: '/create',
        component: CreateData
    },
    {
        name: 'edit',
        path: '/edit/:id',
        component: EditData
    }
];