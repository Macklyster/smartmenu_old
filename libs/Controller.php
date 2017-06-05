<?php

namespace libs;

/**
 * Description of Controller
 *
 * @author Macklyster
 */
class Controller extends System {

    public $dados;
    public $layout = '_layout';
    private $path;
    private $pathRender;
    //View web
    protected $title = null;
    protected $description = null;
    protected $keywords;
    protected $image;
    protected $captionController;
    protected $captionAction;
    protected $captionParams;

    public function __construct(){
        parent::__construct();
    }

    private function setPath($render){
        if (is_array($render)){
            foreach ($render as $li) {
                $path = 'view/' . $this->getArea() . '/'. $this->getController() . '/' . $li . '.php';
                $this->fileExists($path);
                $this->path[] = $path;
            }
        } else {
            $this->pathRender = is_null($render)? $this->getAction() : $render;
            $this->path = 'view/' . $this->getArea() . '/' . $this->getController() . '/' . $this->pathRender . '.php';
            $this->fileExists($this->path);
        }
    }

    private function fileExists($file){
        if (!file_exists($file)){
            die('Não foi localizado o arquivo ' . $file);
        }
    }

    public function view($render = null){
        $this->title = is_null($this->title) ? 'SmartMenu' : $this->title;
        $this->description = is_null($this->description) ? 'Sistema para Restaurantes' : $this->description;
        $this->keywords = is_null($this->keywords) ? 'Sistema, Restaurante, Umuarama, Alfa' : $this->keywords;

        $this->setPath($render);

        if (is_null($this->layout)){
            $this->render();
        } else {
            $this->layout = "content/{$this->getArea()}/shared/{$this->layout}.php";
            if (file_exists($this->layout)){
                $this->render($this->layout);
            } else {
                die("Não foi possivel localizar o layout");
            }
        }
    }

    public function render($file = null){
        if (is_array($this->dados) && count($this->dados) > 0){
            extract($this->dados, EXTR_PREFIX_ALL, 'view');
            extract(array(
                'controller'=>(is_null($this->captionController) ? '' : $this->captionController),
                'action'=>(is_null($this->captionAction) ? '' : $this->captionAction),
                'params'=>(is_null($this->captionParams) ? '' : $this->captionParams)
            ), EXTR_PREFIX_ALL, 'caption');
        }

        if (!is_null($file) && is_array($file)){
            foreach ($file as $li){
                include($li);
            }
        } elseif (is_null($file) && is_array($this->path)){
            foreach ($this->path as $l) {
                include($l);
            }
        } else {
            $file = is_null($file) ? $this->path : $file;
            file_exists($file) ? include ($file) : die($file);
        }
    }
}