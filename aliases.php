<?php

use Winter\Storm\Support\ClassLoader;

/**
 * To allow compatibility with plugins that extend the original RainLab.Twitter plugin, this will alias those classes to
 * use the new Winter.Twitter classes.
 */
$aliases = [
    // Regular aliases
    Winter\Twitter\Plugin::class                    => RainLab\Twitter\Plugin::class,
    Winter\Twitter\Classes\TwitterClient::class     => RainLab\Twitter\Classes\TwitterClient::class,
    Winter\Twitter\Components\FollowButton::class   => RainLab\Twitter\Components\FollowButton::class,
    Winter\Twitter\Components\Favorites::class      => RainLab\Twitter\Components\Favorites::class,
    Winter\Twitter\Components\TweetButton::class    => RainLab\Twitter\Components\TweetButton::class,
    Winter\Twitter\Components\LatestTweet::class    => RainLab\Twitter\Components\LatestTweet::class,
    Winter\Twitter\Components\EmbedTweet::class     => RainLab\Twitter\Components\EmbedTweet::class,
    Winter\Twitter\Components\EmbedTimeline::class  => RainLab\Twitter\Components\EmbedTimeline::class,
    Winter\Twitter\Models\Settings::class           => RainLab\Twitter\Models\Settings::class,
];

app(ClassLoader::class)->addAliases($aliases);
