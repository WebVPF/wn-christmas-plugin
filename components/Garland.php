<?php namespace WebVPF\Christmas\Components;

use Cms\Classes\ComponentBase;

class Garland extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'webvpf.christmas::lang.garland.name',
            'description' => 'webvpf.christmas::lang.garland.desc'
        ];
    }

    public function defineProperties()
    {
        return [
            'onDate' => [
                'title'         => 'webvpf.christmas::lang.garland.prop.ondate',
                'description'   => 'webvpf.christmas::lang.garland.prop.ondatedesc',
                'type'          => 'checkbox',
                'default'       => false
            ],
            'dateOn' => [
                'title'             => 'webvpf.christmas::lang.garland.prop.start',
                'description'       => 'webvpf.christmas::lang.garland.prop.startdesc',
                'type'              => 'string',
                'default'           => '01-01',
                'validationPattern' => '[01][0-9]-[0123][0-9]',
                'validationMessage' => 'webvpf.christmas::lang.garland.prop.startvalidmes'
            ],
            'dateOff' => [
                'title'             => 'webvpf.christmas::lang.garland.prop.end',
                'description'       => 'webvpf.christmas::lang.garland.prop.enddesc',
                'type'              => 'string',
                'default'           => '12-31',
                'validationPattern' => '[01][0-9]-[0123][0-9]',
                'validationMessage' => 'webvpf.christmas::lang.garland.prop.endvalidmes'
            ]
        ];
    }

    public function onRun()
    {
        if ($this->property('onDate')) {
            $date_now = date('m-d');
            $date_on = $this->property('dateOn');
            $date_off = $this->property('dateOff');

            if ($date_off < $date_on) {
                if ($date_on <= $date_now || $date_off > $date_now) {
                    $this->activeGarland();
                } else {
                    $this->page['activeGarland'] = false;
                }
            }
            else if ($date_on <= $date_now && $date_off > $date_now) {
                $this->activeGarland();
            }
            else {
                $this->page['activeGarland'] = false;
            }
        }
        else {
            $this->activeGarland();
        }
    }

    private function activeGarland()
    {
        $this->page['activeGarland'] = true;

        $this->addCss('/plugins/webvpf/christmas/assets/css/garland.css', 'WebVPF.Christmas');
        $this->addJs('/plugins/webvpf/christmas/assets/js/garland.min.js', 'WebVPF.Christmas');
    }
}
