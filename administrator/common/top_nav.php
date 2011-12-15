
<div class="chromestyle" id="chromemenu">
        <ul>
    <?php

    for($i=1;$i<=count($menuName);$i++){
    
   ?>

<li><a href="<?php echo $menuUrl[$i];?>" rel="dropmenu<?php echo $i;?>" class=""><?php echo $menuName[$i];?> </a></li>


<?php
   }
    ?>
  </ul>
</div>
<!--1st drop down menu -->                                                   
<div id="dropmenu1" class="dropmenudiv" style="height: auto; overflow: hidden; visibility: hidden; left: -1000px; top: -1000px;">

</div>


<!--2nd drop down menu -->                                                
<div id="dropmenu2" class="dropmenudiv" style="width: 150px;">


</div>

<!--3rd drop down menu -->                                                   
<div id="dropmenu3" class="dropmenudiv" style="width: 150px;">

</div>

<!--4th drop down menu -->                                                   
<div id="dropmenu4" class="dropmenudiv" style="width: 150px;">
<a href="view_categories.php">View</a>
<a href="add-new-categories.php">Add New</a>

</div>


<script type="text/javascript">

cssdropdown.startchrome("chromemenu")

</script>
