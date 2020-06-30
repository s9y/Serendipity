[![Build Status](https://travis-ci.org/voku/html2text.svg?branch=master)](https://travis-ci.org/voku/html2text)
[![Coverage Status](https://coveralls.io/repos/voku/html2text/badge.svg)](https://coveralls.io/r/voku/html2text)
[![Codacy Badge](https://api.codacy.com/project/badge/Grade/d9030665de184a309797b32e036a2f77)](https://www.codacy.com/app/voku/html2text)
[![Latest Stable Version](https://poser.pugx.org/voku/html2text/v/stable)](https://packagist.org/packages/voku/html2text) 
[![Total Downloads](https://poser.pugx.org/voku/html2text/downloads)](https://packagist.org/packages/voku/html2text) 
[![License](https://poser.pugx.org/voku/html2text/license)](https://packagist.org/packages/voku/html2text)
[![Donate to this project using Paypal](https://img.shields.io/badge/paypal-donate-yellow.svg)](https://www.paypal.me/moelleken)
[![Donate to this project using Patreon](https://img.shields.io/badge/patreon-donate-yellow.svg)](https://www.patreon.com/voku)

# :memo: Html2Text

### Description

Convert HTML to formatted plain text, e.g. for text mails.

### Installation

The recommended installation way is through [Composer](https://getcomposer.org).

```bash
$ composer require voku/html2text
```

### Basic Usage
```php
$html = new \voku\Html2Text\Html2Text('Hello, &quot;<b>world</b>&quot;');

echo $html->getText();  // Hello, "WORLD"
```

### Extended Usage

Each element (h1, li, div, etc) can have the following options:

* 'case' => convert case (```Html2Text::OPTION_NONE, Html2Text::OPTION_UPPERCASE, Html2Text::OPTION_LOWERCASE , Html2Text::OPTION_UCFIRST, Html2Text::OPTION_TITLE```)
* 'prepend' => prepend a string
* 'append' => append a string

For example:
```php
$html = '<h1>Should have "AAA" changed to BBB</h1><ul><li>• Custom bullet should be removed</li></ul><img alt="The Linux Tux" src="tux.png" />';
$expected = 'SHOULD HAVE "BBB" CHANGED TO BBB' . "\n\n" . '- Custom bullet should be removed |' . "\n\n" . '[IMAGE]: "The Linux Tux"';

$html2text = new Html2Text(
    $html,
    array(
        'width'    => 0,
        'elements' => array(
            'h1' => array(
              'case' => Html2Text::OPTION_UPPERCASE, 
              'replace' => array('AAA', 'BBB')),
            'li' => array(
              'case' => Html2Text::OPTION_NONE, 
              'replace' => array('•', ''), 
              'prepend' => "- ",
              'append' => " |",
            ),
        ),
    )
);

$html2text->setPrefixForImages('[IMAGE]: ');
$html2text->setPrefixForLinks('[LINKS]: ');
$html2text->getText(); // === $expected
```

### Live Demo
- [HTML](https://suckup.de/2016/01/was-habe-ich-als-fachinformatiker-bisher-gelernt/) | [TEXT](https://moelleken.org/url_to_text.php?url=https://suckup.de/2016/01/was-habe-ich-als-fachinformatiker-bisher-gelernt/)

- https://moelleken.org/url_to_text.php?url=https://ADD_YOUR_URL_HERE

### History

This library started life on the blog of Jon Abernathy http://www.chuggnutt.com/html2text

A number of projects picked up the library and started using it - among those was RoundCube mail. They made a number of updates to it over time to suit their webmail client.

Now this is a extend fork of the original [Html2Text](https://github.com/mtibben/html2text).

### Support

For support and donations please visit [Github](https://github.com/voku/portable-utf8/) | [Issues](https://github.com/voku/portable-utf8/issues) | [PayPal](https://paypal.me/moelleken) | [Patreon](https://www.patreon.com/voku).

For status updates and release announcements please visit [Releases](https://github.com/voku/portable-utf8/releases) | [Twitter](https://twitter.com/suckup_de) | [Patreon](https://www.patreon.com/voku/posts).

For professional support please contact [me](https://about.me/voku).

### Thanks

- Thanks to [GitHub](https://github.com) (Microsoft) for hosting the code and a good infrastructure including Issues-Managment, etc.
- Thanks to [IntelliJ](https://www.jetbrains.com) as they make the best IDEs for PHP and they gave me an open source license for PhpStorm!
- Thanks to [Travis CI](https://travis-ci.com/) for being the most awesome, easiest continous integration tool out there!
- Thanks to [StyleCI](https://styleci.io/) for the simple but powerfull code style check.
- Thanks to [PHPStan](https://github.com/phpstan/phpstan) && [Psalm](https://github.com/vimeo/psalm) for relly great Static analysis tools and for discover bugs in the code!
 
