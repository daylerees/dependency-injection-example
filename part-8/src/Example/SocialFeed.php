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
     * We have removed our TwitterFeedReader type hinting and
     * instead we are type-hinting an interface. This means that
     * any classes that implement this interface can be injected
     * into the constructor of this class.
     *
     * Not only does this allow for us to inject multiple types
     * of feed readers, but it creates a 'contract' which ensures
     * that the 'getMessages()' method we use MUST exist on the
     * injected class.
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
