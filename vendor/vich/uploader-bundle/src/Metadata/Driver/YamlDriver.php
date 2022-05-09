<?php

namespace Vich\UploaderBundle\Metadata\Driver;

final class YamlDriver extends AbstractYamlDriver
{
    protected function getExtension(): string
    {
        return 'yaml';
    }
}
