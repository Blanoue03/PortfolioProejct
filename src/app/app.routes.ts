import { Routes } from '@angular/router';
import {Aboutme} from './components/aboutme/aboutme';
import {Home} from './components/home/home';
import {Contactme} from './components/contactme/contactme';
import {Viewproject} from './components/viewproject/viewproject';

export const routes: Routes = [
  {path: "", redirectTo: '/home', pathMatch: "full" },
  {path: "home", component: Home},
  {path: "aboutme", component: Aboutme},
  {path: "contact", component: Contactme},
  {path: 'CSS', children: [{path: '**', component:Viewproject}]},
  {path: 'Javascript', children: [{path: '**', component:Viewproject}]},
  {path: 'pdf', children: [{path: '**', component:Viewproject}]}

];
