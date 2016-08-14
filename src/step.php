<?php

include 'stepTemplate.php';

class step extends stepTemplate {

    public function __construct($filesystem){
        $this->filesystem = $filesystem.'/';
    }

    public function render($file, $data = null){
        $test = '123123123';

        ob_start();
        if($data != null){
            $this->data = $data;
            extract($data);
        }

        include $this->filesystem.$file.'.php';
        $html = ob_get_clean();

        if(!empty($this->extend)){
            ob_start();
            include $this->filesystem.$this->extend.'.php';
            $html = ob_get_clean();
        }

        $this->resetTemplate();

        return trim($html);

    }

}
