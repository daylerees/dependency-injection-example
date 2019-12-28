<?php namespace Example;
use Exception;

/**
 * Retrieve formatted social network status updates
 * in a number of different formats.
 */
class SocialFeed


{
    /**
     * Retrieve an array of social network status updates.
     *
     * @return array
     */
    public function getArray()
    {
        // Boom, testing problems!
        // ---------------------------------------------------
        // We can't test this code because our social feed is
        // too coupled to the code that retrieves messages
        // from our social network of choice (Twitter).
        return $this->getMessages();
    }

    /**
     * Retrieve an array of messages from the Twitter API.
     *
     * @return array
     */
    public function getMessages()
    {
        // Fail whale!
        // ---------------------------------------------------
        // Let's simulate a halted connection, and a failure
        // by halting the application for ten seconds and
        // then throwing a new exception.
        sleep(10);
        throw new Exception('Connection to twitter timed out.');
    }
}
