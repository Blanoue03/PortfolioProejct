import {Directive, ElementRef, Input, OnInit} from '@angular/core';
import {AbstractControl} from '@angular/forms';

@Directive({
  selector: '[appDisablebutton]',
  standalone: true
})
export class Disablebutton implements OnInit {
  @Input() appDisablebutton!: AbstractControl;

  constructor(private el: ElementRef) {}

  ngOnInit(): void {
    this.updateButtonState();
    this.appDisablebutton.valueChanges.subscribe(() => {
      this.updateButtonState();
    });
  }

  private updateButtonState(): void {
    const firstNameControl = this.appDisablebutton.get('name');
    const emailControl = this.appDisablebutton.get('email');
    const messageControl = this.appDisablebutton.get('message');
    const isDisabled = !firstNameControl?.value || !emailControl?.value || !messageControl?.value;

    if (isDisabled) {
      this.el.nativeElement.disabled = true;
      this.el.nativeElement.classList.add('custom-disabled'); //Add custom class when disabled so we dont have to change existing styles
    } else {
      this.el.nativeElement.disabled = false;
      this.el.nativeElement.classList.remove('custom-disabled'); // Remove custom class when enabled
    }
  }

}
