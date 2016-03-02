<?php

namespace AlgoliaSearch\Tests;

use AlgoliaSearch\Client;

class InitPlacesTest extends AlgoliaSearchTestCase
{
    public function testInitPlaces()
    {
        $placesIndex = Client::initPlaces(getenv('ALGOLIA_APPLICATION_ID'), getenv('ALGOLIA_API_KEY'));

        $this->assertEquals([
            'places-dsn.algolia.net',
            'places-1.algolianet.com',
            'places-2.algolianet.com',
            'places-3.algolianet.com'
        ], $placesIndex->context->readHostsArray);
    }
}
