<?php
namespace business_logic\localization;

use MToolkit\Network\MNetworkSession;

class LocalizationBook
{
    const LOCALIZATION = "BusinessLogic\Language\LanguageBook\Localization";

    /**
     * @param string $localization
     */
    public static function setLocalization( $localization )
    {
        MNetworkSession::set( self::LOCALIZATION, $localization );
    }

    /**
     * @return string|null
     */
    public static function getLocalization()
    {
        return MNetworkSession::get( self::LOCALIZATION );
    }
}
