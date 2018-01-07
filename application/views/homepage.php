<html>
<head>
  <title>Homepage</title>
  <style>
  .success
	{
		background-color:green; 
		color:white;
	}
	.left{
            float:left;
            padding-left:10px;
        }
	.mid
	{
		
		width:10%;
		margin:0 auto;
		font-size:30px
		
	}
	 a
	 {
          text-decoration: none;
     }
     a:hover 
	 { 
		 text-decoration:underline;
		 color: gray
	 }

  </style>
</head>
<body style="text-align:center">

<?php if (isset($_SESSION['success'])){?>
<div class="success"><p> <?php echo $_SESSION['success']  ?></p></div>
<img src="<?php echo base_url('images/success.png'); ?>" width="200px" />


<div style="font-size:30px">
  welcome,<?php echo $_SESSION['username']  ?>
  <br>
  <div class="mid">
	<a href="<?php echo site_url('Auth/logout') ?>" ><img src="<?php echo base_url('images/logout.png'); ?>" class="left" width="50px" />logout</a>
  </div>
</div>
<?php }?>
</body>
</html>
