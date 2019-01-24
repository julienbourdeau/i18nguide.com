<?php

use League\CommonMark\CommonMarkConverter;

function docs_path($path = '')
{
    return resource_path('docs'.DIRECTORY_SEPARATOR.$path);
}

function markdown($markdown)
{
    return app(CommonMarkConverter::class)->convertToHtml($markdown);
}
