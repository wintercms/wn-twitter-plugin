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
            'author'      => 'Alexey Bobkov, Samuel Georges',
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
}
