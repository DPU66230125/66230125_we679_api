<?php

class ApplicationForm{
    public $id;
    public $author_id;
    public $created_date;
    public $updated_date;
    public $title;
    public $prefix;
    public $fname;
    public $mname;
    public $lname;
    public $nationality;
    public $place_of_birth;
    public $marital_status;
    public $date_of_birth;
    public $passport_no;
    public $place_of_issue;
    public $date_of_issue;
    public $date_of_expiry;
    public $occupation;
    public $addr_dom;
    public $addr_dom_tel;
    public $addr_perm;
    public $addr_perm_tel;
    public $addr_perm_email;
    public $addr_des;
    public $date_of_arrival;
    public $travel_by;
    public $duration_of_stay;
    public $guarantor_des_name;
    public $guarantor_des_tel;
    public $guarantor_dom_name;
    public $guarantor_dom_tel;

    public function __construct($obj) {
        $this->parse($obj);
    }

    public function parse($obj){
        $this->id = $obj->id;
        $this->author_id = $obj->author_id;
        $this->created_date = $obj->created_date;
        $this->updated_date = $obj->updated_date;
        $this->title = $obj->title ?? 'แบบคำขอ VISA ใหม่ ' . date("Y-m-d-h-i-sa");
        $this->prefix = $obj->prefix ?? 'Mr.';
        $this->fname = $obj->fname ?? 'Unnamed';
        $this->mname = $obj->mname;
        $this->lname = $obj->lname;
        $this->nationality = $obj->nationality;
        $this->place_of_birth = $obj->place_of_birth;
        $this->marital_status = $obj->marital_status;
        $this->date_of_birth = $obj->date_of_birth;
        $this->passport_no = $obj->passport_no;
        $this->place_of_issue = $obj->place_of_issue;
        $this->date_of_issue = $obj->date_of_issue;
        $this->date_of_expiry = $obj->date_of_expiry;
        $this->occupation = $obj->occupation;
        $this->addr_dom = $obj->addr_dom;
        $this->addr_dom_tel = $obj->addr_dom_tel;
        $this->addr_perm = $obj->addr_perm;
        $this->addr_perm_tel = $obj->addr_perm_tel;
        $this->addr_perm_email = $obj->addr_perm_email;
    }
}