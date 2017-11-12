<?php


namespace Dark\SushiServiceBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Description of MemoryImage
 *
 * @author Ankitesh Kushwaha
 */

/**
 * @ORM\Entity
 * @ORM\Table(name="MEMORY_IMAGE")
 */
class MemoryImage
{
   /**
    *@ORM\Column(type="integer",name="ID")
    *@ORM\Id
    *@ORM\GeneratedValue(strategy="AUTO")
    **/
    private $id;

    /**
     * @ORM\Column(type="integer",name="IMAGE_NO")
     */
    private $imageNo;

    /**
     * @ORM\Column(type="string",name="IMAGE_NAME",length=300)
     */
    private $imageName;

    /**
     * @ORM\Column(type="text",name="IMAGE_DESC")
     */
    private $imageDesc;

    function getId() {
        return $this->id;
    }

    function getImageNo() {
        return $this->imageNo;
    }

    function getImageName() {
        return $this->imageName;
    }

    function getImageDesc() {
        return $this->imageDesc;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setImageNo($imageNo) {
        $this->imageNo = $imageNo;
    }

    function setImageName($imageName) {
        $this->imageName = $imageName;
    }

    function setImageDesc($imageDesc) {
        $this->imageDesc = $imageDesc;
    }




}
