<?php
//timestamps eshte element qe e mate kohen dhe e mban ne mend qe nga janari i 1970
//---Kur ruajm te dhena ne database zakonisht duhet qe ta ruajm si timestamps pasi qe 
    //ne kete menyr ato data mund te ruhen dhe mund te thirren edhe me vone

            //time(); na jep kohen e sakte, por na jep me sekonda.
            //echo time();
    $time = time();
    
            /*Per ti kthyer sekondat ne minuta 
                $actual_time ka dy parametra:
                    1.si deshironi qe ta shfaqni
                    2. eshte koha ne sekonda $time
            */
    $actual_time = date('D M Y @ H:i:s',$time);
    

    echo 'Data dhe koha e sakte eshte: '.$actual_time;

?>