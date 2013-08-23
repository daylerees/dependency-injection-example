<?php

use Example\SocialFeed;
use Example\TwitterFeedReader;

class SocialFeedTest extends PHPUnit_Framework_TestCase
{
    /**
     * Will it make?
     *
     * First let's try to instantiate to the SocialFeed
     * class before we attempt to use it.
     */
    public function testSocialFeedCanBeInstantiated()
    {
        $t = new TwitterFeedReader;
        $s = new SocialFeed($t);
    }

    /**
     * Injecting!
     *
     * We can now inject our own instance of a TwitterFeedReader
     * class into our SocialFeed from the test. The test will still
     * fail, but we are a step closer.
     *
     * Switch to part four so that we can finally this test to
     * pass.
     */
    public function testCanReturnAnArrayOfStatusUpdates()
    {
        $t = new TwitterFeedReader;
        $s = new SocialFeed($t);
        $v = $s->getArray();
        $this->assertCount(5, $v);
    }
}
