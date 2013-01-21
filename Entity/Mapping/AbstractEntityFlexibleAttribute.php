<?php
namespace Oro\Bundle\FlexibleEntityBundle\Entity\Mapping;

use Oro\Bundle\FlexibleEntityBundle\Model\AbstractFlexible;
use Oro\Bundle\FlexibleEntityBundle\Model\AbstractFlexibleValue;
use Oro\Bundle\FlexibleEntityBundle\Model\AbstractAttribute;
use Oro\Bundle\FlexibleEntityBundle\Model\AbstractAttributeOption;
use Doctrine\ORM\Mapping as ORM;

/**
 * Base Doctrine ORM entity attribute (aims to add some custom properties for a attributes of a dedicated flexible)
 *
 * @author    Nicolas Dupont <nicolas@akeneo.com>
 * @copyright 2012 Akeneo SAS (http://www.akeneo.com)
 * @license   http://opensource.org/licenses/MIT  MIT
 *
 */
abstract class AbstractEntityFlexibleAttribute
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var AbstractEntityAttribute
     *
     * @ORM\OneToOne(targetEntity="AbstractEntityAttribute", cascade={"persist", "merge", "remove"})
     * @ORM\JoinColumn(name="attribute_id", referencedColumnName="id")
     */
    protected $attribute;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set id
     *
     * @param integer $id
     *
     * @return AbstractEntityFlexibleAttribute
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get attribute
     *
     * @return AbstractEntityAttribute
     */
    public function getAttribute()
    {
        return $this->attribute;
    }

    /**
     * Set attribute
     *
     * @param AbstractEntityAttribute $attribute
     *
     * @return AbstractEntityFlexibleAttribute
     */
    public function setAttribute(AbstractEntityAttribute $attribute = null)
    {
        $this->attribute = $attribute;

        return $this;
    }

    /**
     * Set code (base attribute shortcut)
     *
     * @param string $code
     *
     * @return AbstractEntityFlexibleAttribute
     */
    public function setCode($code)
    {
        $this->attribute->setCode($code);

        return $this;
    }

    /**
     * Get code (base attribute shortcut)
     *
     * @return string
     */
    public function getCode()
    {
        return $this->attribute->getCode();
    }

    /**
     * Set type (base attribute shortcut)
     *
     * @param string $type
     *
     * @return AbstractEntityFlexibleAttribute
     */
    public function setBackendType($type)
    {
        $this->attribute->setBackendType($type);

        return $this;
    }

    /**
     * Get type (base attribute shortcut)
     *
     * @return string
     */
    public function getBackendType()
    {
        return $this->attribute->getBackendType();
    }

    /**
     * Set required (base attribute shortcut)
     *
     * @param boolean $required
     *
     * @return AbstractEntityFlexibleAttribute
     */
    public function setRequired($required)
    {
        $this->attribute->setRequired($required);

        return $this;
    }

    /**
     * Get required (base attribute shortcut)
     *
     * @return boolean $required
     */
    public function getRequired()
    {
        return $this->attribute->getRequired();
    }

    /**
     * Set unique (base attribute shortcut)
     *
     * @param boolean $unique
     *
     * @return AbstractEntityFlexibleAttribute
     */
    public function setUnique($unique)
    {
        $this->attribute->setUnique($unique);

        return $this;
    }

    /**
     * Get unique (base attribute shortcut)
     *
     * @return boolean $unique
     */
    public function getUnique()
    {
        return $this->attribute->getUnique();
    }

    /**
     * Set default value (base attribute shortcut)
     *
     * @param string $default
     *
     * @return AbstractEntityFlexibleAttribute
     */
    public function setDefaultValue($default)
    {
        $this->attribute->setDefaultValue($default);

        return $this;
    }

    /**
     * Get default value (base attribute shortcut)
     *
     * @return string $unique
     */
    public function getDefaultValue()
    {
        return $this->attribute->getDefaultValue();
    }

    /**
     * Set searchable (base attribute shortcut)
     *
     * @param boolean $searchable
     *
     * @return AbstractEntityFlexibleAttribute
     */
    public function setSearchable($searchable)
    {
        $this->attribute->setSearchable($searchable);

        return $this;
    }

    /**
     * Get searchable (base attribute shortcut)
     *
     * @return boolean $searchable
     */
    public function getSearchable()
    {
        return $this->attribute->getSearchable();
    }

    /**
     * Set translatable (base attribute shortcut)
     *
     * @param boolean $translatable
     *
     * @return AbstractEntityFlexibleAttribute
     */
    public function setTranslatable($translatable)
    {
        $this->attribute->setTranslatable($translatable);

        return $this;
    }

    /**
     * Get translatable (base attribute shortcut)
     *
     * @return boolean $translatable
     */
    public function getTranslatable()
    {
        return $this->attribute->getTranslatable();
    }

    /**
     * Set scopable (base attribute shortcut)
     *
     * @param boolean $scopable
     *
     * @return AbstractEntityFlexibleAttribute
     */
    public function setScopable($scopable)
    {
        $this->attribute->setScopable($scopable);

        return $this;
    }

    /**
     * Get scopable (base attribute shortcut)
     *
     * @return boolean $scopable
     */
    public function getScopable()
    {
        return $this->attribute->getScopable();
    }

    /**
     * Add option
     *
     * @param AbstractAttributeOption $option
     *
     * @return AbstractEntityFlexibleAttribute
     */
    public function addOption(AbstractAttributeOption $option)
    {
        $this->attribute->addOption($option);

        return $this;
    }

    /**
     * Remove option
     *
     * @param AbstractAttributeOption $option
     *
     * @return AbstractEntityFlexibleAttribute
     */
    public function removeOption(AbstractAttributeOption $option)
    {
        $this->attribute->removeOption($option);

        return $this;
    }

    /**
     * Get options
     *
     * @return \ArrayAccess
     */
    public function getOptions()
    {
        return $this->attribute->getOptions();
    }

}
