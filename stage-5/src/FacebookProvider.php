<?php

/**
 * Interact with the Facebook API to retrieve a stream of statuses.
 */
class FacebookProvider implements ProviderInterface
{
    /**
     * Retrieve an array of statuses from the facebook API.
     * 
     * @return array
     */
    public function getMessages()
    {
        return array(
            'Hey, check out a photo of my kid doing something.',
            'Hey, check out a photo of my kid doing something.',
            '*duck-faced mirror photo*'
        );
    }
}
