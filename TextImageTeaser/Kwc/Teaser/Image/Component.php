<?php
class TextImageTeaser_Kwc_Teaser_Image_Component extends Kwc_Basic_Image_Component
{
    public static function getSettings()
    {
        $ret = parent::getSettings();
        $ret['dimensions'] = array(
            'default'=>array(
                'text' => trlKwfStatic('full width'),
                'width' => self::CONTENT_WIDTH,
                'height' => 0,
                'cover' => true
            ),
            '16to9'=>array(
                'text' => trlKwfStatic('full width').' 16:9',
                'width' => self::CONTENT_WIDTH,
                'cover' => true,
                'aspectRatio' => 9/16
            ),
            '4to3'=>array(
                'text' => trlKwfStatic('full width').' 4:3',
                'width' => self::CONTENT_WIDTH,
                'cover' => true,
                'aspectRatio' => 3/4
            )
        );

        $ret['imageCaption'] = true;
        return $ret;
    }
}

