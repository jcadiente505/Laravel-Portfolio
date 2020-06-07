import Home from './pages/Home';

export default {
    mode: 'history',

    routes: [
        {
            path: '/',
            component: Home,
            name: 'home'
        },
    ]
}