phpMorphy (reloaded)
===================

[![Build Status](https://api.travis-ci.org/wdmg/phpmorphy.png?branch=master)](https://travis-ci.org/wdmg/phpmorphy)
[![GitHub tag](https://img.shields.io/github/tag/wdmg/phpmorphy.svg?label=latest)](https://packagist.org/packages/wdmg/phpmorphy)
[![Coverage Status](https://coveralls.io/repos/wdmg/phpmorphy/badge.svg?branch=master)](https://coveralls.io/r/wdmg/phpmorphy?branch=master)

phpMorphy is morphological analyzer library for Russian, English and German languages.

 * [Website (in Russian)](http://phpmorphy.sourceforge.net/)
 * [Sourceforge project](http://sourceforge.net/projects/phpmorphy)


This library allows to retrieve following morph information for any word:
 * base (normal) form;
 * all forms;
 * grammatical (part of speech, grammems) information.

## Installation

To install the library in your project using `Composer`, first add the following to your `composer.json`
config file:
```javascript
{
    "require": {
        "wdmg/phpmorphy": "~1.0"
    }
}
```
Then run Composer's install or update commands to complete installation.

## Usage

See examples in [examples](examples) directory.

## Speed

### Single word mode

| mode          | base form       | all forms     | all forms with gram. info |
|:------------- | ---------------:| -------------:| -------------------------:|
| FILE          | 1000            |  800          | 600                       |
| SHM           | 2200            | 1100          | 800                       |
| MEM           | 2500            | 1200          | 900                       |


### Bulk mode:

| mode          | base form       | all forms     | all forms with gram. info |
|:------------- | ---------------:| -------------:| -------------------------:|
| FILE          | 1700            | 800           | 700                       |
| SHM           | 3200            | 800           | 700                       |
| MEM           | 3500            | 800           | 700                       |


Note:
> All values are words per second speed.
> Test platform: PHP 5.2.3, AMD Duron 800 with 512Mb memory, WinXP.
