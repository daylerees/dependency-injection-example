<?php

use Mockery as M;
use Example\SocialFeed;

class SocialFeedTest extends PHPUnit_Framework_TestCase
{
    /**
     * Will it make?
     *
     * Let's switch out our TwitterFeedReader mock for
     * a FacebookFeedReader mock.
     *
     * Hmm.. it doesn't pass? Oh that's right. We type-
     * hinted our TwitterFeedReader, of course it won't
     * accept a Facebook one!
     */
    public function testSocialFeedCanBeInstantiated()
    {
        $t = M::mock('Example\FacebookFeedReader');
        $s = new SocialFeed($t);
    }

    /**
     * MVP
     *
     * Yep, we get the same problem here. That type-
     * hinting really is causing problems.
     *
     * Let's switch to part-8 to try and resolve our
     * problems.
     */
    public function testCanReturnAnArrayOfStatusUpdates()
    {
        $t = M::mock('Example\FacebookFeedReader');
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
