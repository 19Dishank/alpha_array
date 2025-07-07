<?php
  session_start();
  include_once "connection.php";
  if(!isset($_SESSION['id']))
  {
     header('location:index.php');
  }
?>
                  

<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  
<!-- /index.html by,  04:41:56 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Frest admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Frest admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Tiffin List | <?php echo $title;  ?></title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.html">
    <link rel="shortcut icon" href="images/icon.png">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/responsive.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/buttons.bootstrap4.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/components.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/dark-layout.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/semi-dark-layout.min.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.min.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->

  </head>
  <!-- END: Head-->

  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu-modern boxicon-layout no-card-shadow 2-columns  navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
    <!-- modals -->
                  <!-- Large modal -->
           <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" id="OwnerModal">
                <div class="modal-dialog modal-lg" style="">
                      <div class="modal-content">
            
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"><i class="fa fa-close"></i></span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">Detail</h4>
                        </div>
                        <div class="modal-body">
                            <!-- /Dynmamic Jquery AJax Data load Here -->
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="x_content">
                  <!-- /modals -->
                </div>
                <!-- BEGIN: Header-->
               <?php include_once "header.php"; ?>
                <!-- END: Header-->


                <!-- BEGIN: Main Menu-->
                <?php include_once "sidebar.php"; ?>
                <!-- END: Main Menu-->

                <!-- BEGIN: Content-->
                <div class="app-content content">
                  <div class="content-overlay"></div>
                  <div class="content-wrapper">
                    <div class="content-header row">
                    </div>
                    <div class="content-body">
                      <!-- Start here Conetent -->
                        <!-- Scroll - horizontal and vertical table -->
                      <section id="horizontal-vertical">
                            <div class="content-header row">
                                <div class="content-header-left col-12 mb-2 mt-1">
                                  <div class="breadcrumbs-top">
                                    <h5 class="content-header-title float-left pr-1 mb-0">Vendor Income</h5>
                                    <div class="breadcrumb-wrapper d-none d-sm-block">
                                      <ol class="breadcrumb p-0 mb-0 pl-1">
                                        <li class="breadcrumb-item"><a href="dashboard.php"><i class="bx bx-home-alt"></i></a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="dashboard.php">Home</a>
                                        </li>
                                        <li class="breadcrumb-item active">Vednor Income List
                                        </li>
                                      </ol>
                                    </div>
                                  </div>
                                </div>
                              </div>

                      <div class="row">
                        <div class="col-12">
                          <div class="card">
                            <div class="card-body card-dashboard">
                                <div class="table-responsive">
                                 <table class="table table-striped dataex-html5-selectors dataTable">
                                  <thead>
                                    <tr>
                             
                                        <th>Vendor Name</th>
                                        <th>Delivery Order Amount</th>
                                        <th>+</th>
                                        <th>Cancelled Order Amount</th>
                                        <th>-</th>
                                        <th>Rejected Order Amount</th>
                                        <th>=</th>
                                        <th>Total Payable Amount</th>
                                        <th>Pay-Amount</th>
                                    </tr>
                                  </thead>
                                 <tbody>                                    <?php 
                                    $a=0;
                                    $qry="select * from vendor_tbl";
                                    $ans=mysqli_query($conn,$qry);
                                    while($res=mysqli_fetch_array($ans))
                                    {
                                      $qry1="select vendor_id from cart_tbl,order_details_tbl where cart_tbl.cart_id=order_details_tbl.cart_id";
                                        $ans1=mysqli_query($conn,$qry1);
                                        while($res1=mysqli_fetch_array($ans1))
                                        {
                                          if($res['vendor_id']==$res1['vendor_id'])
                                          {
                                            $amt01=0;$amt001=0;$amt0001=0;$finalincome=0;
                                            $abc="select * from
                                                  order_details_tbl,order_tbl,cust_add_payment_tbl,cart_tbl,customer_reg_tbl,vendor_tbl,rider_tbl
                                                  where order_details_tbl.order_id=order_tbl.order_id
                                                  and order_details_tbl.cust_add_payment_id=cust_add_payment_tbl.cust_add_payment_id
                                                  and cust_add_payment_tbl.customer_id=customer_reg_tbl.customer_id
                                                  and cart_tbl.customer_id=customer_reg_tbl.customer_id
                                                  and order_details_tbl.cart_id=cart_tbl.cart_id
                                                  and order_details_tbl.order_status='".ORDER_DELEIVERED."'
                                                  and cart_tbl.vendor_id=vendor_tbl.vendor_id
                                                  and vendor_tbl.vendor_id='".$res['vendor_id']."'
                                                  and order_details_tbl.vendor_payment_status='0'
                                                  and order_details_tbl.rider_id=rider_tbl.rider_id";
                                            $result=mysqli_query($conn,$abc);
                                            while($ansans=mysqli_fetch_array($result))
                                            { 
                                              $amt=0;
                                              $amt=$ansans['total']+$amt;  //600
                                              $amtt=$amt*20/100; //120
                                              $amt1=$amt-$amtt;
                                              $amt01=$amt01+$amt1;
                                              //echo $amt01;die();
                                            }
                                            $abc="select * from
                                                  order_details_tbl,order_tbl,cust_add_payment_tbl,cart_tbl,customer_reg_tbl,vendor_tbl,rider_tbl
                                                  where order_details_tbl.order_id=order_tbl.order_id
                                                  and order_details_tbl.cust_add_payment_id=cust_add_payment_tbl.cust_add_payment_id
                                                  and cust_add_payment_tbl.customer_id=customer_reg_tbl.customer_id
                                                  and cart_tbl.customer_id=customer_reg_tbl.customer_id
                                                  and order_details_tbl.cart_id=cart_tbl.cart_id
                                                  and order_details_tbl.order_status='".ORDER_CANCELLED."'
                                                  and cart_tbl.vendor_id=vendor_tbl.vendor_id
                                                  and vendor_tbl.vendor_id='".$res['vendor_id']."'
                                                  and order_details_tbl.vendor_payment_status='0'
                                                  and order_details_tbl.order_occupie_status_cancel='1'
                                                  and order_details_tbl.rider_id=rider_tbl.rider_id";
                                            $result=mysqli_query($conn,$abc);
                                            while($ansans=mysqli_fetch_array($result))
                                            { 
                                              $amt=0;
                                              $amt=$ansans['total']+$amt;  //600
                                              $amtt=$amt*50/100; //300
                                              $amt1=$amt-$amtt;
                                              $amt001=$amt001+$amt1;

                                            }
                                             $qry="select * from
                                                  order_details_tbl,order_tbl,cust_add_payment_tbl,cart_tbl,customer_reg_tbl,vendor_tbl
                                                  where order_details_tbl.order_id=order_tbl.order_id
                                                  and order_details_tbl.cust_add_payment_id=cust_add_payment_tbl.cust_add_payment_id
                                                  and cust_add_payment_tbl.customer_id=customer_reg_tbl.customer_id
                                                  and cart_tbl.customer_id=customer_reg_tbl.customer_id
                                                  and order_details_tbl.cart_id=cart_tbl.cart_id
                                                  and order_details_tbl.vendor_payment_status='0'
                                                  and order_details_tbl.order_status='".ORDER_REJECTED."'
                                                  and cart_tbl.vendor_id=vendor_tbl.vendor_id
                                                  and vendor_tbl.vendor_id='".$res['vendor_id']."'"; 
                                              $result=mysqli_query($conn,$qry);
                                              while($ansans=mysqli_fetch_array($result))
                                              { 
                                                $amt=0;
                                                $amt=$ansans['total']+$amt;  //600
                                                $amtt=$amt*50/100; //300
                                                $amt1=$amt-$amtt;
                                                $amt0001=$amt0001+$amt1;

                                              }
                                              $finalincome=$amt01+$amt001-$amt0001;
                                              
                                              if($finalincome=='0')
                                              {

                                              }  
                                              else
                                              {

                                  ?>
                                    <tr>      
                                    <td>
                                    <button type="button"  id="vendor" class="btn" data-id="<?php echo $res['vendor_id'];?>" data-toggle="modal" data-target=".bs-example-modal-lg">
                                                <b><u><span title="view Detail">
                                                   <?php echo $res['vendor_name'];?></u>
                                                </span></b>
                                                </button>
                                  </td>
                                      
                                            <td>₹ <?php echo $amt01; ?></td>
                                            <th>+</th>
                                            <td>₹ <?php echo $amt001; ?></td>
                                            <th>-</th>
                                            <td>₹ <?php echo $amt0001; ?></td>
                                            <th>=</th>
                                            <td>₹ <?php echo $finalincome; ?></td>
                                            <td>
                                              <a  class="brd-rd3 buy_now" title="" itemprop="url" href="javascript:void(0)"  data-amount="<?php echo $finalincome;?>" data-id="<?php echo $res1['vendor_id']?>">
                           
                            <button value="Add Food"  data-toggle="collapse" class="btn btn-outline-primary waves-effect" style="margin: -54px -14px -53px; font-size: 12px; width: 147px;">PAY TO VENDOR</button></a>           </td>
                                          </tr>

                                          <?php
                                              }
                                                        
                                
                                  
                                                    
                                  break; ?>    
                                                         <?php
                   
                                          }




                                        }
                                    }
       ?>
                                  </tbody>
                                </table>
                              </div>
                            </div>

                          </div>
                        </div>
                      </div>
                    </section>
            <!--/ Scroll - horizontal and vertical table -->

                      <!-- End here Conetent -->
            

        </div>
      </div>
    </div>
    <!-- END: Content-->



    </div>
    <!-- End: Customizer-->



    </div>
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
  


    <!-- BEGIN: Footer-->
    <?php include_once "footer.php"; ?>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.min.js"></script>
    <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.min.js"></script>
    <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/buttons.print.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/buttons.bootstrap4.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/pdfmake.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.min.js"></script>
    <script src="app-assets/js/core/app.min.js"></script>
    <script src="app-assets/js/scripts/components.min.js"></script>
    <script src="app-assets/js/scripts/footer.min.js"></script>
    <script src="app-assets/js/scripts/customizer.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/datatables/datatable.min.js"></script>
    
    <!-- END: Page JS-->
    <script>
      $(document).on("click", "#vendor", function () {
           var vendor_id = $(this).data('id');
            $.ajax({
                   type: "POST",
                   url: "vendor_modal.php",
                   data: { vendor_id:vendor_id  },
                   success: function(response){ 
                        // Add response in Modal body
                        $('.modal-body').html(response);

                        // Display Modal
                       // $('#campModal').modal('show'); 

                  } 
              });
        });
      </script>
         <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
         <script>
