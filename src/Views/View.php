<?php


class View {
	private $template;

	//private $params;

	/*
	*@param $template es una template que recibira para renderizar	*/
	public function __construct($template) {
		$this->template = $template;
		
		//$this->params = $params;
	}
	/**
	* @return Response
	*/
	public function render() {
		$content = $this->loadTemplate(); // le digo que vaya a buscar la vista 

		
		return $content;
	}

	private function loadTemplate()	{
		$path = dirname(dirname(__DIR__)). '/resources/views';

		$templatePath = "$path/{$this->template}.php";

		return $this->includeTemplate($templatePath);


	}

	private function includeTemplate($path) {
		if(file_exists($path)) {
			
			require_once $path;
			
		}else {
			echo "no llegamos";
		}
	}
}