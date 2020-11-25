<?php

namespace Examples\PostTypeDefinition;

use CEKW\WpPluginFramework\Core\ContentType\MetaBox;
use CEKW\WpPluginFramework\Core\ContentType\PostType;

class MyPostType extends PostType
{
    public function init()
    {
        $this
            ->setLabelName('MyPostType')
            ->setLabelAddNewItem('add new MyPostType')
            ->setLabelAddNew('add new')
            ->setLabelSingularName('MyPostType')
            ->setLabelMenuName('MyPostType')
            ->setIsPublic(true)
            ->addSupports('custom-fields')
        ;
    }
}