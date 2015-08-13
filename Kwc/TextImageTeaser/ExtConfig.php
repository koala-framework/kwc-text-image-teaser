<?php
class Kwc_TextImageTeaser_ExtConfig extends Kwf_Component_Abstract_ExtConfig_Form
{
    protected function _getConfig()
    {
        $ret = parent::_getConfig();
        $ret['form']['title'] = trlKwf('Teaser Settings');
        return $ret;
    }
}

