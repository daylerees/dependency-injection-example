<?php

// Stage 1
// ----------------------------------------------------
// We have created a hard coded dependency. Should
// the twitter api dependency fail, our test will also
// fail. Our code should be tested in isolation, without
// the reliance upon our dependencies.

class SocialFeedTest extends PHPUnit_Framework_Testcase
{
    public function testCanReturnAnArrayOfTweets()
    {
        $s = new SocialFeed();
        $v = $s->getArray();
        $this->assertCount(5, $v);
    }
}
