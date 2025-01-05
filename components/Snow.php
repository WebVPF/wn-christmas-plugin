<?php namespace WebVPF\Christmas\Components;

use Cms\Classes\ComponentBase;

class Snow extends ComponentBase
{
    public function componentDetails(): array
    {
        return [
            'name'        => 'webvpf.christmas::lang.snow.name',
            'description' => 'webvpf.christmas::lang.snow.desc'
        ];
    }

    public function defineProperties(): array
    {
        return [
            'shape' => [
                'title'         => 'webvpf.christmas::lang.snow.prop.shape',
                'description'   => 'webvpf.christmas::lang.snow.prop.shape_desc',
                'type'          => 'dropdown',
                'options'       => ['❄'=>'❄', '❅'=>'❅', '❆' => '❆', '&bull;' => '&bull;']
            ],
            // 'dom' => [
            //     'title'         => 'webvpf.christmas::lang.snow.prop.dom',
            //     'description'   => 'webvpf.christmas::lang.snow.prop.dom_desc',
            //     'type'          => 'string',
            //     'default'       => 'document.body'
            // ],
            'amount' => [
                'title'             => 'webvpf.christmas::lang.snow.prop.amount',
                'description'       => 'webvpf.christmas::lang.snow.prop.amount_desc',
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'webvpf.christmas::lang.snow.prop.amount_validation',
                'default'           => '50'
            ],
            'size' => [
                'title'             => 'webvpf.christmas::lang.snow.prop.size',
                'description'       => 'webvpf.christmas::lang.snow.prop.size_desc',
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'webvpf.christmas::lang.snow.prop.size_validation',
                'default'           => '5'
            ],
            'speed' => [
                'title'             => 'webvpf.christmas::lang.snow.prop.speed',
                'description'       => 'webvpf.christmas::lang.snow.prop.speed_desc',
                'type'              => 'string',
                'validationPattern' => '^[0-9]*[.]?[0-9]+$',
                'validationMessage' => 'webvpf.christmas::lang.snow.prop.speed_validation',
                'default'           => '1.5'
            ],
            'wind' => [
                'title'             => 'webvpf.christmas::lang.snow.prop.wind',
                'description'       => 'webvpf.christmas::lang.snow.prop.wind_desc',
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'webvpf.christmas::lang.snow.prop.wind_validation',
                'default'           => '0'
            ],
            'color' => [
                'title'             => 'webvpf.christmas::lang.snow.prop.color',
                'description'       => 'webvpf.christmas::lang.snow.prop.color_desc',
                'type'              => 'string',
                // 'validationPattern' => '^[0-9]+$',
                // 'validationMessage' => 'webvpf.christmas::lang.snow.prop.color_validation',
                'placeholder' => '',
                'default'           => '#fff',
            ],
            'opacity' => [
                'title'             => 'webvpf.christmas::lang.snow.prop.opacity',
                'description'       => 'webvpf.christmas::lang.snow.prop.opacity_desc',
                'type'              => 'string',
                'validationPattern' => '^[0-9]*[.]?[0-9]+$',
                'validationMessage' => 'webvpf.christmas::lang.snow.prop.opacity_validation',
                'default'           => '0.8'
            ],
            'swing' => [
                'title'             => 'webvpf.christmas::lang.snow.prop.swing',
                'description'       => 'webvpf.christmas::lang.snow.prop.swing_desc',
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'webvpf.christmas::lang.snow.prop.swing_validation',
                'default'           => '1'
            ],
            // 'image' => [
            //     'title'             => 'webvpf.christmas::lang.snow.prop.image',
            //     'description'       => 'webvpf.christmas::lang.snow.prop.image_desc',
            //     'default'           => 'null'
            // ],
            'zIndex' => [
                'title'             => 'webvpf.christmas::lang.snow.prop.zIndex',
                'description'       => 'webvpf.christmas::lang.snow.prop.zIndex_desc',
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'webvpf.christmas::lang.snow.prop.zIndex_validation',
                // 'default'           => 'null'
            ]
        ];
    }

    public function onRun()
    {
        $this->page['snow'] = [
            'dom' => $this->property('dom'),
            'amount' => $this->property('amount'),
            'size' => $this->property('size'),
            'speed' => $this->property('speed'),
            'wind' => $this->property('wind'),
            'color' => $this->property('color'),
            'opacity' => $this->property('opacity'),
            'swing' => $this->property('swing'),
            'zIndex' => $this->property('zIndex') ? $this->property('zIndex') : 'null'
        ];

        $this->addJs('/plugins/webvpf/christmas/assets/js/snow.js', 'WebVPF.Christmas');
    }
}
