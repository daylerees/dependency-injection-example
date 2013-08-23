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
     * We haven't changed anything in this class since the
     * last part. Go take a look at the tests!
     *
     * @param TwitterFeedReader $twitterFeedReader
     */
    public function __construct($twitterFeedReader)
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
