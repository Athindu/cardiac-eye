import { LoginComponent } from "./login/login.component";
import { ResultsComponent } from "./results-page/results.component";
import { UserHistoryPageComponent } from "./user-history-page/user-history-page.component";
import { ProfileComponent } from "./profile-page/profile.component";
import { HistoryPageComponent } from "./history-page/history-page.component";
import { AboutPageComponent } from "./about-page/about-page.component";
import { HomePageComponent } from './home-page/home-page.component';
import { NgModule, Component } from "@angular/core";
import { Routes, RouterModule } from '@angular/router';
import { IndividualProfilePageComponent } from './individual-profile-page/individual-profile-page.component';


const routes: Routes = [
  {path:'', component: HomePageComponent},
  {path:'about', component: AboutPageComponent},
  {path:'history', component: HistoryPageComponent},
  {path:'individual_profile', component: IndividualProfilePageComponent},
  {path:'profile', component: ProfileComponent},
  {path:'results', component: ResultsComponent},
  {path:'user_history', component: UserHistoryPageComponent},
  {path:'login', component: LoginComponent},
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
