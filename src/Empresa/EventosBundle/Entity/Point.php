<?php

namespace Empresa\EventosBundle\Entity;
use Doctrine\ORM\Mapping as ORM;


/**
 *
 * @ORM\Table()
 * @ORM\Entity()
 */
class Point {
    
     /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**          
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;
    
    /**          
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;
    
    
    /**          
     * @ORM\Column(name="latitude", type="float")
     */
    private $latitude;
    
    /**          
     * @ORM\Column(name="longitude", type="float")
     */
    private $longitude;
    
    /**          
     * @ORM\Column(name="thumbnail", type="string", length=255)
     */
    private $thumbnail;
    
    /**          
     * @ORM\Column(name="picture", type="string", length=255)
     */
    private $picture;
    
    /**          
     * @ORM\Column(name="marker", type="string", length=255)
     */
    
    private $marker;
    
    /**          
     * @ORM\Column(name="type", type="integer")
     */
    
    private $type;
    
    /**          
     * @ORM\Column(name="address", type="string", length=255)
     */
    
    private $address;
    
    /**          
     * @ORM\Column(name="locality", type="string", length=255)
     */
    
    private $locality;
    
    /**          
     * @ORM\Column(name="province", type="string", length=255)
     */
    
    private $province;
    
    /**          
     * @ORM\Column(name="country", type="string", length=255)
     */
    
    private $country;
    
    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function getDescription() {
        return $this->description;
    }

    function getLatitude() {
        return $this->latitude;
    }

    function getLongitude() {
        return $this->longitude;
    }

    function getThumbnail() {
        return $this->thumbnail;
    }

    function getPicture() {
        return $this->picture;
    }

    function getMarker() {
        return $this->marker;
    }

    function getType() {
        return $this->type;
    }

    function getAddress() {
        return $this->address;
    }

    function getLocality() {
        return $this->locality;
    }

    function getProvince() {
        return $this->province;
    }

    function getCountry() {
        return $this->country;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setLatitude($latitude) {
        $this->latitude = $latitude;
    }

    function setLongitude($longitude) {
        $this->longitude = $longitude;
    }

    function setThumbnail($thumbnail) {
        $this->thumbnail = $thumbnail;
    }

    function setPicture($picture) {
        $this->picture = $picture;
    }

    function setMarker($marker) {
        $this->marker = $marker;
    }

    function setType($type) {
        $this->type = $type;
    }

    function setAddress($address) {
        $this->address = $address;
    }

    function setLocality($locality) {
        $this->locality = $locality;
    }

    function setProvince($province) {
        $this->province = $province;
    }

    function setCountry($country) {
        $this->country = $country;
    }


}
