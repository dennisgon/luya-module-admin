<?php

namespace admin\ngrest\plugins;

class Textarea extends \admin\ngrest\base\Plugin
{
    public function renderList($doc)
    {
        $elmn = $doc->createElement('span', '{{item.'.$this->name.'}}');
        $doc->appendChild($elmn);

        return $doc;
    }

    public function renderCreate($doc)
    {
        $elmn = $doc->createElement('zaa-textarea');
        $elmn->setAttribute('id', $this->id);
        $elmn->setIdAttribute('id', true);
        $elmn->setAttribute('model', $this->ngModel);
        $elmn->setAttribute('label', $this->alias);
        $elmn->setAttribute('grid', $this->gridCols);
        $doc->appendChild($elmn);
        return $doc;
    }

    public function renderUpdate($doc)
    {
        return $this->renderCreate($doc);
    }
}
