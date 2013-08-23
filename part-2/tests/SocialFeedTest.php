<?php

use Example\SocialFeed;

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
        $s = new SocialFeed;
    }

    /**
     * Decoupled!
     *
     * Our Twitter API integration is now its own class
     * and is de-coupled from our status update retreival
     * class. Woohoo! Both classes can now have a single
     * responsibility and can be tested in complete isolation.
     *
     * Oh no, we still have a problem though, don't we? The
     * social update class is still creating and using an
     * instance of the TwitterFeedReader which cannot reach
     * the Twitter API. Our tests fail.
     *
     * Flip to part three!
     */
    public function testCanReturnAnArrayOfStatusUpdates()
    {
        $s = new SocialFeed();
        $v = $s->getArray();
        $this->assertCount(5, $v);
    }
}
