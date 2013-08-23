<?php

namespace Example;

use Exception;

class FacebookFeedReader
{
    /**
     * Retrieve an array of messages from the Facebook API.
     *
     * @return array
     */
    public function getMessages()
    {
        // We've learned about mocking, so we don't need to
        // break the API right now. Let's return some
        // dummy messages instead.
        return array(
            'LOOK AT PHOTOS OF MY KIDS',
            'HAHA LOOK WHAT MY CAT DID',
            'HAI PLZ TO PLAY FARMVILLE?'
        );
    }
}
