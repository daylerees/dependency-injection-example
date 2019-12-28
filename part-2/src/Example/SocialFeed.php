<?php

namespace Example;

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
        // These classes had a breakup :(
        // ---------------------------------------------------
        // The tight coupling between our status retrieval class
        // and our Twitter API class has been loosened. Each class
        // now has its own single responsibility.
        $twitterFeedReader = new TwitterFeedReader;
        return $twitterFeedReader->getMessages();
    }
}
