<?php
$this->load->helper('url');
?>
<html>
    <head>
        <title><?php echo $title ?> - CodeIgniter 2 Tutorial</title>
        <script type="text/javascript" async="" src="/Htj/js/jquery-1.7.2.min.js"></script>
        <link rel="stylesheet" type="text/css" href="/Htj/css/css.css" media="screen" />
        <script type="text/javascript" async="" src="/Htj/js/htj.js"></script>
    </head>
    <body>
        <h1>Hattrick Juniores</h1>
        <div id="menu">
          <ul>
            <li><a href="<?php echo site_url('jogadores') ?>">Jogadores</a></li>
            <li><a href="<?php echo site_url('jogos') ?>">Jogos</a></li>
           </ul>
        </div>
