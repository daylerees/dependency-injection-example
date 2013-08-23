<?php

namespace Example;

use Example\FeedReaders\FeedReaderInterface;

/**
 * Retrieve formatted social network status updates
 * in a number of different formats.
 */
class SocialFeed
{
    /**
     * An implementation of a FeedReaderInterface.
     *
     * @var FeedReaderInterface
     */
    private $feedReader;

    /**
     * Injecting dependencies.
     *
     * @param FeedReaderInterface $feedReader
     */
    public function __construct(FeedReaderInterface $feedReader)
    {
        $this->feedReader = $feedReader;
    }

    /**
     * Retrieve an array of social network status updates.
     *
     * @return array
     */
    public function getArray()
    {
        return $this->feedReader->getMessages();
    }
}
