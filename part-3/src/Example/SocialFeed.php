<?php

namespace Example;

/**
 * Retrieve formatted social network status updates
 * in a number of different formats.
 */
class SocialFeed


{
    /**
     * An instance of a TwitterFeedReader.
     *
     * @var TwitterFeedReader
     */
    private $twitterFeedReader;

    /**
     * Injecting dependencies.
     *
     * Yey! We are injecting a dependency into the class.
     * By passing an instance of a TwitterFeedReader class
     * into the constructor, we have control over the
     * dependency that the Social Feed class is using.
     *
     * @param TwitterFeedReader $twitterFeedReader
     */
    public function __construct(TwitterFeedReader  $twitterFeedReader)
    {
        $this->twitterFeedReader = $twitterFeedReader;
    }

    /**
     * Retrieve an array of social network status updates.
     *
     * @return array
     */
    public function getArray()
    {
        // No instantiationinginging!
        // ---------------------------------------------------
        // This time we don't need to create a new instance of
        // our TwitterFeedReader object. Instead we can use
        // the instance that has been injected through the
        // constructor of the class.
        //
        // So, we are now using dependency injection. Job done,
        // right? Better take a look at the tests.
        return $this->twitterFeedReader->getMessages();
    }
}
