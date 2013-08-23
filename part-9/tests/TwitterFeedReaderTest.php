<?php

use Example\FeedReaders\TwitterFeedReader;

class TwitterFeedReaderTest extends PHPUnit_Framework_TestCase
{
    /**
     * Since our TwitterFeedReader class is decoupled
     * from our status update retreival class we can
     * now test it in isolation. However, our class
     * doesn't actually connect to the Twitter API so
     * here are some dummy tests. Use your imagination
     * folks!
     */
    public function testFeedReaderCanBeInstantiated()
    {
        $s = new TwitterFeedReader;
    }

    /**
     * Dummy test.
     */
    public function testSomethingToDoWithRetreivalFromApi()
    {
        $this->assertTrue(true);
    }

    /**
     * Dummy test.
     */
    public function testSomethingElseToDoWithRetreivalFromApi()
    {
        $this->assertTrue(true);
    }
}
