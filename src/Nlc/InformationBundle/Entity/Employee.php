<?php

namespace Nlc\InformationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Employee
 *
 * @ORM\Table(name="employeetable")
 * @ORM\Entity(repositoryClass="Nlc\InformationBundle\Repository\EmployeeRepository")
 * @ORM\HasLifecycleCallbacks()
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
     * @ORM\Column(name="photopath", type="string", length=255)
     */
    private $photopath;

    /**
     * @var string
     *
     * @ORM\Column(name="jlpath", type="string", length=255)
     */
    private $jlpath;

    /**
     * @var int
     *
     * @ORM\Column(name="categoryid", type="integer")
     */
    private $categoryid;

    /**
     * @var string
     *
     * @ORM\Column(name="createtime", type="datetime")
     */
    private $createtime;

    /**
     * @var string
     *
     * @ORM\Column(name="updatetime", type="datetime")
     */
    private $updatetime;

    private $photouniqid;

    private $jlfileuniqid;

    /**
     * @Assert\File(maxSize="6000000")
     */
    private $photofile;

    /**
     * @Assert\File(maxSize="6000000")
     */
    private $jlfile;

    /**
     * Sets photofile.
     *
     * @param UploadedFile $photofile
     */
    public function setPhotofile(UploadedFile $photofile = null)
    {
        $this->photofile = $photofile;
    }

    /**
     * Get photofile.
     *
     * @return UploadedFile
     */
    public function getPhotofile()
    {
        return $this->photofile;
    }

    /**
     * Sets jlfile.
     *
     * @param UploadedFile $jlfile
     */
    public function setJlfile(UploadedFile $jlfile = null)
    {
        $this->jlfile = $jlfile;

    }

    /**
     * Get jlfile.
     *
     * @return UploadedFile
     */
    public function getJlfile()
    {
        return $this->jlfile;
    }

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
     * Set photopath
     *
     * @param string $photopath
     *
     * @return Employee
     */
    public function setPhotopath($photopath)
    {
        $this->photopath = $photopath;

        return $this;
    }

    /**
     * Get Photopath
     *
     * @return string
     */
    public function getPhotopath()
    {
        return $this->photopath;
    }

    /**
     * Set jlpath
     *
     * @param string $jlpath
     *
     * @return Employee
     */
    public function setJlpath($jlpath)
    {
        $this->jlpath = $jlpath;

        return $this;
    }

    /**
     * Get Jlpath
     *
     * @return string
     */
    public function getJlpath()
    {
        return $this->jlpath;
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
     * @param \DateTime $createtime
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
     * @return \DateTime
     */
    public function getCreatetime()
    {
        return $this->createtime;
    }

    /**
     * Set updatetime
     *
     * @param \DateTime $updatetime
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
     * @return \DateTime
     */
    public function getUpdatetime()
    {
        return $this->updatetime;
    }

    protected function getRootDir()
    {
        // the absolute directory path where uploaded
        // documents should be saved
        return __DIR__.'/../../../../web/';
    }

    protected function getUploadRootDir()
    {
        // the absolute directory path where uploaded
        // documents should be saved
        return $this->getRootDir().$this->getUploadDir();
    }
    protected function getUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return 'uploads/documents';
    }

    ///////////////////////
    /**
     * @ORM\PrePersist
     * @ORM\PreUpdate
     */
    public function preUpload()
    {
        $this->photouniqid=uniqid();
        $this->jlfileuniqid=uniqid();

        if (null !== $this->getPhotofile()) {
            $this->photopath = $this->getUploadDir()."/".$this->photouniqid.'photo.'.$this->getPhotofile()->guessExtension();
        }
        if (null !== $this->getJlfile()) {
            $this->jlpath = $this->getUploadDir()."/".$this->jlfileuniqid.'jlfile.'.$this->getJlfile()->guessExtension();
        }
    }

    ////////////////////////
    /**
     * @ORM\PostPersist
     * @ORM\PostUpdate
     */
    public function photoupload()
    {
        //判断是否上传文件是否成功
        if (null === $this->getPhotofile()) {
            return;
        }

        //完成文件上传
        $this->getPhotofile()->move(
            $this->getUploadRootDir(),
            $this->photouniqid.'photo.'.$this->getPhotofile()->guessExtension()
        );

        $this->setPhotofile(null);
    }

    /**
     * @ORM\PostPersist
     * @ORM\PostUpdate
     */
    public function jlupload()
    {
        if (null === $this->getJlfile()) {
            return;
        }


        $this->getJlfile()->move(
            $this->getUploadRootDir(),
            $this->jlfileuniqid.'jlfile.'.$this->getJlfile()->guessExtension()
        );

        $this->setJlpath(null);
    }

    ////////////////////
    /**
     * @ORM\PostRemove
     */
    public function removeUpload()
    {
        if(file_exists($this->photopath)) {
            unlink($this->getRootDir().$this->photopath);
        }
        if(file_exists($this->jlpath)) {
            unlink($this->getRootDir().$this->jlpath);
        }
    }
}

