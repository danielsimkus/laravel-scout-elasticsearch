<?php

namespace Tests\Unit\ElasticSearch;

use App\Product;
use Matchish\ScoutElasticSearch\Console\Commands\DefaultImportSourceFactory;
use Tests\TestCase;
use Matchish\ScoutElasticSearch\ElasticSearch\Index;

class IndexTest extends TestCase
{
    public function test_creation_from_searchable()
    {
        $index = Index::fromSource(DefaultImportSourceFactory::from(Product::class));
        $this->assertEquals($index->name(), 'products_1525376494');
    }
}

namespace Matchish\ScoutElasticSearch\ElasticSearch;

function time():int
{
    return 1525376494;
}
