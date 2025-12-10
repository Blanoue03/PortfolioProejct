import {Component, OnInit} from '@angular/core';
import {FormBuilder, FormGroup, ReactiveFormsModule, Validators} from '@angular/forms';
import {ActivatedRoute, Router} from '@angular/router';
import {Disablebutton} from '../../directives/disablebutton';

@Component({
  selector: 'app-contactme',
  imports: [
    ReactiveFormsModule,
    Disablebutton,

  ],
  templateUrl: './contactme.html',
  styleUrl: './contactme.css',
})
export class Contactme implements  OnInit{
  emailForm : FormGroup

  constructor(private fb : FormBuilder, private route : ActivatedRoute, private router : Router)
  {
    this.emailForm = this.fb.group({
      name: ['', Validators.required],
      email: ['', Validators.required],
      message: ['', Validators.required]

    });
  }
  ngOnInit() {
  }

  onSubmit(): void
  {

  }

}
