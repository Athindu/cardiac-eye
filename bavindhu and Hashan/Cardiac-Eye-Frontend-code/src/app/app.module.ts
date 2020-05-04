import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppRoutingModule } from './app-routing.module';
import { HttpClientModule } from '@angular/common/http';
import { AppComponent } from './app.component';
import { HomePageComponent } from './home-page/home-page.component';
import { AboutPageComponent } from './about-page/about-page.component';
import { HistoryPageComponent } from './history-page/history-page.component';
import { IndividualProfilePageComponent } from './individual-profile-page/individual-profile-page.component';
import { ProfileComponent } from './profile-page/profile.component';
import { ResultsComponent } from './results-page/results.component';
import { UserHistoryPageComponent } from './user-history-page/user-history-page.component';
import { NavBarComponent } from './nav-bar/nav-bar.component';
import { LoginComponent } from './login/login.component';

@NgModule({
  declarations: [
    AppComponent,
    HomePageComponent,
    AboutPageComponent,
    HistoryPageComponent,
    IndividualProfilePageComponent,
    ProfileComponent,
    ResultsComponent,
    UserHistoryPageComponent,
    NavBarComponent,
    LoginComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    HttpClientModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
