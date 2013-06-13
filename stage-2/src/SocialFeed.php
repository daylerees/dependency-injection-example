<?php

/**
 * Print social messages to the screen.
 */
class SocialFeed
{
    /**
     * A handle on our twitter provider.
     * 
     * @var mixed
     */
    private $twitterProvider;

    /**
     * A constructor is used to inject our twitter API dependency.
     * 
     * @param mixed $twitterProvider
     */
    public function __construct($twitterProvider)
    {
        $this->twitterProvider = $twitterProvider;
    }

    /**
     * Retrieve an array of messages.
     * 
     * @return array
     */
    public function getArray()
    {
        // No instantiation, that looks better!
        return $this->twitterProvider->getMessages();
    }
}
