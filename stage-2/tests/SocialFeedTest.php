<?php

// Stage 2
// ----------------------------------------------------
// We have implemented dependency injection. Now we're
// getting closer to having testable code.

class SocialFeedTest extends PHPUnit_Framework_TestCase
{
    public function testCanReturnAnArrayOfTweets()
    {
        $p = new TwitterProvider();
        $s = new SocialFeed($p);
        $v = $s->getArray();
        $this->assertCount(5, $v);
    }
}
