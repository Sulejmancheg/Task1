<?php

namespace controller;

class Router {

	private array $pathParts;
	private ?string $controller = null;
	private ?string $action = null;

	public function __construct() {
		$this->pathParts = explode('/', trim($_SERVER['REQUEST_URI'], " \t\n\r\0\x0B/"));
	}

	private function setController(): void {
		$this->controller = array_shift($this->pathParts)?:'index';
		$parts = array_merge(explode('-', $this->controller),['Controller']);
		$this->controller = '\controller\\';
		foreach ($parts as $part){
			$this->controller .= ucfirst(strtolower($part));
		}
	}

	public function getController(): string {
		if (null === $this->controller){
			$this->setController();
		}
		return $this->controller;
	}

	private function setAction(): void {
		$this->action = array_shift($this->pathParts)?:'index';
		$parts = explode('-', $this->action);
		$this->action = 'action';
		foreach ($parts as $part){
			$this->action .= ucfirst(strtolower($part));
		}
	}

	public function getAction(): string {
		if (null === $this->action){
			$this->setAction();
		}
		return $this->action;
	}


}