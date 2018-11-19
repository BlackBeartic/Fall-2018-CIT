<?php

class HomeController extends Controller{





	public function index(){
		$feed = "http://abcnews.go.com/abcnews/gmaheadlines";
		$rss = new RssDisplay($feed);

		$feed_data = $rss->getFeedItems();

		$channel_title = $feed_data->channel->title;

		$this->set('rss_title', $channel_title);
	}

}

?>
