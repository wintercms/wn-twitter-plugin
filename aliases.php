<?php

use Winter\Storm\Support\ClassLoader;

/**
 * To allow compatibility with plugins that extend the original RainLab.Twitter plugin, this will alias those classes to
 * use the new Winter.Twitter classes.
 */
$aliases = [
    // Regular aliases
    Winter\Twitter\Plugin::class                    => 'RainLab\Twitter\Plugin',
    Winter\Twitter\Classes\TwitterClient::class     => 'RainLab\Twitter\Classes\TwitterClient',
    Winter\Twitter\Components\FollowButton::class   => 'RainLab\Twitter\Components\FollowButton',
    Winter\Twitter\Components\Favorites::class      => 'RainLab\Twitter\Components\Favorites',
    Winter\Twitter\Components\TweetButton::class    => 'RainLab\Twitter\Components\TweetButton',
    Winter\Twitter\Components\LatestTweet::class    => 'RainLab\Twitter\Components\LatestTweet',
    Winter\Twitter\Components\EmbedTweet::class     => 'RainLab\Twitter\Components\EmbedTweet',
    Winter\Twitter\Components\EmbedTimeline::class  => 'RainLab\Twitter\Components\EmbedTimeline',
    Winter\Twitter\Models\Settings::class           => 'RainLab\Twitter\Models\Settings',
];

app(ClassLoader::class)->addAliases($aliases);
