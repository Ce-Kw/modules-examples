<?php

namespace Examples\PostTypeDefinition;

use CEKW\WpPluginFramework\Core\Module\AbstractModule;

class PostTypeDefinition extends AbstractModule
{
    public function init():AbstractModule{
        $this
            ->addPostType(new MyPostType())
        ;
        return $this;
    }
}