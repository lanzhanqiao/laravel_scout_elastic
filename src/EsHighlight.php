<?php
namespace ScoutEngines\Elasticsearch;

trait EsHighlight
{
    public $searchSettings = [
        'attributesToHighlight' => [
            '*'
        ]
    ];

    public $highlight = [];
}