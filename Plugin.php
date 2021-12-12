<?php namespace WebVPF\Christmas;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name'        => 'webvpf.christmas::lang.plugin.name',
            'description' => 'webvpf.christmas::lang.plugin.desc',
            'author'      => 'WebVPF',
            'icon'        => 'icon-snowflake-o'
        ];
    }

    public function registerComponents()
    {
        return [
            'WebVPF\Christmas\Components\Garland' => 'ChristmasGarland',
            'WebVPF\Christmas\Components\Snow' => 'ChristmasSnow',
        ];
    }
}
