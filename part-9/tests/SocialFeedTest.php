<?php

use Mockery as M;
use Example\SocialFeed;

class SocialFeedTest extends PHPUnit_Framework_TestCase
{
    /**
     * Will it make?
     *
     * Our tests for this class aren't dependent on any
     * specific FeedReader implementation anymore, so
     * why don't we mock the interface directly?
     *
     * I hope you have enjoyed this tutorial (is it really
     * a tutorial?) on dependency injection. Stay tuned for
     * a similar introduction to the inversion of control
     * principle.
     *
     * Thanks for reading!
     * Dayle.
     */
    public function testSocialFeedCanBeInstantiated()
    {
        $f = M::mock('Example\FeedReaders\FeedReaderInterface');
        $s = new SocialFeed($f);
    }

    /**
     * Let's test that messages are returned.
     */
    public function testCanReturnAnArrayOfStatusUpdates()
    {
        $f = M::mock('Example\FeedReaders\FeedReaderInterface');
        $f->shouldReceive('getMessages')
            ->once()
            ->andReturn(array('foo', 'bar', 'baz', 'boo', 'bop'));
        $s = new SocialFeed($f);
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
