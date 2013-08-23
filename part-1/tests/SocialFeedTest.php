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
     * Bang!
     *
     * Oh dear, our test is failing because the Twitter
     * API is "down".
     *
     * We have a bigger problem though! Our SocialFeed class
     * is responsible for interacting with the Twitter API
     * and formatting/retrieving status updates. Each class
     * should have a SINGLE RESPONSIBILITY. We can't test
     * these classes in isolation because they are too
     * tightly coupled. If one class fails, then so will
     * the other.
     *
     * We can fix this! Switch to part two.
     */
    public function testCanReturnAnArrayOfStatusUpdates()
    {
        $s = new SocialFeed();
        $v = $s->getArray();
        $this->assertCount(5, $v);
    }
}
