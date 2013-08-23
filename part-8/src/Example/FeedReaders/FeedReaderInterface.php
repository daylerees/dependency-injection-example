<?php

namespace Example\FeedReaders;

interface FeedReaderInterface
{
    /**
     * Retrieve an array of status messages.
     *
     * @return array
     */
    public function getMessages();
}
