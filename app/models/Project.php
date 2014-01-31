<?php

class Project extends Eloquent {

    protected $table = 'projects';
    protected $visible = array('id', 'name', 'description');
    protected $hidden = array('updated_at', 'created_at');

}
