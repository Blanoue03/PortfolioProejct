import {Component, OnInit, } from '@angular/core';
import {ActivatedRoute, Router} from '@angular/router';
import {DomSanitizer, SafeResourceUrl} from '@angular/platform-browser';

@Component({
  selector: 'app-viewproject',
  standalone: true,
  imports: [],
  templateUrl: './viewproject.html',
  styleUrl: './viewproject.css',
})
export class Viewproject implements OnInit{

  subpath = "/projects";
  path! : SafeResourceUrl

  constructor(private route: ActivatedRoute, private router: Router, private sanitizer: DomSanitizer) {

  }
  ngOnInit() {
    const url =  this.subpath +this.router.url
    this.path = this.sanitizer.bypassSecurityTrustResourceUrl(url)
    console.log(this.path)
  }


}
