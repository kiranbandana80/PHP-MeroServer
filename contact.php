<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Contact | Meroserver</title>
    <meta name="keywords" content="webhosting, free space, raspberry pi, pihosting, raspberry hosting server, free hosting server in nepal" />
    <meta name="description" content="MeroServer is a web hosting service provider in Nepal with Raspberry Pi as Hosting Server. We are here proud to offer the free webhosting service with individual zpanel dashboard and guarantee the customer satisfaction. Any feedback regarding the improvement to our service will be highly appreciated." />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link href="style.css" rel="stylesheet" type="text/css" media="screen" />
  </head>
  <body>
    
    <!-- start header -->
    <?php include('header.php');?>
    <!-- end header -->
    
    <!-- start page -->
    <div id="page">
      <div class="bgtop">
        <div class="bgbtm">
          
          <!-- start content -->
          <div id="content">
            <div class="post">
              <h1 class="title">Feel free to contact us</h1>
              
              <form id="cnt" method="post" action="send.php">
                <p>
                  <label>Full Name * </label>
                  <br/>
                  <input name="cnt_fname" type="text" id="cnt_fname" size="70" />
                </p>
                <p>
                  <label>Email * </label>
                  <br/>
                  <input name="cnt_email" type="text" id="cnt_email" size="70" />
                </p>
                <p>
                  <label>Message * </label>
                  <br/>
                  <textarea name="cnt_msg" cols="70" rows="10" id="cnt_msg"></textarea>
                </p>
                <p>
                  <input type="submit" name="Submit" value="Submit" />
                </p>
              </form>
              <p class="byline">&nbsp;</p>
            </div>
            <div class="post">
              <h2 class="title">Features on MeroServer</h2>
              <p class="byline"><small>Posted on february 25th, 2014</small> by <a href="http://www.hemshrestha.com.np" target="_blank">Hem</a></p>
              <div class="entry">
                <ul>
                  <li>50 MB Disk Space</li>
                  <li>1 GB Monthly BandWidth</li>
                  <li>Z-panel control pannel</li>
                  <li>Costumer support</li>
                  <li>Data Security</li>
                </ul>
                <p>If you want more features, you can easily contact us by submitting above form.</p>
              </div>
            </div>
          </div>
          <!-- end content -->
          
          <!-- start sidebar -->
          <?php include('sidebar.php');?>
          <!-- end sidebar -->
          
          <div style="clear:both">&nbsp;</div>
        </div>
      </div>
    </div>
    <?php include('footer.php');?>
  </body>
</html>
