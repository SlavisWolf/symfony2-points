<?php


namespace Empresa\EventosBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Table()
 * @ORM\Entity()
 */
class Track {
    
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**          
     * @ORM\Column(name="sizeInBytes", type="integer")
     */
    private $sizeInBytes;
    
    /**          
     * @ORM\Column(name="humanReadableSize", type="string", length=255)
     */
    private $humanReadableSize;
    
    /**          
     * @ORM\Column(name="filePath", type="string", length=255)
     */
    private $filePath;
    
    /**          
     * @ORM\Column(name="fileName", type="string", length=255)
     */
    private $fileName;
    
    /**          
     * @ORM\Column(name="restricted", type="boolean")
     */
    private $restricted;
    
    /**          
     * @ORM\Column(name="host", type="string", length=255)
     */
    private $host;
    
    /**          
     * @ORM\Column(name="link", type="string", length=255)
     */
    private $link;
    
    /**          
     * @ORM\Column(name="numLikes", type="integer")
     */
    private $numLikes;
    
    function getId() {
        return $this->id;
    }

    function getSizeInBytes() {
        return $this->sizeInBytes;
    }

    function getHumanReadableSize() {
        return $this->humanReadableSize;
    }

    function getFilePath() {
        return $this->filePath;
    }

    function getFileName() {
        return $this->fileName;
    }

    function getRestricted() {
        return $this->restricted;
    }

    function getHost() {
        return $this->host;
    }

    function getLink() {
        return $this->link;
    }

    function getNumLikes() {
        return $this->numLikes;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setSizeInBytes($sizeInBytes) {
        $this->sizeInBytes = $sizeInBytes;
    }

    function setHumanReadableSize($humanReadableSize) {
        $this->humanReadableSize = $humanReadableSize;
    }

    function setFilePath($filePath) {
        $this->filePath = $filePath;
    }

    function setFileName($fileName) {
        $this->fileName = $fileName;
    }

    function setRestricted($restricted) {
        $this->restricted = $restricted;
    }

    function setHost($host) {
        $this->host = $host;
    }

    function setLink($link) {
        $this->link = $link;
    }

    function setNumLikes($numLikes) {
        $this->numLikes = $numLikes;
    }

}
