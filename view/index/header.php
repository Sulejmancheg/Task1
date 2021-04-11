<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title><?= $this->getModel()->getData() ?></title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
<link href="/css/bootstrap.min.css" rel="stylesheet">

<meta name="theme-color" content="#7952b3">

    <style>

      .bd-placeholder-img {
	font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
	.bd-placeholder-img-lg {
		font-size: 3.5rem;
        }
      }

      input:placeholder-shown {
          border-color: red; /* Красная рамка */
      }

    </style>

    <!-- Custom styles for this template -->
      <link href="/css/bootstrap.min.css" rel="stylesheet">
      <link href="/css/signin.css" rel="stylesheet">
      <link href="https://getbootstrap.com/docs/4.3/examples/floating-labels/floating-labels.css" rel="stylesheet">
      <link href="https://getbootstrap.com/docs/5.0/examples/sticky-footer/sticky-footer.css" rel="stylesheet">

  </head>
  <body class="d-flex flex-column h-100">
<?php

(new model\Auth())::getLogMessage();

$layout = sprintf('%s/%s.php', $this->layoutsPath, $this->model->getLayout());
require_once($layout);

