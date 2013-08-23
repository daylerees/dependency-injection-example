<?php

use Example\FeedReaders\FacebookFeedReader;

class FacebookFeedReaderTest extends PHPUnit_Framework_TestCase
{
    /**
     * Make sure we can reate a new FacebookFeedReader!
     */
    public function testFeedReaderCanBeInstantiated()
    {
        $f = new FacebookFeedReader;
    }

    /**
     * Let's make sure we can retreive status updates.
     */
    public function testCanRetrieveFacebookStatusUpdates()
    {
        $f = new FacebookFeedReader;
        $m = $f->getMessages();
        $this->assertCount(3, $m);
        $this->assertEquals('LOOK AT PHOTOS OF MY KIDS', $m[0]);
        $this->assertEquals('HAHA LOOK WHAT MY CAT DID', $m[1]);
        $this->assertEquals('HAI PLZ TO PLAY FARMVILLE?', $m[2]);
    }
}
