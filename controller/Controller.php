<?php

namespace controller;

use model\Model;

class Controller {

	private Model $model;

	public function __construct(Model $model) {
		$this->model = $model;
	}

	public function getModel(): Model {
		return $this->model;
	}

}