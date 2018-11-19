<?php

class WeatherController extends Controller{



	public function index() {
		$this->set(result, false);
	}

	public function getResults() {
		$xml = simplexml_load_file("http://api.worldweatheronline.com/premium/v1/weather.ashx?key=26c9ca054c7248a0a81200436181811&q=".$_POST['zip']."&format=xml&num_of_days=2");
		$this->set(result, true);
		$this->set(weather, $xml);
	}

}

?>
