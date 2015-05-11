<?php

class NewsInfo {

    public $newid=0;
    public $tile="";
    public $type="推荐";
    public $desc="";
    public $time="";
    public $content_url="";
    public $pic_url="";
    public $from="";
    public $hitsnum=0;
    public $readstatus=false;

    /**
     * @return int
     */
    public function getNewid()
    {
        return $this->newid;
    }

    /**
     * @param int $newid
     */
    public function setNewid($newid)
    {
        $this->newid = $newid;
    }

    /**
     * @return int
     */
    public function getHitsnum()
    {
        return $this->hitsnum;
    }

    /**
     * @param int $hitsnum
     */
    public function setCommentsnum($hitsnum)
    {
        $this->hitsnum = $hitsnum;
    }

    /**
     * @return string
     */
    public function getContentUrl()
    {
        return $this->content_url;
    }

    /**
     * @param string $content_url
     */
    public function setContentUrl($content_url)
    {
        $this->content_url = $content_url;
    }

    /**
     * @return string
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * @param string $desc
     */
    public function setDesc($desc)
    {
        $this->desc = $desc;
    }

    /**
     * @return string
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * @param string $from
     */
    public function setFrom($from)
    {
        $this->from = $from;
    }

    /**
     * @return string
     */
    public function getPicUrl()
    {
        return $this->pic_url;
    }

    /**
     * @param string $pic_url
     */
    public function setPicUrl($pic_url)
    {
        $this->pic_url = $pic_url;
    }

    /**
     * @return string
     */
    public function getTile()
    {
        return $this->tile;
    }

    /**
     * @param string $tile
     */
    public function setTile($tile)
    {
        $this->tile = $tile;
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
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return boolean
     */
    public function getReadstatus()
    {
        return $this->readstatus;
    }

    /**
     * @param string $type
     */
    public function setReadstatus($readstatus)
    {
        $this->readstatus = $readstatus;
    }
}