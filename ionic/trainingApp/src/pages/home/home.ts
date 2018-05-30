import { Component } from '@angular/core';
import { NavController } from 'ionic-angular';
import { Observable } from 'rxjs/Observable';
import { HttpClient } from '@angular/common/http';
import 'rxjs/add/operator/map';

export interface Training {
  id: number;
  title: string;
  banner: string;
}

@Component({
  selector: 'page-home',
  templateUrl: 'home.html'
})
export class HomePage {
  trainings: Observable<Training[]>;

  constructor(public navCtrl: NavController, public httpClient: HttpClient) {
    this.trainings = this.httpClient.get<Training[]>('http://localhost:8000/api/training')
    this.trainings
    .subscribe(data => {
      console.log('my data: ', data);
    })
  }

}
