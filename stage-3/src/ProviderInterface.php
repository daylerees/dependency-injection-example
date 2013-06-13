<?php

/**
 * Interface for API provider types.
 */
interface ProviderInterface
{
    /**
     * Retrieve an array of social messages.
     * 
     * @return array
     */
    public function getMessages();
}
