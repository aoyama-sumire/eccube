<?php

namespace Customize\Entity;

use Doctrine\ORM\Mapping as ORM;
use Eccube\Annotation\EntityExtension;
use Eccube\Annotation\FormAppend;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @EntityExtension("Eccube\Entity\Product")
 */
Trait ProductTrait
{
    /**
     * @var string
     *
     * @ORM\Column(name="subtitle", type="string", length=255)
     * @FormAppend
     * @Assert\Length(max = 255)
     * 
     */
    private $subtitle;

    /**
     * Set subtitle.
     * 
     * @param string $subtitle
     * 
     * @return ProductTrait
     */
    public function setSubtitle($subtitle)
    {
        $this->subtitle = $subtitle;

        return $this;
    }

    /**
     * Get subtitle.
     *
     * @return string
     */
    public function getSubtitle()
    {
        return $this->subtitle;
    }


}