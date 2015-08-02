<?php

namespace web\web_services;

require_once __DIR__ . '/../../Settings.php';

use MToolkit\Network\RPC\Json\Server\MRPCJsonWebService;

class ColorWebService extends MRPCJsonWebService
{

    public function rgbToHex( $params )
    {
        $rgb = $params['color'];
        $rgbParts = explode( ",", $rgb );
        
        $red = $this->toHex( $rgbParts[0] );
        $green = $this->toHex( $rgbParts[1] );
        $blue = $this->toHex( $rgbParts[2] );

        if( $red === false || $green === false || $blue === false )
        {
            $this->getResponse()->setResult( array(
                'result_text' => ''
                , 'isValid' => false
            ) );
            return;
        }

        $this->getResponse()->setResult( array(
            'result_text' => '#'.$red.$green.$blue
            , 'isValid' => true
        ) );
    }

    public function hexToRgb( $params )
    {
        $color = $params['color'];
        $opacity = $params['opacity'];

        $default = 'rgb(0,0,0)';

        //Return default if no color provided
        if( empty( $color ) )
        {
            $this->getResponse()->setResult( array(
                'result_text' => ''
                , 'isValid' => false
            ) );
            return;
        }

        //Sanitize $color if "#" is provided 
        if( $color[0] == '#' )
        {
            $color = substr( $color, 1 );
        }

        //Check if color has 6 or 3 characters and get values
        if( strlen( $color ) == 6 )
        {
            $hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
        }
        elseif( strlen( $color ) == 3 )
        {
            $hex = array( $color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2] );
        }
        else
        {
            return $default;
        }

        //Convert hexadec to rgb
        $rgb = array_map( 'hexdec', $hex );

        //Check if opacity is set(rgba or rgb)
        if( $opacity )
        {
            if( abs( $opacity ) > 1 )
            {
                $opacity = 1.0;
            }
            $output = 'rgba(' . implode( ",", $rgb ) . ',' . $opacity . ')';
        }
        else
        {
            $output = 'rgb(' . implode( ",", $rgb ) . ')';
        }

        //Return rgb(a) color string
        $this->getResponse()->setResult( array(
            'result_text' => $output
            , 'isValid' => true
        ) );
    }

    private function toHex( $n )
    {
        $intValue = intval( $n );
        if( !$intValue && $n!='0' )
        {
            return false;
        }
        
        $intValue = max( 0, min( $intValue, 255 ) ); // make sure the $n is not bigger than 255 and not less than 0     
        
        $index1 = (int) ($intValue - ($intValue % 16)) / 16;
        $index2 = (int) $intValue % 16;

        return substr( "0123456789ABCDEF", $index1, 1 ) . substr( "0123456789ABCDEF", $index2, 1 );
    }

}
