import { Component } from '@angular/core';
import {RouterLink, RouterLinkActive} from '@angular/router';

@Component({
  selector: 'app-nav',
  imports: [
    RouterLink,
    RouterLinkActive
  ],
  templateUrl: './nav.html',
  styleUrl: './nav.css',
})
export class Nav {

  dropDown(el : Event)
  {
    let target = el.target as HTMLElement
    //let parent = target.parentElement as HTMLElement;
    let section = target.nextElementSibling as HTMLElement
    let secDisplay = getComputedStyle(section).display;




    if(section != null && section.tagName.toLowerCase() == "section" && secDisplay == "none" ) {
      console.log("showing because display = " + section.style.display )
      section.style.display = "block";

    }else if (section != null && section.tagName.toLowerCase() == "section" && secDisplay == "block")
    {
      console.log("hiding")
      section.style.display = "none";
    }

  }

}
