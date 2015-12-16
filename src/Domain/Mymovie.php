<?php

namespace Mymovies\Domain;

class Mymovie 
{
    /**
     * Identifier.
     *
     * @var integer
     */
    private $id;
    
    private $title;

    private $longDescription;
    
    private $shortDescription;
    
    private $director;
    
    private $year;
    
    private $image;
    
  
    private $yearOfBirth;
    

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getLongDescription() {
        return $this->longDescription;
    }

    public function setLongDescription($longDescription) {
        $this->longDescription = $longDescription;
    }
    
    public function getShortDescription() {
        return $this->shortDescription;
    }

    public function setShortDescription($shortDescription) {
        $this->shortDescription = $shortDescription;
    }
    
    public function getDirector() {
        return $this->Director;
    }

    public function setDirector($director) {
        $this->director = $director;
    }
       public function getyear() {
        return $this->year;
    }

    public function setYear($year) {
        $this->year = $year;
    }
       public function getImage() {
        return $this->image;
    }

    public function setImage($image) {
        $this->image = $image;
    }
}
