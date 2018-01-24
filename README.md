# GetPage()


* Usage : 

```php
<?php

// IF POST QUERY
$postvalues = array(
    'FIELD1' => 'VALUE1',
    'FIELD2' => 'VALUE2'
);
$content = getPage($url, $postvalues);

$content = str_get_html($content);

dump($content);

```
