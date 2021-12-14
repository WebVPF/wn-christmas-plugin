![plugin logo](https://repository-images.githubusercontent.com/437407088/ba0e8eb8-577d-4563-894c-c47314f74254)

# Christmas

Christmas decorations for Winter CMS sites.

## Installing Composer

    composer require webvpf/wn-christmas-plugin

## Features

- there is no interaction with database
- without jQuery

### Components

- Christmas garland
- Falling snow

## Christmas garland

    [ChristmasGarland]
    dateOn = "01-01"
    dateOff = "12-31"
    ==
    {% component 'ChristmasGarland' %}

The date of turning on and off the garland is indicated in the format `mm-dd`.

## Снег

    [ChristmasSnow]
    amount = 50
    size = 5
    speed = 1.5
    wind = 0
    color = "#fff"
    opacity = 0.8
    swing = 1
    ==
    {% component 'ChristmasSnow' %}

- `amount` - Number of snowflakes displayed at the same time. Default: `50`
- `size` - размер снежинки. Default: 5
- `speed` - The speed of falling snowflakes vertically. The higher the value, the faster the snowflakes fall. Default: `1.5`
- `wind` - Horizontal wind energy. The wind will blow to the right if it is a positive number, and a negative number causes the wind to blow to the left. Default: 0
- `color` - The color of the snowflakes. This parameter accepts the color code HEX or RGB, example `#fff`, `#ffffff` or `rgb (255,255,255)`. Default: `#fff`
- `opacity` - Maximum transparency of snowflakes. The plugin will generate snowflakes with different opacity from 0 to this number. Default: `0.8`
- `swing` - Swinging snowflakes. If you don't want the snowflakes to wobble, set this parameter to `0`. Default: `1`

---

## Example of garland output in the Winter CMS Demo theme

Below is an example of how to insert a garland in a demo template on the main page of the site right below the menu. According to this principle, you can insert a garland not on the page, but into the template (for display on all pages).

Go to CMS and open **Demonstration** page. At the very beginning of the markup, insert **Christmas garland** component by dragging and dropping. To make the garland display correct, add the styles before the twig with the `ChristmasGarland` component as in this example:

    <style>.jumbotron{padding-top:100px}.b-page_newyear{position:absolute;width:100%;height:100px;top:71px}</style>

    {% component 'ChristmasGarland' %}

    demo page content...

![Screenshot of page with garland](https://raw.githubusercontent.com/WebVPF/wn-christmas-plugin/main/assets/img/screens/demo-theme-wintercms.jpg)
