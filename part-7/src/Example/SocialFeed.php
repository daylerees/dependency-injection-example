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
     * This time we have type-hinted our TwitterFeedReader to
     * ensure that we can't pass strange dependencies into our
     * constructor. THAT guy is foiled!
     *
     * @param TwitterFeedReader $twitterFeedReader
     */
    public function __construct(TwitterFeedReader $twitterFeedReader)
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
        return $this->twitterFeedReader->getMessages();
    }
}
