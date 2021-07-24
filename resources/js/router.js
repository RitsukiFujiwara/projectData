import Router from 'vue-router'
import AddCatalog from './components/AddCatalogComponent'
import Home from './components/ExampleComponent'

export default new Router({
  mode: 'history',
  routes: [
    {
      path: '/catalog/add',
      name: 'add',
      component: AddCatalog
    },
    {
        path: '/',
        name: 'home',
        component: Home
      },
  ]
});