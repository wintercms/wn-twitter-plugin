<?php namespace Winter\Twitter;

/**
 * The plugin.php file (called the plugin initialization script) defines the plugin information class.
 */

use System\Classes\PluginBase;

class Plugin extends PluginBase
{

    public function pluginDetails()
    {
        return [
            'name'        => 'Twitter',
            'description' => 'Provides integration with Twitter.',
            'author'      => 'Winter CMS',
            'icon'        => 'icon-twitter',
            'replaces'    => ['RainLab.Twitter' => '<= 1.0.5'],
        ];
    }

    public function registerComponents()
    {
        return [
            'Winter\Twitter\Components\Favorites'        => 'twitterFavorites',
            'Winter\Twitter\Components\FollowButton'     => 'followButton',
            'Winter\Twitter\Components\TweetButton'      => 'tweetButton',
            'Winter\Twitter\Components\EmbedTweet'       => 'embedTweet',
            'Winter\Twitter\Components\EmbedTimeline'    => 'embedTimeline',
            'Winter\Twitter\Components\LatestTweet'      => 'latestTweet'
        ];
    }

    public function registerSettings()
    {
        return [
            'settings' => [
                'label'       => 'Twitter',
                'icon'        => 'icon-twitter',
                'description' => 'Configure Twitter authentication parameters.',
                'class'       => 'Winter\Twitter\Models\Settings',
                'order'       => 600
            ]
        ];
    }

    public function registerClassAliases()
    {
        /**
         * To allow compatibility with plugins that extend the original RainLab.Twitter plugin,
         * this will alias those classes to use the new Winter.Twitter classes.
         */
        return [
            \Winter\Twitter\Plugin::class                    => \RainLab\Twitter\Plugin::class,
            \Winter\Twitter\Classes\TwitterClient::class     => \RainLab\Twitter\Classes\TwitterClient::class,
            \Winter\Twitter\Components\FollowButton::class   => \RainLab\Twitter\Components\FollowButton::class,
            \Winter\Twitter\Components\Favorites::class      => \RainLab\Twitter\Components\Favorites::class,
            \Winter\Twitter\Components\TweetButton::class    => \RainLab\Twitter\Components\TweetButton::class,
            \Winter\Twitter\Components\LatestTweet::class    => \RainLab\Twitter\Components\LatestTweet::class,
            \Winter\Twitter\Components\EmbedTweet::class     => \RainLab\Twitter\Components\EmbedTweet::class,
            \Winter\Twitter\Components\EmbedTimeline::class  => \RainLab\Twitter\Components\EmbedTimeline::class,
            \Winter\Twitter\Models\Settings::class           => \RainLab\Twitter\Models\Settings::class,
        ];
    }
}
