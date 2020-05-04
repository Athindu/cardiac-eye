import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { IndividualProfilePageComponent } from './individual-profile-page.component';

describe('IndividualProfilePageComponent', () => {
  let component: IndividualProfilePageComponent;
  let fixture: ComponentFixture<IndividualProfilePageComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ IndividualProfilePageComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(IndividualProfilePageComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
