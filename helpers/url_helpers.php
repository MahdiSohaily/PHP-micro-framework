<?php

function site_url(string $url = ''): string
{
    return $_ENV['HOST_ADDR'] . $url;
}

function asset_url(string $url = ''): string
{
    return site_url('public/' . $url);
}
