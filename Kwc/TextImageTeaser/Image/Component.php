<?php
class Kwc_TextImageTeaser_Image_Component extends Kwc_Basic_Image_Component
{
    public static function getSettings()
    {
        $ret = parent::getSettings();
        $ret['imageCaption'] = true;
        return $ret;
    }
}

