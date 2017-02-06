<!DOCTYPE html>
<html lang="en-us">

  <head>
  <link href="https://gmpg.org/xfn/11" rel="profile">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="content-type" content="text/html; charset=utf-8">

  <!-- Enable responsiveness on mobile devices-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

  <!-- CSS -->
<!--    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300|Quattrocento:400" rel="stylesheet">-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">

  <!-- Icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/public/icon.png">
 <link rel="shortcut icon" href="/public/favicon.png">

  <!-- RSS -->
  <link rel="alternate" type="application/rss+xml" title="RSS" href="/atom.xml">
    
      <style>
          @keyframes background {
    
from {
    	background-position: 0 0%;
		}
    to {
    background-position: 0 -200px;
    }
}

      .bubble  { 
          color: #F2F5FE;
                background: -webkit-linear-gradient(transparent, transparent), url(<?php echo get_option('scrollimage'); ?>) repeat;
              background-size: 300px auto;
              animation: background 10s infinite linear;
            }
      </style>

      <?php wp_head();?>
</head>


  <body class="layout-reverse">