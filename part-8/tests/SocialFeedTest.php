<?php

use Mockery as M;
use Example\SocialFeed;

class SocialFeedTest extends PHPUnit_Framework_TestCase
{
    /**
     * Will it make?
     *
     * Now that our injected dependency is type hinted to
     * an interface, we can inject whichever FeedReader
     * implementation that we want.
     *
     * Our tests pass again! Woooo.
     *
     * Seriously though, what we have done here is more
     * impressive than just fixing to allow our tests to pass.
     * We've implemented a design pattern. The adapter pattern.
     *
     * If we later decide that we want to create a
     * GooglePlusFeedReader then we can plug it into the system
     * very easily. We have made it easier to maintain our
     * application, and future developers on this project
     * will thank us. Huzzah!
     *
     * You know what? We aren't quite done yet.
     * Switch to the final part for some clean up.
     */
    public function testSocialFeedCanBeInstantiated()
    {
        $t = M::mock('Example\FeedReaders\FacebookFeedReader');
        $s = new SocialFeed($t);
    }

    /**
     * Let's test that messages are returned.
     */
    public function testCanReturnAnArrayOfStatusUpdates()
    {
        $t = M::mock('Example\FeedReaders\FacebookFeedReader');
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
