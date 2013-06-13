<?php

/**
 * Interact with the Twitter API to retrieve a stream of tweets.
 */
class TwitterProvider implements ProviderInterface
{
    /**
     * Retrieve an array of tweets from the twitter API.
     * 
     * @return array
     */
    public function getMessages()
    {
        // Let's simulate a halted connection, and a failure.
        sleep(10);
        throw new Exception('Connection to twitter timed out.');
    }
}
