<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Empresa\EventosBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Table()
 * @ORM\Entity()
 */
class Event {
    
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
     * @ORM\Column(name="price", type="string", length=255)
     */
    private $price;
    
    /**          
     * @ORM\Column(name="award", type="string", length=255)
     */
    private $award;
    
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
    
    /**          
     * @ORM\Column(name="date", type="datetime")
     */
    
    private $date;
    
    /**          
     * @ORM\Column(name="dateUpload", type="datetime")
     */
    
    private $dateUpload;
    
    /**          
     * @ORM\Column(name="url", type="string", length=255)
     */
    
    private $url;
    
    /**          
     * @ORM\Column(name="author", type="string", length=255)
     */
    
    private $author;
    
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

    function getPrice() {
        return $this->price;
    }

    function getAward() {
        return $this->award;
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

    function setPrice($price) {
        $this->price = $price;
    }

    function setAward($award) {
        $this->award = $award;
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
    
    function getDate() {
        return $this->date;
    }

    function getDateUpload() {
        return $this->dateUpload;
    }

    function getUrl() {
        return $this->url;
    }

    function setDate($date) {
        $this->date = $date;
    }

    function setDateUpload($dateUpload) {
        $this->dateUpload = $dateUpload;
    }

    function setUrl($url) {
        $this->url = $url;
    }
    
    function getAuthor() {
        return $this->author;
    }

    function setAuthor($author) {
        $this->author = $author;
    }
}
