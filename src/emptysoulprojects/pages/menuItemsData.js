import Home from "./Home/Home";
import Impressum from "./Impressum/Impressum";

export const menuitems = [
    {
        ItemName: {de: 'Home', en: 'Home'},
        RouteType: 'Link',
        route: '/',
        component: Home
    },
    {
      ItemName: {de: 'Über uns', en: 'About us'},
      RouteType: 'href',
        route: '#aboutUs',
        component: Home
    },
    {
      ItemName: {de: 'Projekte', en: 'Projects'},
      RouteType: 'href',
        route: '#projects',
        component: Home
    },

    {
      ItemName: {de: 'Kontakt', en: 'Contact'},
      RouteType: 'href',
        route: '#contact',
        component: Home
    },

    {
      ItemName: {de: 'Impressum', en: 'Impressum'},
      RouteType: 'Link',
        route: '/impressum',
        component: Impressum
    }
]
