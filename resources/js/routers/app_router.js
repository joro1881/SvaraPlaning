import Router from 'vue-router';

const routes = [
    {
        path: '/example/example',
        component: require('../components/ExampleComponent').default,
        name: 'example'
    },
];

export default new Router({
    mode: 'history',
    routes: routes,
    base: appLocale
});
