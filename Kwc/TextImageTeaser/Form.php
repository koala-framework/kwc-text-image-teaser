<?php
class Kwc_TextImageTeaser_Form extends Kwc_Abstract_Composite_Form
{
    protected function _initFields()
    {
        parent::_initFields();
        $colors = Kwc_Abstract::getSetting($this->getClass(), 'colors');

        $this->add(new Kwf_Form_Field_Select('color', trlKwf('Teaser Color')))
            ->setAllowBlank(true)
            ->setValues($colors);

    }
}

