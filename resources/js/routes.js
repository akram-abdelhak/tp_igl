

import Login from './components/Login';
import Signin from './components/Signin';
import Insc from './components/InscriptionPDG';

export default {
    mode: 'history',

    linkActiveClass: 'font-bold',

    routes: [

        {
            path: '/Connexion',
            component: Login
        },

        {
            path: '/InscriptionP',
            component: Insc
        },

        {
            path: '/Inscription',
            component: Signin
        }
    ]
};

