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
     * Mocking!
     *
     * We can use the Mockery (https://github.com/padraic/mockery)
     * libarary to create a 'fake' instance of the TwitterFeedReader
     * class. We don't care about testing that class, it should have
     * its own test suite.
     *
     * Our 'fake' class is predictable. We tell
     * it that it should receive a call to the 'getMessages' method
     * only once, and return an array of responses.
     *
     * By injecting our fake dependency into the FeedReader class
     * we can base tests upon the mock's predictible responses.
     * The functionality of the FeedReader class hasn't been faked,
     * and it has been tested.
     *
     * FINALLY WE HAVE A GREEN BAR! (but not for long)
     *
     * Sorry, but I'm going to break it in part five!
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
     * Clean up after yourself!
     */
    public function tearDown()
    {
        M::close();
    }
}
