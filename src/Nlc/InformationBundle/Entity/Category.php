<?php

namespace Nlc\InformationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 *
 * @ORM\Table(name="categorytable")
 * @ORM\Entity(repositoryClass="Nlc\InformationBundle\Repository\CategoryRepository")
 */
class Category
{
    /**
     * @ORM\OneToMany(targetEntity="Employee",mappedBy="category")
     */
    public  $employees;

    public function __toString()
    {
        return $this->getCategory()?$this->getCategory() : '无类别数据';
    }

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="category", type="string", length=255)
     */
    private $category;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set category
     *
     * @param string $category
     *
     * @return Category
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }
}

