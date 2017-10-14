<?php
session_start();
echo "You're logged in! " . " Today's date : " . date("d/m/Y") . "  Time is " . date("H:i");



// start of change
if(!empty($_SESSION['authenticated'])){
    header('location: logout.php');
}
else{
    $_SESSION['authenticated'] = true;
    
    
}
//end of change
?> 
 

<form method ="post" action="logout.php">
    <input type="submit" value="Logout">
</form>

<!DOCTYPE HTML>
<html>
    <body bgcolor="#3399FF">
       
    </body>
</html>

  <div id="plemx-root"></div> 

  <script type="text/javascript"> 

  var _plm = _plm || [];
  _plm.push(['_btn', 67228]); 
  _plm.push(['_loc','caon0603']);
  _plm.push(['location', document.location.host ]);
   (function(d,e,i) {
  if (d.getElementById(i)) return;
  var px = d.createElement(e);
  px.type = 'text/javascript';
  px.async = true;
  px.id = i;
  px.src = ('https:' == d.location.protocol ? 'https:' : 'http:') + '//widget.twnmm.com/js/btn/pelm.js?orig=en_ca';
  var s = d.getElementsByTagName('script')[0];

  var py = d.createElement('link');
  py.rel = 'stylesheet'
  py.href = ('https:' == d.location.protocol ? 'https:' : 'http:') + '//widget.twnmm.com/styles/btn/styles.css'

  s.parentNode.insertBefore(px, s);
  s.parentNode.insertBefore(py, s);
})(document, 'script', 'plmxbtn');</script>
