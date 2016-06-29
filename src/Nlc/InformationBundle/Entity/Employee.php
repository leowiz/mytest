<?php

namespace Nlc\InformationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Employee
 *
 * @ORM\Table(name="employeetable")
 * @ORM\Entity(repositoryClass="Nlc\InformationBundle\Repository\EmployeeRepository")
 */
class Employee
{
    /**
     * @ORM\ManyToOne(targetEntity="Category",inversedBy="employees")
     * @ORM\JoinColumn(name="categoryid", referencedColumnName="id")
     */
    public $category;

    /**
     * @ORM\PrePersist
     */
    public function setCreatetimeValue()
    {
        if(!$this->getCreatetime()) {
            $this->createtime = new \DateTime();
        }
    }

    /**
     * @ORM\PreUpdate
     */
    public function setUpdatetimeValue()
    {
        $this->updatetime = new \DateTime();
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="age", type="integer")
     */
    private $age;

    /**
     * @var string
     *
     * @ORM\Column(name="sex", type="string", length=255)
     */
    private $sex;

    /**
     * @var string
     *
     * @ORM\Column(name="education", type="string", length=255)
     */
    private $education;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=255)
     */
    private $photo;

    /**
     * @var string
     *
     * @ORM\Column(name="file", type="string", length=255)
     */
    private $file;

    /**
     * @var int
     *
     * @ORM\Column(name="categoryid", type="integer")
     */
    private $categoryid;

    /**
     * @var string
     *
     * @ORM\Column(name="createtime", type="string", length=255)
     */
    private $createtime;

    /**
     * @var string
     *
     * @ORM\Column(name="updatetime", type="string", length=255)
     */
    private $updatetime;


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
     * Set name
     *
     * @param string $name
     *
     * @return Employee
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set age
     *
     * @param integer $age
     *
     * @return Employee
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set sex
     *
     * @param string $sex
     *
     * @return Employee
     */
    public function setSex($sex)
    {
        $this->sex = $sex;

        return $this;
    }

    /**
     * Get sex
     *
     * @return string
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Set education
     *
     * @param string $education
     *
     * @return Employee
     */
    public function setEducation($education)
    {
        $this->education = $education;

        return $this;
    }

    /**
     * Get education
     *
     * @return string
     */
    public function getEducation()
    {
        return $this->education;
    }

    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return Employee
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set file
     *
     * @param string $file
     *
     * @return Employee
     */
    public function setFile($file)
    {
        $this->file = $file;

        return $this;
    }

    /**
     * Get file
     *
     * @return string
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Set categoryid
     *
     * @param integer $categoryid
     *
     * @return Employee
     */
    public function setCategoryid($categoryid)
    {
        $this->categoryid = $categoryid;

        return $this;
    }

    /**
     * Get categoryid
     *
     * @return int
     */
    public function getCategoryid()
    {
        return $this->categoryid;
    }

    /**
     * Set createtime
     *
     * @param string $createtime
     *
     * @return Employee
     */
    public function setCreatetime($createtime)
    {
        $this->createtime = $createtime;

        return $this;
    }

    /**
     * Get createtime
     *
     * @return string
     */
    public function getCreatetime()
    {
        return $this->createtime;
    }

    /**
     * Set updatetime
     *
     * @param string $updatetime
     *
     * @return Employee
     */
    public function setUpdatetime($updatetime)
    {
        $this->updatetime = $updatetime;

        return $this;
    }

    /**
     * Get updatetime
     *
     * @return string
     */
    public function getUpdatetime()
    {
        return $this->updatetime;
    }
}

