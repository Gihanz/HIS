          <?php 
            $roleId = $this->session->userdata('roleId');
             $edit ="display:none";
             $delete="display:none";

        if($roleId == "1")
        {
            //MLT
           $edit ="";
             $delete="display:none";

        }
        else if ($roleId == "2")
        {
            //Doctor
          $edit ="";
             $delete="display:none";

        }
           else if ($roleId == "4")
        {
            //Lab Assistent -Conter 
             $edit ="display:none";
             $delete="display:none";

        }
             else if ($roleId == "5")
        {
            //Nurse
                   $edit ="display:none";
             $delete="display:none";

        }
           else if ($roleId == "3")
        {
            //Chief MLT
                $edit ="";
             $delete="";

        }   else if ($roleId == "6")
        {
            //Admin
                $edit ="";
             $delete="";

        }   else if ($roleId == "7")
        {
            //Consultant
                $edit ="";
             $delete="";

        }else {
            //Other
              $edit ="display:none";
             $delete="display:none";                                                                                                         } ?>


                       
                   
                  