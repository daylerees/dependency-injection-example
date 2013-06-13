<?php

/**
 * Print social messages to the screen.
 */
class SocialFeed
{
    /**
     * A handle on our provider.
     * 
     * @var ProviderInterface
     */
    private $provider;

    /**
     * A constructor is used to inject our API dependency.
     * 
     * @param ProviderInterface $provider
     */
    public function __construct(ProviderInterface $provider)
    {
        $this->provider = $provider;
    }

    /**
     * Retrieve an array of messages.
     * 
     * @return array
     */
    public function getArray()
    {
        return $this->provider->getMessages();
    }
}
