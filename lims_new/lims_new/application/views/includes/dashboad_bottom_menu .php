            <?php 
            $roleId = $this->session->userdata('roleId');
             $baseURL =base_url();
             $palceOrder ="0";
             $viewAllOrder="0";

        if($roleId == "1")
        {
            //MLT
           $palceOrder ="1";
             $viewAllOrder="1";

        }
        else if ($roleId == "2")
        {
            //Doctor
           $palceOrder ="1";
             $viewAllOrder="1";

        }
           else if ($roleId == "4")
        {
            //Lab Assistent -Conter 
             $palceOrder ="1";
             $viewAllOrder="1";

        }
             else if ($roleId == "5")
        {
            //Nurse
                 $palceOrder ="0";
             $viewAllOrder="1";

        }
           else if ($roleId == "3")
        {
            //Chief MLT
             $palceOrder ="1";
             $viewAllOrder="1";

        }else {
            //Other
             $palceOrder ="0";
             $viewAllOrder="0";                                                                                                               } ?>
                      <div class="box-footer clearfix">
                        <?php if($palceOrder == "1")
        {  echo '<a href="'.$baseURL.'new_test_request_controller" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>'; } ?>
                          <?php if($viewAllOrder == "1")
        {  echo '<a href="'.$baseURL.'test_request_progress_controller" class="btn btn-sm btn-success btn-flat pull-right">View All Orders</a>'; } ?>
                   
                    </div>