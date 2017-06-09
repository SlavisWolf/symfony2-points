<?php



namespace Empresa\EventosBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Table()
 * @ORM\Entity()
 */
class UserLike {
    
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**          
     * @ORM\Column(name="userId", type="string", length=255)
     */
    private $userId;
    
    /**          
     * @ORM\Column(name="trackId", type="string", length=255)
     */
    private $trackId;
    
    /**          
     * @ORM\Column(name="date", type="bigint")
     */
    private $date;
    
    function getId() {
        return $this->id;
    }

    function getUserId() {
        return $this->userId;
    }

    function getTrackId() {
        return $this->trackId;
    }

    function getDate() {
        return $this->date;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setUserId($userId) {
        $this->userId = $userId;
    }

    function setTrackId($trackId) {
        $this->trackId = $trackId;
    }

    function setDate($date) {
        $this->date = $date;
    }


}
