<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo (isset($title))?$title:$setting['title']['data']->description?></title>
<meta name="description" content="<?php echo (isset($description))?$description:$setting['description']['data']->description?>">

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
<?php if (isset($item)){?>
<meta property="og:title" content="<?php echo $item['title'] ?>"/>
<meta property="og:description" content="<?php echo $item['description'] ?>"/>
<meta property="og:url" content="<?php echo base_url().'chi-tiet/'.$item['slug']?>" />
<meta property="og:image" content="<?php echo base_url().'uploads/news/'.$item['image']?>" />
<?php }?>
<script src="https://code.jquery.com/jquery-1.11.2.js"></script>
<!-- <script src="https://code.jquery.com/ui/1.11.2/jquery-ui.js"></script> -->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/normalize.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

<script src="<?php echo base_url();?>assets/js/lightbox.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/lightbox.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/header.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/footer.css">

<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,700,900,300' rel='stylesheet' type='text/css'>

</head>

<body>

<div class="">
  <?php echo $template['partials']['header']; ?>

  <main>
    <?php echo $template['body']; ?>
  </main>

  <?php echo $template['partials']['footer']; ?>
</div>


</body>

</html>