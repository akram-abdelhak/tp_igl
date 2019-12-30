

import Login from './components/Connexion';
import Signin from './components/Inscription';
import Insc from './components/InscriptionPDG';
import Layout from './components/Layout';
import Accueil from './components/Accueil';
import logout from './components/Deconnexion';
import Success from './components/Success';


export default {
    mode: 'history',

    linkActiveClass: 'font-bold',

    routes: [

        {
            path: '/Connexion',
            component: Login
        },

        {
            path: '/Inscription',
            component: Signin
        },
        {
            path: '/Deconnexion',
            component: logout
        },
        {
            path: '/InscrSuccess',
            component: Success
        },
        
        {
            path: '/',
            redirect: 'Accueil',
            component: Layout,
            children: [
                {
                    path: '/Accueil',
                    name: 'Accueil',
                    component: Accueil
                  },

              {
                path: '/InscriptionPDG',
                name: 'IP',
                component: Insc
              }
            ]
          }
    ]
};

