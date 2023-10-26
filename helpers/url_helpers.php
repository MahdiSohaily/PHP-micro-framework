<?php

function site_url($url = '')
{
    return $_ENV['HOST_ADDR'] . $url;
}

function asset_url($url = '')
{
    return site_url('public/' . $url);
}
