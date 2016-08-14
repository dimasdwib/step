<?php

class stepTemplate {

    protected $filesystem;
    protected $extend;
    protected $section;
    protected $sectionName;
    protected $data;

    protected function extend($name){
        if(empty($this->extend)){
            $this->extend = $name;
        } else {
            die("You already extending template \"$name\"");
        }
    }

    protected function setSection($name){
        if(isset($this->section[$name])){
            echo $this->section[$name];
        }
    }

    protected function section($name){
        if(!empty($this->extend)){
            $this->sectionName = $name;
            ob_start();
        }
    }

    protected function endSection(){
        if(!empty($this->extend)){
            $this->section[$this->sectionName] = ob_get_clean();
            $this->sectionName = null;
        }
    }

    protected function getPart($file){
        if(!empty($this->data)){
            extract($this->data);
        }
        include $this->filesystem.$file.'.php';
    }

    protected function buildTemplate(){


    }

    protected function resetTemplate(){
        $this->section = [];
        $this->extend = null;
        ob_end_flush();
    }

}
