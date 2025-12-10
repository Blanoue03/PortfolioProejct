import {ChangeDetectionStrategy, Component, signal} from '@angular/core';
import {MatTreeModule} from '@angular/material/tree';
import {MatIconModule} from '@angular/material/icon';
import {MatButtonModule} from '@angular/material/button';
import {Nav} from './components/nav/nav';
import {RouterOutlet} from '@angular/router';




@Component({
  selector: 'app-root',
  imports: [MatTreeModule, MatButtonModule, MatIconModule, Nav, RouterOutlet],
  templateUrl: './app.html',
  styleUrl: './app.css',
  changeDetection: ChangeDetectionStrategy.OnPush
})
export class App {
  protected readonly title = signal('PortfolioProject');

}

