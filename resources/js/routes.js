

import Login from './components/Connexion';
import Signin from './components/Inscription';
import Insc from './components/InscriptionPDG';
import Layout from './components/Layout';
import Accueil from './components/Accueil';


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

