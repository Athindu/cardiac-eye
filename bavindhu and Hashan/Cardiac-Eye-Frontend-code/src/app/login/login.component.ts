import { Component, OnInit, ViewEncapsulation } from '@angular/core';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./css_login/demo.css', './css_login/footer.css', './css_login/style.css', 
  './css_login/animate-custom.css' ],
  encapsulation: ViewEncapsulation.ShadowDom
})
export class LoginComponent implements OnInit {

  constructor() { }

  ngOnInit(): void {
  }

}
