<?php

use Mockery as M;
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
        $t = M::mock('Example\TwitterFeedReader');
        $s = new SocialFeed($t);
    }

    /**
     * MVP
     *
     * Let's test that the SocialFeed class will return
     * a number of status messages from our feed.
     */
    public function testCanReturnAnArrayOfStatusUpdates()
    {
        $t = M::mock('Example\TwitterFeedReader');
        $t->shouldReceive('getMessages')
            ->once()
            ->andReturn(array('foo', 'bar', 'baz', 'boo', 'bop'));
        $s = new SocialFeed($t);
        $v = $s->getArray();
        $this->assertCount(5, $v);
        $this->assertEquals($v[0], 'foo');
        $this->assertEquals($v[1], 'bar');
        $this->assertEquals($v[2], 'baz');
        $this->assertEquals($v[3], 'boo');
        $this->assertEquals($v[4], 'bop');
    }

    /**
     * Dumb.
     *
     * Okay, so we can still pass an integer into our
     * Social Feed instance. However, because we have
     * type-hinted our dependency, we receive a more
     * informative wrist-slapping.
     *
     * The test will still fail though, so we will
     * remove this test in the next example.
     *
     * In the next part, let's use our imagination a
     * little. Let's imagine that we need to switch
     * our status message source from Twitter to
     * Facebook.
     *
     * Well, what are you waiting for?
     */
    public function testThatWeCanBeACompleteIdiot()
    {
        $s = new SocialFeed(4);
        $v = $s->getArray();
        $this->assertCount(5, $v);
    }

    /**
     * Clean up after yourself!
     */
    public function tearDown()
    {
        M::close();
    }
}
