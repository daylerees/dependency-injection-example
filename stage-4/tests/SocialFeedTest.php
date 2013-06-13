<?php

// Let's make a mock of things, using
// the mockery library.
use Mockery as m;

// Stage 4
// ----------------------------------------------------
// By using a mocked object, we can test our SocialFeed
// class functionality on its own. We use mockery to create
// a ProviderInterface (instance?) and teach it how to respond
// to method calls. Then we pass this fake object into the test.
// We don't have to worry about the ProviderInterface breaking,
// because in the real world it will have its own tests.

class SocialFeedTest extends PHPUnit_Framework_Testcase
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
}
