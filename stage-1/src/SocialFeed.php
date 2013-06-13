<?php

/**
 * Print social messages to the screen.
 */
class SocialFeed
{
    /**
     * Retrieve an array of messages.
     * 
     * @return array
     */
    public function getArray()
    {
        // Boom, testing problems.
        $api = new TwitterProvider();
        return $api->getMessages();
    }
}
