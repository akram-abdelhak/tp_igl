

import Login from './components/Connexion';
import Signin from './components/Inscription';
import Insc from './components/InscriptionPDG';
import Layout from './components/Layout';
import Accueil from './components/Accueil';
import logout from './components/Deconnexion';
import Success from './components/Success';
import Absences from './components/Absences';
import Addjustification from './components/Addjustification';
import SuccessAbs from './components/SuccessJustification';
import SuccessIns from './components/SuccessInscription';




export default {
    mode: 'history',

    linkActiveClass: 'font-bold',

    routes: [

        {
            path: '/Connexion',
            name: 'Connexion',
            component: Login
        },

        {
            path: '/Inscription',
            name: 'Inscription',
            component: Signin
        },
        {
            path: '/Deconnexion',
            name: 'Deconnexion',
            component: logout
        },
        {
            path: '/InscrSuccess',
            component: Success
        },
        
        {
            path: '/',
            redirect: 'Connexion',
            component: Layout,
            children: [
                {
                    path: '/Accueil',
                    name: 'Accueil',
                    component: Accueil
                  },

                  {
                    path: '/Absences',
                    name: 'Absences',
                    component: Absences
                  },
                  
                  {
                    path: '/Addjustification',
                    name: 'Addjustification',
                    component: Addjustification
                  },
                  {
                    path: '/SuccessJustification',
                    name: 'SuccessJustification',
                    component: SuccessAbs
                  },

              {
                path: '/InscriptionPDG',
                name: 'IP',
                component: Insc
              },
              {
                path: '/SuccessInscription',
                name: 'SuccessInscription',
                component: SuccessIns
              }
            ]
          }
    ]
};

