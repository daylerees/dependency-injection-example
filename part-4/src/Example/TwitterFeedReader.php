<?php

namespace Example;

use Exception;

class TwitterFeedReader
{
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
