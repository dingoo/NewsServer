<?php

class Comment {

    public $id=0;
    public $newsid=0;
    public $usersid=0;
    public $is_colletion=false;
    public $content="";
    public $time="";

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return boolean
     */
    public function isIsColletion()
    {
        return $this->is_colletion;
    }

    /**
     * @param boolean $is_colletion
     */
    public function setIsColletion($is_colletion)
    {
        $this->is_colletion = $is_colletion;
    }

    /**
     * @return int
     */
    public function getNewsid()
    {
        return $this->newsid;
    }

    /**
     * @param int $newsid
     */
    public function setNewsid($newsid)
    {
        $this->newsid = $newsid;
    }

    /**
     * @return string
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param string $time
     */
    public function setTime($time)
    {
        $this->time = $time;
    }

    /**
     * @return int
     */
    public function getUsersid()
    {
        return $this->usersid;
    }

    /**
     * @param int $usersid
     */
    public function setUsersid($usersid)
    {
        $this->usersid = $usersid;
    }

} 