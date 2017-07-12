Updated to Luna 2.0.0

All that was in the "Fifteen-Child-One 1.3"
It is already implemented by default in the "Luna 2.0.0"
This child theme is longer no needed.

But I decided to leave it, upgrade to "Fifteen-Child-One 2.0.0"

The main task of the child theme - you can add code to analytics (Google Analytics or Google Tag Manager).

If you add this code to the main theme. When you update your forum, your changes (your code) will disappear. Therefore we need a child theme. After upgrading, your code will be in place.

You need to add your code in file:
Fifteen-Child-One\views\header.php

<body>
<!-- Google Tag Manager -->
<!-- End Google Tag Manager -->	