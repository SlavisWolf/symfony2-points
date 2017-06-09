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
class User {
    
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**          
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;
    
    /**          
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;
    
    /**          
     * @ORM\Column(name="facebookId", type="string", length=255)
     */
    private $facebookId;
    
    /**          
     * @ORM\Column(name="fullName", type="string", length=255)
     */
    private $fullname;
    
    /**          
     * @ORM\Column(name="nickname", type="string", length=255)
     */
    private $nickname;
    
    /**          
     * @ORM\Column(name="thumbnail", type="string", length=255)
     */
    private $thumbnail;
    
    /**          
     * @ORM\Column(name="imagePath", type="string", length=255)
     */
    private $imagePath;
    
    /**          
     * @ORM\Column(name="deviceId", type="string", length=255)
     */
    private $deviceId;
    
    /**          
     * @ORM\Column(name="token", type="string", length=255)
     */
    private $token;
    
    /**          
     * @ORM\Column(name="country", type="string", length=255)
     */
    private $country;
    
    /**          
     * @ORM\Column(name="locality", type="string", length=255)
     */
    private $locality;
    
    /**          
     * @ORM\Column(name="province", type="string", length=255)
     */
    private $province;
    
    /**          
     * @ORM\Column(name="gender", type="string", length=255)
     */
    private $gender;
    
    function getId() {
        return $this->id;
    }

    function getEmail() {
        return $this->email;
    }

    function getPassword() {
        return $this->password;
    }

    function getFacebookId() {
        return $this->facebookId;
    }

    function getFullname() {
        return $this->fullname;
    }

    function getNickname() {
        return $this->nickname;
    }

    function getThumbnail() {
        return $this->thumbnail;
    }

    function getImagePath() {
        return $this->imagePath;
    }

    function getDeviceId() {
        return $this->deviceId;
    }

    function getToken() {
        return $this->token;
    }

    function getCountry() {
        return $this->country;
    }

    function getLocality() {
        return $this->locality;
    }

    function getProvince() {
        return $this->province;
    }

    function getGender() {
        return $this->gender;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setFacebookId($facebookId) {
        $this->facebookId = $facebookId;
    }

    function setFullname($fullname) {
        $this->fullname = $fullname;
    }

    function setNickname($nickname) {
        $this->nickname = $nickname;
    }

    function setThumbnail($thumbnail) {
        $this->thumbnail = $thumbnail;
    }

    function setImagePath($imagePath) {
        $this->imagePath = $imagePath;
    }

    function setDeviceId($deviceId) {
        $this->deviceId = $deviceId;
    }

    function setToken($token) {
        $this->token = $token;
    }

    function setCountry($country) {
        $this->country = $country;
    }

    function setLocality($locality) {
        $this->locality = $locality;
    }

    function setProvince($province) {
        $this->province = $province;
    }

    function setGender($gender) {
        $this->gender = $gender;
    }


}
