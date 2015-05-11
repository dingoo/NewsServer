<?php
/**
 * Created by PhpStorm.
 * User: dingoogle
 * Date: 2015-04-15
 * Time: 16:58
 */

class UserInfo {

    public $userid=0;
    public $username="";
    public $password="";
    public $usericon="";
    public $nickname="";
    public $city="";
    public $phonenum="";

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * @param string $nickname
     */
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;
    }

    /**
     * @return string
     */
    public function getPhonenum()
    {
        return $this->phonenum;
    }

    /**
     * @param string $phonenum
     */
    public function setPhonenum($phonenum)
    {
        $this->phonenum = $phonenum;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getUsericon()
    {
        return $this->usericon;
    }

    /**
     * @param string $usericon
     */
    public function setUsericon($usericon)
    {
        $this->usericon = $usericon;
    }

    /**
     * @return int
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * @param int $userid
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }
} 