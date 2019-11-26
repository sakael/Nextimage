# NextImage 

NextImage is a ** PHP image resizing ** library providing an easier and expressive way to create, edit, and compose images.

[![Latest Version](https://img.shields.io/packagist/v/intervention/image.svg)](https://packagist.org/packages/nextimage/nextimage)
[![Monthly Downloads](https://img.shields.io/packagist/dm/nextimage/nextimage.svg)](https://packagist.org/packages/nextimage/nextimage/stats)

## Requirements

- PHP >=5.4

## Getting started


## Code Examples

```php
use Nextimage\Nextimage\Resize;
// open an image file
$Resize=new Resize($photo,$ext);

// resize the image, type can be default:aspect ratio,exact,maxwidth,maxheight
$Resize->resizeTo('width','height','type');

// path is where to save the image
$Resize->saveImage('public/image.jpg');
```

## License

NextImage is licensed under the [MIT License](http://opensource.org/licenses/MIT).