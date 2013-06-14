<?php

// Let's make a mock of things, using
// the mockery library.
use Mockery as m;

// Stage 5
// ----------------------------------------------------
// In accidentally implementing the content repository
// pattern, we have made it easy to provide a new type
// of social network message provider. Take a look at
// the second test for example.

class SocialFeedTest extends PHPUnit_Framework_TestCase
{
    public function testCanReturnAnArrayOfTweets()
    {
        // We create a mocked instance of our provider...
        $p = m::mock('ProviderInterface');

        // ..and tell it how it should respond to method calls.
        $p->shouldReceive('getMessages')
          ->andReturn(array('foo', 'bar', 'baz', 'boo', 'bop'));

        // Now we can pass the mocked provider interface to
        // our social feed class, to test it as a single
        // instance.
        $s = new SocialFeed($p);
        $v = $s->getArray();
        $this->assertCount(5, $v);
    }

    public function testCanReturnAnArrayOfFacebookMessages()
    {
        $f = new FacebookProvider();
        $s = new SocialFeed($f);
        $v = $s->getArray();
        $this->assertCount(3, $v);
    }
}
