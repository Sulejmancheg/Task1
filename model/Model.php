<?php

namespace model;

class Model {
	private string $pageUrl ='http://task1';
	private $data = null;
	private string $template = 'index';
	private string $layout = 'index';

	public function getPageUrl(): string {
		return $this->pageUrl;
	}

	public function setData( $data ): void {
		$this->data = $data;
	}

	public function getData() {
		return $this->data;
	}

	public function setTemplate( string $template ): void {
		$this->template = $template;
	}

	public function getTemplate(): string {
		return $this->template;
	}

	public function setLayout( string $layout ): void {
		$this->layout = $layout;
	}

	public function getLayout(): string {
		return $this->layout;
	}

}