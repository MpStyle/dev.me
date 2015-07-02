<?php
namespace web\localizations;

use business_logic\localization\LocalizationBook;
use MToolkit\Core\MTranslator;
use MToolkit\Core\MTranslatorFileType;

class Localization
{
    const DEFAULT_LOCALIZATION = 'en';

    /**
     * @var MTranslator
     */
    private static $translator = null;

    private static function getTranslator( $lang )
    {
        if( self::$translator == null )
        {
            self::$translator = new MTranslator();

            self::$translator->addTranslationFile( __DIR__ . '/' . $lang . '.json', $lang, MTranslatorFileType::JSON );
        }

        return self::$translator;
    }

    public static function getString( $key, $default = null )
    {
        if( LocalizationBook::getLocalization() == null )
        {
            LocalizationBook::setLocalization( Localization::DEFAULT_LOCALIZATION );
        }

        $localization = LocalizationBook::getLocalization();
        $string = self::getTranslator( $localization )->translate( $localization, $key );

        if( $string === null )
        {
            if( $default === null )
            {
                return self::getTranslator()->translate( Localization::DEFAULT_LOCALIZATION, $key );
            }

            return $default;
        }

        return $string;
    }

}
