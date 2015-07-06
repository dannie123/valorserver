<?php
 
class Member extends Eloquent {
 
    protected $table = 'members';

    protected $hidden = array('password');
 
}