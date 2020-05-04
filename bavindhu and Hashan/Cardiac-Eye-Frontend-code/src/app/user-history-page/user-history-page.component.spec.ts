import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { UserHistoryPageComponent } from './user-history-page.component';

describe('UserHistoryPageComponent', () => {
  let component: UserHistoryPageComponent;
  let fixture: ComponentFixture<UserHistoryPageComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ UserHistoryPageComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(UserHistoryPageComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