$('body').on('click', '.buy_now', function(e){
    var totalAmount = $(this).attr("data-amount");
    //alert(totalAmount);
    var rider_id =  $(this).attr("data-id");
    //alert(product_id);
    var options = {
    "key": "rzp_test_TPaS0mhcHBSjSV",
    "amount": (totalAmount*100), // 2000 paise = INR 20
    "name": "Swad Safar",
    "description": "Payment",
    "image": "../img/product/12347_ivana-squares.jpg",
    "handler": function (response){
        //  alert(response);
$.ajax({
    url: 'admin_payment_to_vendor.php',
    type: 'post',
    //data: {cart:product_id},
    data: {
            razorpay_payment_id: response.razorpay_payment_id , 
            totalAmount : totalAmount ,
            rider_id : rider_id ,
            //product_id : product_id,
    }, 
success: function (msg) {
//window.location.href = 'https://www.tutsmake.com/Demos/php/razorpay/success.php';

  alert('Payment done successfully to vendor.');
    window.location.href = "http://<?php echo $ip ?>/The%20MOM'S%20Kitchen/admin/income_vendor.php";

}
});
},
"theme": {
"color": "#528FF0"
}
};
var rzp1 = new Razorpay(options);
rzp1.open();
e.preventDefault();
});
</script>  
  </body>
  <!-- END: Body-->

<!-- /table-datatable.html by,  04:45:09 GMT -->
</html> 