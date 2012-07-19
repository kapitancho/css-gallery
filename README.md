css-gallery
===========

Pure css gallery with full IE6+ support using behaviors

It works in all modern browsers using CSS 3 transitions.
It supports 3 types of gallery transitions: fade, horizontal slide and vertical slide.

Warning! The transition effect works in IE9 only if the .htc files are correctly served as text/x-component.
Otherwise, the gallery works without the transition effects because IE9 does not support them. IE10 works
just fine.

Usage
-----
index.php and index.tpl.php show a sample usage for the gallery.
In short:
1. include the main style file default.css
2. include the style file ie.css with a conditional comment for browsers up to IE9
3a. Either include gallery.php and call showGallery ($images, $unique_id, $gallery_type = 'opacity')
3b. Or set values for variable $images, $unique_id and $gallery_type and then include gallery.tpl.php directly.
4. index.php contains a small JavaScript fragment. It is required in order to workaround a painting bug in some webkit browsers.