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

namespace Novactive\Bundle\FormBuilderBundle\Entity\Field;

use Doctrine\ORM\Mapping as ORM;
use Novactive\Bundle\FormBuilderBundle\Entity\Field;

/**
 * @ORM\Entity
 */
class TextLine extends Field
{
    public function getMinLength(): int
    {
        return (int) $this->getOption('minLength');
    }

    public function setMinLength(int $minLength): self
    {
        $this->setOption('minLength', $minLength);

        return $this;
    }

    public function getMaxLength(): int
    {
        return (int) $this->getOption('maxLength');
    }

    public function setMaxLength(int $maxLength): self
    {
        $this->setOption('maxLength', $maxLength);

        return $this;
    }
}
