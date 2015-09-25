<footer>
	
    <p>Template By: Josh Dyke</p>

        <p> <?php

        $dateUpdated = date ("F d, Y H:i:s", filemtime(basename($_SERVER['PHP_SELF'])));
        $todayDateValue = date("Y-m-d H:i:s"); 
        

        print 'Last Updated <time datetime="' . $todayDateValue . '">' . $dateUpdated . "</time>\n";

        ?></p>


</footer>
