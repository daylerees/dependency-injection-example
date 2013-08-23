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
     * People aren't always clever. There will always be
     * that one guy that tried to hammer the star into the
     * square hole. You all know THAT guy.
     *
     * THAT guy would probably try to pass something other
     * than a TwitterFeedReader as a dependency to our
     * SocialFeed, wouldn't he? He'd probably pass an integer
     * with a value of four.
     *
     * I wonder what will happen.
     *
     * Run the tests and then switch to part six.
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
