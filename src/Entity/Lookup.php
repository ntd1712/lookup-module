<?php

namespace Chaos\Modules\Lookup\Entity;

/**
 * Class Lookup.
 *
 * A basic Lookup domain class.
 *
 * @Doctrine\ORM\Mapping\Entity(repositoryClass="Chaos\Modules\Lookup\LookupRepository")
 * @Doctrine\ORM\Mapping\EntityListeners({"Chaos\Modules\Lookup\LookupListener"})
 * @Doctrine\ORM\Mapping\Table(name="lookups")
 */
class Lookup
{
    /**
     * @JMS\Serializer\Annotation\Type("int")
     *
     * @Doctrine\ORM\Mapping\Id
     * @Doctrine\ORM\Mapping\GeneratedValue
     * @Doctrine\ORM\Mapping\Column(name="id", type="integer")
     */
    private $Id;

    /**
     * @JMS\Serializer\Annotation\Type("string")
     *
     * @Doctrine\ORM\Mapping\Column(name="`group`", type="string", nullable=true)
     */
    private $Group;

    /**
     * @JMS\Serializer\Annotation\Type("string")
     *
     * @Doctrine\ORM\Mapping\Column(name="name", type="string")
     */
    private $Name;

    /**
     * @JMS\Serializer\Annotation\Type("string")
     *
     * @Doctrine\ORM\Mapping\Column(name="value", type="string")
     */
    private $Value;

    /**
     * @JMS\Serializer\Annotation\Type("int")
     *
     * @Doctrine\ORM\Mapping\Column(name="sort_order", type="integer", nullable=true)
     */
    private $SortOrder;

    /**
     * @JMS\Serializer\Annotation\Type("bool")
     *
     * @Doctrine\ORM\Mapping\Column(name="not_use", type="boolean", nullable=true)
     */
    private $NotUse = false;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param int $id Value.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->Id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getGroup()
    {
        return $this->Group;
    }

    /**
     * @param string $group Value.
     *
     * @return $this
     */
    public function setGroup($group)
    {
        $this->Group = $group;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param string $name Value.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->Name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->Value;
    }

    /**
     * @param string $value Value.
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->Value = $value;

        return $this;
    }

    /**
     * @return int
     */
    public function getSortOrder()
    {
        return $this->SortOrder;
    }

    /**
     * @param int $sortOrder Value.
     *
     * @return $this
     */
    public function setSortOrder($sortOrder)
    {
        $this->SortOrder = $sortOrder;

        return $this;
    }

    /**
     * @return bool
     */
    public function isNotUse()
    {
        return $this->NotUse;
    }

    /**
     * @param bool $notUse Value.
     *
     * @return $this
     */
    public function setNotUse($notUse)
    {
        $this->NotUse = $notUse;

        return $this;
    }
}
