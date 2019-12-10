<?php
class TextImageTeaser_Kwc_Teaser_Component extends Kwc_Abstract_Composite_Component
{
    public static function getSettings($param = null)
    {
        $ret = parent::getSettings($param);
        $ret['componentName'] = trlKwfStatic('Teaser with Image');
        $ret['generators']['child']['component']['image'] = 'TextImageTeaser_Kwc_Teaser_Image_Component';
        $ret['generators']['child']['component']['text'] = 'Kwc_Basic_Text_Component';
        $ret['generators']['child']['component']['link'] = 'Kwc_Basic_LinkTag_Component';
        $ret['extConfig'] = 'TextImageTeaser_Kwc_Teaser_ExtConfig';
        $ret['ownModel'] = 'TextImageTeaser_Kwc_Teaser_Model';
        $ret['cssClass'] = 'webStandard';

        $ret['colors'] = array(
            'none' => trlKwfStatic('None'),
            'white' => trlKwfStatic('White'),
            'grey' => trlKwfStatic('Grey')
        );
        return $ret;
    }

    public function getTemplateVars(Kwf_Component_Renderer_Abstract $renderer)
    {
        $ret = parent::getTemplateVars($renderer);
        $ret['color'] = $this->getRow()->color;
        return $ret;
    }
}
