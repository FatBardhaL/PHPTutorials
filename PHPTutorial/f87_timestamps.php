<?php
//timestamps eshte element qe e mate kohen dhe e mban ne mend qe nga janari i 1970


            //time(); na jep kohen e sakte, por na jep me sekonda.
            //echo time();
    $time = time();
    
            /*Per ti kthyer sekondat ne minuta 
                $actual_time ka dy parametra:
                    1.si deshironi qe ta shfaqni
                    2. eshte koha ne sekonda $time
            */
    $actual_time = date('H:i:s',$time);
    

    echo 'Koha e sakte eshte: '.$actual_time;

?>