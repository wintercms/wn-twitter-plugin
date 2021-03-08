<?php namespace Winter\Twitter\Models;

use Winter\Storm\Database\Model;

/**
 * Twitter settings model
 *
 * @package system
 * @author Alexey Bobkov, Samuel Georges
 *
 */
class Settings extends Model
{
    use \Winter\Storm\Database\Traits\Validation;

    public $implement = ['System.Behaviors.SettingsModel'];

    public $settingsCode = 'winter_twitter_settings';

    public $settingsFields = 'fields.yaml';

    /**
     * Validation rules
     */
    public $rules = [
        'api_key'             => 'required',
        'api_secret'          => 'required',
        'access_token'        => 'required',
        'access_token_secret' => 'required'
    ];
}