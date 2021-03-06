<?php
/**
 * NovaFormBuilder Bundle.
 *
 * @package   Novactive\Bundle\FormBuilderBundle
 *
 * @author    Novactive <s.morel@novactive.com>
 * @author    Novactive <f.alexandre@novactive.com>
 * @copyright 2018 Novactive
 * @license   https://github.com/Novactive/NovaFormBuilderBundle/blob/master/LICENSE MIT Licence
 */

declare(strict_types=1);

namespace Novactive\Bundle\FormBuilderBundle\Entity\Field;

use Doctrine\ORM\Mapping as ORM;
use Novactive\Bundle\FormBuilderBundle\Entity\Field;

/**
 * @ORM\Entity
 */
class File extends Field
{
    public function getFileType(): string
    {
        return (string) $this->getOption('fileType');
    }

    public function setFileType(string $fileType): self
    {
        $this->setOption('fileType', $fileType);

        return $this;
    }

    public function getMaxFileSizeMb(): float
    {
        return (int) $this->getOption('maxFileSizeMb');
    }

    public function setMaxFileSizeMb(float $maxFileSizeMb): self
    {
        $this->setOption('maxFileSizeMb', $maxFileSizeMb);

        return $this;
    }

    public function getValue()
    {
        return $this->value ?? null;
    }
}
