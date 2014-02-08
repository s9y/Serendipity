<?php

// workaround for PHP 5.2.x versions to not error while reading code before executing
$textile = $this->get_config('textile_doctype') ? new \Netcarver\Textile\Parser('html5') : new \Netcarver\Textile\Parser();

?>