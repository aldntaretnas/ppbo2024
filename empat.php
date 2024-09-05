<?php
class Author
{
    public $name;
    public $description;

    public function __construct($name, $description) {
        $this->name=$name;
        $this->description=$description;
    }
    public function show($type) {
        if ($type == "name") {
            return ["name"=>$this->name];
        }
        elseif ($type == "description") {
            return ["description"=>$this->description];
        }
        return[];
    }
}


class Book
{
    public $ISBN;
    public $title;
    public $description;
    public $category;
    public $language;
    public $numberofpage;
    public $author;
    public $publisher;

    public function __construct($ISBN, $title, $description, $category, $language, $numberofpage, $author, $publisher) {
        $this->ISBN=$ISBN;
        $this->title=$title;
        $this->description=$description;
        $this->category=$category;
        $this->language=$language;
        $this->numberofpage=$numberofpage;
        $this->author=$author;
        $this->publisher=$publisher;
    }

    public function showAll() {
        $this->ISBN=2020;
        $this->title="aku dan kamu";
        $this->description="percintaan";
        $this->category="romantic";
        $this->language="Indonesia";
        $this->numberofpage=1/70;
        $this->author="mahatmagandi";
        $this->publisher="Indo Baca";
    }
}

class publisher
{
    public $name;
    public $address;
    private $phone;

    public function __construct($name, $address) {
        $this->name=$name;
        $this->address=$address;
    }

    public function setPhone($phone) {
        $this->phone=$phone;
    }

    public function getPhone() {
        return $this->phone;
    }
}