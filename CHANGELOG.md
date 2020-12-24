Changelog
=========

## 1.3.2 (2020-12-24)
 * Added common_aut.en_us dictionaries. See https://sourceforge.net/projects/phpmorphy/files/phpmorphy-dictionaries/0.3.x/en_EN/
 * Fix prediction by suffix for words with prefix

## 1.3.1 (2020-05-07)
 * Revert namespace

## 1.3.0 (2020-02-04)
 * Added psr namespace
 
## 1.2.1 (2016-04-14)
 * Remove composer.lock

## 1.2.0 (2016-04-14)
 * Remove authors file (already present in composer.json)

## 1.1.0 (2016-04-14)
 * Get rid of global constants, fix broken code

## 1.0.1 (2014-07-21)
 * Fixed bug for read dictionaries from streams. See https://bugs.php.net/bug.php?id=30936

## 1.0.0 (2014-07-07)
 * Update composer.json
 
## 0.3.7 (2009-10-15)
 * phpMorphy now work when mbstring overloads string functions, i.e. mbstring.func_overload  & 2 == 2
 
## 0.3.6 (2009-09-06)
 * getGramInfo(), getGramInfoMergeForms(), getAncode() returns distinct descriptors
 * Add new method castFormByAncode()
 * More accurate work with indeclinable words
 * castFormByPattern() now recieve grammems to compare for each part of speech
 
## 0.3.5 (2009-08-31)
 * Add new methods getGramInfo, getGramInfoMergeForms, getAllFormsWithAncodes, castFormByGramInfo, castFormByPattern
 * getAllFormsWithGramInfo signature changed, second argument is (bool)$asText now
 * New initialization options: use_ancodes_cache, resolve_ancodes
 * Add ancodes cache
 * Add ability to use phpMorphy <=> Dialing ancode ids mapping
 
## 0.3.4 (2009-08-23)
 * Fix bug in phpMorphy_WordForm::hasGrammems($grammems) when $grammems not array
 * Fix bug in phpMorphy_Shm_Cache::openSegement(), throws exception with invalid  message
 * Add missing files for generating dictionaries (/utils directory)
 
## 0.3.3 (2009-08-15)
 * Fix phpMorphy_Fsa::collect() in sparse mode
 * New methods in morphiers for access to Fsa_Interface from Finder, Morphier
 
## 0.3.2 (2009-04-08)
 * getWordFormsByXXX always return array
 
## 0.3.0 (2009-04-02)
 * new dictionaries format
 * mutliencoding support(need dictionary compilation)
 * added functionality for control of prediction process
 * new enhanced API for deep analisys
 * new query: getPartOfSpeech()
 * rewritten shared memory cache code
 
## 0.2.5 (2008-07-12)
 * Fixed bug: with_gramtab option have no effect; thanks to andreypaa
 
## 0.2.4 (2008-05-26)
 * Improve perfomance in bulk mode; thanks to Wicked
 * Fixed bug in shm storage type, with php5.2.6; thanks to berkut

## 0.2.3.2 (2008-04-08)
 * Fixed bug with disabled prediction(both) and bulk mode used

## 0.2.3.1 (2007-08-02)
 * Remove php4 stuff from fsa_state.php

## 0.2.3 (2007-08-02)
 * Remove all var stuff from source code(now really E_STRICT compatible, i hope =])
 * Rename all interfaces to {interface name}_Interface(old version is: phpMorphy_I{interface name})

## 0.2.2 (2007-06-24)
 * Remove php4 support
 * Fully E_STRICT compatible
 * Fix bug with getAllFormsWithGramInfo() in bulk mode

## 0.2.1 (2007-06-22)
 * getPseudoRoot() method returns now ;)
 * getAllFormsWithGramInfo() in bulk mode returns wrong result:
        BEFORE 0.2.1:
        -------------
        array(
            'TEST' => array(
                    'forms' => array(
                        'TEST' => array(word forms),
                    ),
                    'common' => common ancode OR grammem(s),
                    'all' => all gramcodes or grammems
                ),
                array(
                    'forms' => array(
                        WORD => array(forms)
                    ),
                    etc...
                )
            )
        )

        0.2.1:
        -------------
        array(
            'TEST' => array(
                array(
                    'forms' => array(word forms),
                    'common' => common ancode OR grammem(s),
                    'all' => all gramcodes or grammems
                ),
                array(
                    'forms' => array(word forms),
                    etc...
                )
            )
        )

## 0.2a (2007-04-05)
 * Change dictionary format(now word lookup have O(N) complexity, N = word len)
 * Introduce shared memory storage type
 * Speed up about 100%
 * Introduce bulk mode
 * Removed some options from facade

## 0.1a (2007-02-01)
 * The first public version.