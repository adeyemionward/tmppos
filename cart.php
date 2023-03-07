<!DOCTYPE html>
<html lang="en">


<!-- UI Template for Petrosoft Ltd!-->
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title> Petrosoft Gas Depot </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/header-icon.png">
    <link rel="stylesheet" href="vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/sweetalert2/dist/sweetalert2.min.css">
    <link href="vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<style>
   
    .toggle {
        position: relative;
        box-sizing: border-box;
      }
      .toggle input[type="checkbox"] {
        position: absolute;
        left: 0;
        top: 0;
        z-index: 10;
        width: 100%;
        height: 100%;
        cursor: pointer;
        opacity: 0;
      }
      .toggle label {
        position: relative;
        display: flex;
        align-items: center;
        box-sizing: border-box;
      }
      .toggle label:before {
        content: '';
        width: 56px;
        height: 22px;
        background: #ccc;
        box-shadow: inset 0 0 0 0px #13bf11;
        position: relative;
        display: inline-block;
        border-radius: 20px;
        box-sizing: border-box;
        transition: 0.2s ease-in;
      }
      .toggle label:after {
        content: '';
        position: absolute;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        left: 0;
        top: -4px;
        z-index: 2;
        background: #fff;
        box-shadow: 0 1px 10px #0005;
        box-sizing: border-box;
        transition: 0.2s ease-in;
      }
      .toggle input[type="checkbox"]:checked + label:before {
        box-shadow: inset 40px 0 0 #13bf11;
      }
      .toggle input[type="checkbox"]:checked + label:after {
        left: 26px;
      }
      
  </style>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<body>

    <!--*******************
        Preloader start
    ********************-->
   
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="show" style="display:none"></div>
    <div ng-app="">
    <div id="invoice-POS" id="invoice-POS" style="display:none">

        <img src="images/rlogo.png" class="center" alt="gaspos-logo">
        <!-- <center id="top">
          <div class="logo"></div>-->
          <center>
            <h2 style="font-weight: bolder;">Access Gas Station</h2>
          </center>
          <!-- <div class="info"> 
            <h2>SBISTechs Inc</h2>
          </div>End Info
        </center>End InvoiceTop -->
        
        <div id="mid">
          <center class="info">
            <h2>Contact Info</h2>
            <p> 
                Address : street city, state 0000</br>
                Email   : JohnDoe@gmail.com</br>
                Phone   : 555-555-5555</br>
            </p>
          </center>
        </div><!--End Invoice Mid-->
        
        <div id="bot">
    
                        <div id="table">
                          <table>
                            <tbody>
                              <tr>
                                <td>Sale ID</td>
                                <td>26 - 02151313</td>
                              </tr>
                              <tr>
                                <td>Date</td>
                                <td>Feb 15, 2023</td>
                              </tr>
                              <tr>
                                <td>Satus</td>
                                <td>Approved</td>
                              </tr>
                              <tr>
                                <td>Sales Rep</td>
                                <td>Okeke Thomas</td>
                              </tr>
                              <tr>
                                <td>Customer Name</td>
                                <td>{{ customer_name_input }}</td>
                              </tr>
                            </tbody>
                            
                          </table><br><br>

                          <table>
                            <tr class="tabletitle">
                              <td class="item"><h2>Item</h2></td>
                              <td class="Rate"><h2>Rate</h2></td>
                              <td class="Hours"><h2>Quantity</h2></td>
                              <td class="amount"><h2>Amount</h2></td>
                          </tr>

                          <tr class="service">
                              <td class="tableitem"><p class="itemtext">Cooking Gas<br>---<br>Pump 10A</p></td>
                              <td class="tableitem"><p class="itemtext">900.00</p></td>
                              <td class="tableitem"><p class="itemtext">{{ kg_input }} kg</p></td>
                              <td class="tableitem"><p class="itemtext" id="amount1"></p></td>
                          </tr>
                          </table><br><br>

                          <table>
                            <tbody>
                              <tr>
                                <td>Qty</td>
                                <td>{{ kg_input }} kg</td>
                              </tr>
                              <tr>
                                <td>Amount</td>
                                <td id="sum"></td>
                              </tr> 
                              <tr>
                                <td>Mode of Payment</td>
                                <td>{{ mode_payment }}</td>
                              </tr>      
                            </tbody>
                            
                          </table>
                           
                        </div><!--End Table-->
    
                        <div id="legalcopy">
                            <p class="legal"><strong>Thank you for your business!</strong>  Payment is expected within 31 days; please process this invoice within that time. There will be a 5% interest charge per month on late invoices. 
                            </p>
                        </div>
    
                           <button class="btn btn-primary" id="" onclick="redirect()">Back</button>
                      <button class="btn btn-success" onclick="print()">Print Receipt</button>
                

                  </div>
    </div>
   
    <div id="main-wrapper" >

        <!--**********************************
            Nav header start (Logo here)
        ***********************************-->
        <div class="nav-header bg-success">
            <a href="index-2.html" class="brand-logo">


            </a>

            <div class="nav-control">
                <div class="hamburger ">
                    <span class="line bg-success"></span><span class="line bg-success"></span><span
                        class="line bg-success"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
    <!--**********************************
        Search bar start
    ***********************************-->

                            <div class="search_bar dropdown">
                                <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                                    <i class="mdi mdi-magnify" style="color: #589650;"></i>
                                </span>
                                <div class="dropdown-menu p-0 m-0">
                                    <form>
                                        <input class="form-control" type="search" placeholder="Search"
                                            aria-label="Search">
                                    </form>
                                </div>
                            </div>
                        </div>
     <!--**********************************
        Main wrapper ends
    ***********************************-->
<!--**********************************
 count down timer/ Online status / profile dropdown start
    ***********************************-->

    <ul class="navbar-nav header-right">
        <li class="nav-item dropdown header-profile">
            <a class="nav-link mt-2">
                <h6 class="mb-4" id="network"></h6>
            </a>
            
        </li>
        <li class="nav-item dropdown header-profile" >
            <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                <i class="mdi mdi-account"></i>
            </a>
            
            <div class="dropdown-menu dropdown-menu-right">
                <a href="profile.html" class="dropdown-item">
                    <i class="icon-user"></i>
                    <span class="ml-2">Profile </span>
                </a>

                <a href="index.html" class="dropdown-item">
                    <i class="icon-key"></i>
                    <span class="ml-2">Logout </span>
                </a>
            </div>
        </li>
        <li class="nav-item dropdown header-profile mt-1" >
        <div class="toggle">
            <input type="checkbox"/>
            <label></label>
        </div>
        </li>

                        <!--**********************************
        count down timer / online status/profile dropdown ends
    ***********************************-->
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="quixnav bg-success" id="quixnav">
            <div class="quixnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label first" style="color: black;font-weight:bold">RETAIL SALES </li>
                    <li><a class="has-arrow" href="javascript:void()" style="color: black;" aria-expanded="false"><i
                                class="icon icon-single-04" style="color: black;"></i><span class="nav-text"
                                style="color: black;">Retail Sales</span></a>
                        <ul aria-expanded="false">
                            <li style="color: black;"><a href="dashboard.html" style="color: black;">Sale Gas</a></li>
                        </ul>
                    </li>
                    <li class="nav-label first" style="color: black;font-weight:bold"> SALES REPORT </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false" style="color: black;"><i
                                class="icon icon-globe-2icon icon-globe-2" style="color: black;"></i><span
                                class="nav-text" style="color: black;">Sales Report</span></a>
                        <ul aria-expanded="false">
                            <li><a href="shiftsales-report.html" style="color: black;">Sales Report</a></li>
                            <li><a href="detailed_sales_report.html" style="color: black;">Detailed Sales Report</a>
                            </li>
                            <li><a href="customers.html" style="color: black;">Customers</a></li>
                        </ul>
                    </li>
                    <li class="nav-label" style="color: black;font-weight:bold">DEALEAR SALES</li>
                    <li><a class="has-arrow" href="javascript:void()" style="color: black;" aria-expanded="false"><i
                                class="icon icon-app-store" style="color: black;"></i><span class="nav-text"
                                style="color: black;">Dealer's </span></a>
                        <ul aria-expanded="false">
                            <li><a href="dealers-dashboard.html" style="color: black;">Dealer Sale Gas</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"
                                    style="color: black;">Manage Dealer's</a>
                                <ul aria-expanded="false">
                                    <li><a href="add-dealer.html" style="color: black;">Add Dealer's</a></li>

                                </ul>
                            </li>
                            <li><a href="all-dealers.html" style="color: black;">Manage Dealer's Profile</a></li>
                        </ul>
                    </li>

                    <li class="nav-label" style="color: black;font-weight:bold">INVENTORY SALES</li>
                    <li><a class="has-arrow" href="javascript:void()" style="color: black;" aria-expanded="false"><i
                                class="icon icon-world-2" style="color: black;"></i><span class="nav-text"
                                style="color: black;">Inventory</span></a>
                        <ul aria-expanded="false">

                            <li><a href="accessories.html" style="color: black;">Sale Accessories</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"
                                    style="color: black;">Manage
                                    Accessories</a>
                                <ul aria-expanded="false">
                                    <li><a href="add_accessories.html" style="color: black;">Add an Accessories</a></li>
                                    <li><a href="add_categories.html" style="color: black;">Add new Category</a></li>

                                </ul>
                            </li>
                            <li><a href="accessories_report.html" style="color: black;">Accessories Report</a></li>

                        </ul>
                    </li>

                </ul>
            </div>


        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body" style="background-color: #589650;">
            <div class="container-fluid">
                <!--**********************************
                Adjustable nav top-menu hide/show start
             ***********************************-->
                <div class="row page-titles mx-0 bg-success" style=" padding: left-150px,right-150px; display:none;"
                    id="topmenu">

                    <div class="col-sm-2">

                    </div>
                    <div class="col-sm-2 dropdown">

                        <img src="images/cynlinder.png" alt="" srcset=""
                            style="border-radius:50px;background-color:white;">
                        <p style="color:black; font-weight:bold">Retail Sales</p>
                        <div class="dropdown-content bg-success">
                            <ul>
                                <li><a href="dashboard.html" style="color: black;">Sell Gas</a></li>

                            </ul>
                        </div>
                    </div>


                    <div class="col-sm-2 dropdown">
                        <img src="images/dll.jpg" alt="" srcset="" style="border-radius:50px;background-color:white;">
                        <p style="color: black; font-weight:bold">Dealer Sales</p>
                        <div class="dropdown-content bg-success">
                            <ul>

                                <li><a href="#" style="color: black;">Dealer Sale Gas</a></li>
                                <li>
                                    <a href="#" style="color: black;">Add Dealer's</a>
                                </li>
                                <li><a href="#" style="color: black;">View a Dealer's Report</a></li>

                                <li><a href="#" style="color: black;">Dealer's Sales Report</a></li>
                            </ul>

                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2 dropdown">
                        <img src="images/buy.jpg" alt="" srcset="" style="border-radius:50px;background-color:white;">
                        <p style="color: black; font-weight:bold">Inventory Purchase</p>
                        <div class="dropdown-content bg-success">
                            <ul>
                                <li><a href="#" style="color: black;">Sell Accessories</a></li>
                                <li><a href="#" style="color: black;">Add Category Accessories</a></li>
                                <li><a href="shiftsales-report.html" style="color: black;">Inventory Report</a></li>


                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2 dropdown">
                        <img src="images/sales-icon.png" alt="" srcset=""
                            style="border-radius:50px;background-color:white;">
                        <p style="color: black; font-weight:bold">Sales Report</p>
                        <div class="dropdown-content bg-success">
                            <ul>

                                <li><a href="shiftsales-report.html" style="color: black;">Sales Report</a></li>
                                <li><a href="#" style="color: black;">Detailed Sales Report</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">

                    </div>

                </div>
 <!--**********************************
        Adjustable menu ends
    ***********************************-->
 <!--**********************************
       content body start here
    ***********************************-->
    <input type="text" hidden class="form-control" id="priceinput"  name="price" >
            <div class="row" >
                    <div class="col-xl-8 col-xxl-8 col-lg-6 col-sm-6">
                        <div class="card pt-3">
                            <div class="card-header">
                                <h5 class="card-title pb-4">Access Gas Station Ibadan</h5>
                            </div>
                            <div class="card-body">

                                <div class="wizard" id="wizard">
                                    <div class="wizard-inner">
                                        
                                        <ul class="nav nav-tabs " role="tablist">
                                            <li role="presentation" class="active">
                                                <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab"
                                                    aria-expanded="true"><span class="round-tab">1 </span> <i
                                                        class="pl-4">Initiate</i></a>
                                            </li>
                                            <li role="presentation" class="disabled">
                                                <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab"
                                                    aria-expanded="false"><span class="round-tab">2</span> <i
                                                        class="pl-4">Pricing</i></a>
                                            </li>
                                            <li role="presentation" class="disabled">
                                                <a href="#step3" data-toggle="tab" aria-controls="step3"
                                                    role="tab"><span class="round-tab">3</span> <i
                                                        class="pl-4">Payment</i></a>
                                            </li>
                                            <li role="presentation" class="disabled">
                                                <a href="#step4" data-toggle="tab" aria-controls="step4"
                                                    role="tab"><span class="round-tab">4</span> <i class="pl-4">Confirm
                                                    </i></a>
                                            </li>
                                        </ul>
                                    </div>

                                    <form role="form" action="index.html" id="retail" class="login-box">
                                        <div class="tab-content" id="main_form">
                                            <div class="tab-pane active" role="tabpanel" id="step1">
                                                <div class="col-xs-12">
                                                    <div class="col-md-12">
                                                       
                                                        <center>
                                                           
                                                            <div class="basic-form">
    <!--**********************************
       step form start
    ***********************************-->
                                                                
                                                              
   <!--**********************************
        product start
    ***********************************-->
                                                                        <input  class="form-control form-control-lg" hidden value="GAS"/>

     <!--**********************************
        Product ends
    ***********************************-->
                                                                    <div class="card-header">
                                                                        <h4 class="card-title"> Select Nozzle </h4>
                                                                    </div>


     <!--**********************************
        nozzle select  start
    ***********************************-->
                                                                    <div class="form-group">
                                                                        <select id="list_dispenser" class="form-control form-control-lg">
                                                                          
                                                                        </select>
                                                                    </div>
    <!--**********************************
        nozzle  select ends
    ***********************************-->
     <!--**********************************
        price sold per kg(note this is hidden) start
    ***********************************-->
                
                 <input type="text" hidden class="form-control"  id="customertype-input" name="customer" value="regular">
     <!--**********************************
        price sold per kg ends
    ***********************************-->
                                                                
                                                            </div>
                                                        </center>
                                                    </div>
                                                </div>
    <!--**********************************
        next button start
    ***********************************-->
                                                <ul class="list-inline pull-right">
                                                    <li><button type="button" class="default-btn next-step">Continue to
                                                            next step</button></li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane" role="tabpanel" id="step2">
                                                <div class="col-xs-12">
                                                    <div class="col-md-12">
                                                        <h3> Pricing </h3>
                                                        
                                                        <center>

                                                            <div class="card-body">
                                                                <div class="basic-form">

    <!--**********************************
       kg of gas start
    ***********************************-->
                                        <div class="form-group">
                                        <label style="display: block;">Kg Of Gas</label>
                                              <input maxlength="100" type="number"  required="required" ng-model="kg_input" id="quantity" name="quantity" min="1" max="100" auto-complete="off" value="0" step="1" class="kg-textfield" placeholder="0.00" />
                                         
                                        </div>

   <!--**********************************
        kg of gas ends
    ***********************************-->
                                                                    

                                                                    <!--**********************************
        Amount start
    ***********************************-->
             <div class="card-header">
                 <h4 class="card-title">Amount</h4>
             </div>
  <div class="form-group">
     <label class="col-sm-3 col-form-label " style=" display: inline-block;text-align:right;font-size:2.6em">₦</label>
    <input required="required" name="amount" ng-model="amount" class="text-center text-giant total" placeholder="0.00" style="display: inline-block;" />
   </div>
   <!--**********************************
        Amount ends
    ***********************************-->
         <div class="card-header">

     <!--**********************************
       Mode Of Payment start
    ***********************************-->
         <h4 class="card-title">Mode of Payment </h4>
                </div>
             <div class="card-body">
            <div class="basic-form">
         <div class="form-group">
      <!--**********************************
        By Cash start
    ***********************************-->
        <label class="radio-inline" style="margin-left: 20px;">
            <input type="radio" onclick="checkButton()" name="mode_payment" ng-model="mode_payment" id="cash" value="cash"> Cash
         </label>

     <!--**********************************
        By cash ends 
    ***********************************-->


    <!--**********************************
       By Transfer start
    ***********************************-->
        <label class="radio-inline" style="margin-left: 20px;">
            <input type="radio" onclick=" checkButton()" name="mode_payment" ng-model="mode_payment"  id="transfer" value="transfer"> Transfer
        </label>
    <!--**********************************
        By Transfer ends
    ***********************************-->


     <!--**********************************
        By POS start
    ***********************************-->
        <label class="radio-inline" style="margin-left: 20px;">
          <input type="radio" onclick=" checkButton()" ng-model="mode_payment" name="mode_payment" id="pos" value="pos"> POS
        </label>
    <!--**********************************
        By POS ends
    ***********************************-->


    <!--**********************************
        by Multiple  start
    ***********************************-->

                     <label class="radio-inline" style="margin-left: 20px;">
                     <input type="radio" onclick=" checkButton()" name="mode_payment" id="multiple" value="multiple"> Multiple
                </label>
             </div>
             <div class="alert alert-danger alert-dismissible alert-alt fade show" id="error" style="display: none;">
                <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                </button>
                <strong>Wait!</strong> Error Made in Entry.
            </div>
     <!--**********************************
        by multiple start
    ***********************************-->

    <!--**********************************
        Choose Prefer Bank to transfer to. (Shows if transfer is selected ) start
    ***********************************-->
             <div id="transferoption" style="display: none;">
                     <h6> Choose Preferred Transfer Account </h6>
                     <center>


                 <div class="form-group">
                    <select class="form-control form-control-lg">
                         <option> Access Bank (Main Account) </option>
                         <option> FCMB (Sub Station Account) </option>
                         <option> PalmPay(Auxiliary Account) </option>
                     </select>
                </div>
            </div>
    <!--**********************************
        Prefer Bank Account ends here
    ***********************************-->

     <!--**********************************
        Choose Prefer POS to send to. (Shows if POS is selected ) start
    ***********************************-->

                        <div id="posoption" style="display: none;">
                            <h6> Choose Preferred POS Account</h6>
                            <center>
                              <div class="form-group">
                    <select class="form-control form-control-lg">
                         <option> Access Bank (Main Account) </option>
                         <option> FCMB (Sub Station Account) </option>
                         <option> PalmPay(Auxiliary Account) </option>
                     </select>
                </div>
                         </div>
 <!--**********************************
        Choose Prefer POS to send to ends
    ***********************************-->
    <!--**********************************
        Choose Prefer multiple to send to start
    ***********************************-->
                            <div id="multipleoption" style="display: none;">
                                 <h6> Choose How you wish to pay</h6>
                                 <center>
<!--**********************************
        Choose Prefer Mutiple mode to send to ends
    ***********************************-->
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label  class="control-label">Mode of Payment</label>
                                                     <select class="form-control form-control">
                                                        <option disabled selected> Select Mode of Payment </option>
                                                        <option onclick=" checkPartPayment()" name="optradio" id="partlycash"> Cash</option>
                                                         <option onclick=" checkPartPayment()" name="optradio" id="partlytransfer">  Transfer </option>
                                                          <option onclick=" checkPartPayment()" name="optradio" id="partlypos">POS</option>
                                                     </select>
                                         </div>
                                    </div>
                                   
<!--**********************************
        Choose Prefer Mutiple mode to send to ends
    ***********************************-->
                                        <div class="col-5"   id="partlytransferoption" style="display: none;">
                                           <div class="form-group">
                                             <label   class="control-label">Bank Type</label>
                                                <select class="form-control form-control">
                                                  <option> Access Bank </option>
                                                   <option> FCMB </option>
                                                    <option> PalmPay</option>
                                                </select>
                                            </div>
                                         </div>
                                        <div class="col-5" id="partlyposoption" style="display: none;">
                                            <div class="form-group">
                                                 <label class="control-label"> POS </label>
                                                     <select class="form-control form-control">
                                                          <option> POS 1 (PALMPAY) </option>
                                                          <option> POS 2 (MONIEPOINT)</option>
                                                     </select>
                                            </div>
                                        </div>

              <div class="col-3">
                     <div class="form-group">
                         <label class="control-label">Amount to Pay</label>
                           <input type="number" class="form-control deduct" />
                     </div>
                    </div>
                                     <div class="h_line mt-2 mb-4">  </div>
               </div>
                 <div class="row">
                   <div class="col-4">
                        <div class="form-group">
                          <label class="control-label">Mode of Payment</label>
                              <select class="form-control form-control">
                                <option disabled selected> Select Mode of Payment </option>
                                <option onclick=" checkPartPaymentTwo()" name="optradio" id="partlycashTwo"> Cash</option>
                                <option onclick=" checkPartPaymentTwo()" name="optradio" id="partlytransferTwo">  Transfer </option>
                                 <option onclick=" checkPartPaymentTwo()" name="optradio" id="partlyposTwo">POS</option>
                             </select>
                        </div>
                    </div>


                           <div class="col-5" id="partlytransferoptionTwo" style="display: none;">
                                <div class="form-group">
                                    <label class="control-label">Bank Type</label>
                                         <select class="form-control form-control">
                                            <option> Access Bank </option>
                                             <option> FCMB </option>
                                             <option> PalmPay </option>
                                           </select>
                                 </div>
                             </div>



                 <div class="col-5" id="partlyposoptionTwo" style="display: none;">
                    <div class="form-group">
                         <label  class="control-label">  POS </label>
                            <select class="form-control form-control">
                                  <option> POS 1 (PALMPAY)</option>
                                     <option> POS 2 (MONIEPOINT) </option>
                             </select>
                     </div>
                 </div>
                 <div class="col-3">
                    <div class="form-group">
                         <label class="control-label">Balance Left</label>
                             <input  class="form-control balance"  type="number" /> </div>
                     </div>
                    </div>

                  </div>
                </div>
                </center>
               
             </div>
            </div>
                                                <ul class="list-inline pull-right">
                                                    <li><button type="button"
                                                            class="default-btn prev-step">Back</button></li>
                                                    <li><button type="button"
                                                            class="default-btn next-step skip-btn">Add Another Purchase</button></li>
                                                    <li><button type="button"
                                                            class="default-btn next-step">Continue</button></li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane" role="tabpanel" id="step3">
                                                <div class="col-xs-12">
                                                    <div class="col-md-12">

                                                        <h3> Payment Details </h3>



                                                        <div class="form-group">
                                                            <label class="control-label">Enter Customer Name</label>
                                                            <input maxlength="200" type="text" id="name" name="name" required="required"
                                                                class="form-control" ng-model="customer_name_input"
                                                                placeholder="Enter Customer Name" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">Enter Customer Phone
                                                                Number</label>
                                                            <input maxlength="200" type="phone" id="phone" name="phone" required="required"
                                                                class="form-control" ng-model="customer_phone_input"
                                                                placeholder="Enter Customer Phone" />
                                                        </div>

                                                    </div>

                                                </div>
                                                <ul class="list-inline pull-right">
                                                    <li><button type="button"
                                                            class="default-btn prev-step">Back</button></li>
                                                    <li><button type="button"
                                                            class="default-btn next-step skip-btn">Skip</button></li>
                                                    <li><button type="button"
                                                            class="default-btn next-step">Continue</button></li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane" role="tabpanel" id="step4">
                                                <div class="col-xs-12">
                                                    <div class="col-md-12">
                                                        <h3> Confirm Information</h3>
                                                        <div class="row">
                                                            <div class="col-xl-5 col-xxl-5 col-lg-5 col-sm-5">
                                                                <div class="card-header">
                                                                    <h5 class="card-title">Name: </h5>
                                                                    <div class="card-title">{{ customer_name_input }}</div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="card-header">
                                                                    <h5 class="card-title">Phone : </h5>
                                                                    <div class="card-title" style="color: green;"id="customer_phone">
                                                                        {{ customer_phone_input }}   
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <hr class="solid">
                                                        <div class="row">
                                                            <div class="col-3">
                                                                <div class="card-header">
                                                                    <h5 class="card-title">Kg : </h5>
                                                                    <h5 class="card-title"> {{ kg_input }}kg  </h5>
                                                                </div>
                                                            </div>
                                                            <div class="col-5">
                                                                <div class="card-header">
                                                                    <h5 class="card-title">Amount : </h5>
                                                                    <h5 class="card-title" id="amount" style="color: green;">
                                                                     {{ amount }}   
                                                                    </h5>
                                                                </div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="card-header">
                                                                    <h5 class="card-title">Mode : </h5>
                                                                    <h5 class="card-title" style="color: green;" id="customer_mode_payment">
                                                                        {{ mode_payment }}
                                                                    </h5>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <hr class="solid">


                                                    </div>

                                                    <ul class="list-inline pull-right">
                                                        <li><button type="button"
                                                                class="default-btn prev-step">Back</button></li>
                                                       
                                                        <li>
                                                            <button class="prev-step"  value="submit" id="submitBtn"
                                                            ><span class="prev-step"><span class="prev-step"><span class="prev-step" ><span class="prev-step" > Finish!</button></span>
                                                        </li>

                                                        
                                                    </ul>
                                                </form>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>

                                    </form>
                                </div>
                    </div>

                            <div class="span" id="step-wizard" style="display:none">
           
                            <div class="stepwizard"  >
                                <div class="stepwizard-row setup-panel">
                                    <div class="stepwizard-step">
                                        <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                                        <p>Initiate</p>
                                    </div>
                                    <div class="stepwizard-step">
                                        <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                                        <p>Payment</p>
                                    </div>
                                    <div class="stepwizard-step">
                                        <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                                        <p>Confirm</p>
                                    </div>
                                </div>
                            </div>
                            <form role="form">
                                <div class="setup-content" id="step-1">
                                    <div class="col-xs-12">
                                        <div class="col-md-12">
                                            <h3> Initiate </h3>
                                            <div class="form-group">
                                                <h3> Product </h3>
                                                <!--**********************************
                                                     product start
                                                 ***********************************-->
                                                 <select id="list" class="form-control form-control-lg" onselect="test()"></select>
                                             </div>
                                             <div class="card-header">
                                                <h4 class="card-title"> Select Nozzle </h4>
                                            </div>
<!--**********************************
nozzle select  start
***********************************--> 
<div class="form-group">
<select id="dispensers" class="form-control form-control-lg">
 </select>
                                            </div>
                                            <button class="btn btn-primary nextBtn btn-lg pull-right" onclick="test()" type="button" >Next</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="setup-content" id="step-2">
                                    <div class="col-xs-12">
                                        <h3> Payment </h3>
                                        <div class="col-md-12">
                                           
                                            <h4 class="card-title">Mode of Payment </h4>
                                        </div>
                                     <div class="card-body">
                                    <div class="basic-form">
                                 
                              <!--**********************************
                                By Cash start
                            ***********************************-->
                            <center>
                                <label class="radio-inline" style="margin-left: 20px;">
                                    <input type="radio" onclick="checkButton()" name="mode_payment" ng-model="mode_payment" id="cash" value="cash"> Cash
                                 </label>
                        
                             <!--**********************************
                                By cash ends 
                            ***********************************-->
                        
                        
                            <!--**********************************
                               By Transfer start
                            ***********************************-->
                                <label class="radio-inline" style="margin-left: 20px;">
                                    <input type="radio" onclick=" checkButton()" name="mode_payment" ng-model="mode_payment"  id="transfer" value="transfer"> Transfer
                                </label>
                            <!--**********************************
                                By Transfer ends
                            ***********************************-->
                        
                        
                             <!--**********************************
                                By POS start
                            ***********************************-->
                                <label class="radio-inline" style="margin-left: 20px;">
                                  <input type="radio" onclick=" checkButton()" ng-model="mode_payment" name="mode_payment" id="pos" value="pos"> POS
                                </label>
                            <!--**********************************
                                By POS ends
                            ***********************************-->
                     
                            <!--**********************************
                                by Multiple  start
                            ***********************************-->
                        
                                             <label class="radio-inline" style="margin-left: 20px;">
                                             <input type="radio" onclick=" checkButton()" name="mode_payment" id="multiple" value="multiple"> Multiple
                                        </label>
                                    </center>
                                     </div>
                                     <div class="form-group">
                                        <label class="control-label">Enter Customer Name</label>
                                        <input maxlength="200" type="text" id="name" name="name" required="required"
                                            class="form-control" ng-model="customer_name_input"
                                            placeholder="Enter Customer Name" />
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Enter Customer Phone
                                            Number</label>
                                        <input maxlength="200" type="phone" id="phone" name="phone" required="required"
                                            class="form-control" ng-model="customer_phone_input"
                                            placeholder="Enter Customer Phone" />
                                    </div>
                                            <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                                        </div>
                                    </div>
                                </div>
                                <div class=" setup-content" id="step-3">
                                   
                                            <div class="col-md-12">
                                                <h3> Confirm Information</h3>
                                                <div class="row">
                                                    <div class="col-xl-5 col-xxl-5 col-lg-5 col-sm-5">
                                                        <div class="card-header">
                                                            <h5 class="card-title">Name: </h5>
                                                            <div class="card-title">{{ customer_name_input }}</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="card-header">
                                                            <h5 class="card-title">Phone : </h5>
                                                            <div class="card-title" style="color: green;"id="customer_phone">
                                                                {{ customer_phone_input }}   
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <hr class="solid">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <div class="card-header">
                                                            <h5 class="card-title">Kg : </h5>
                                                            <h5 class="card-title"> {{ kg_input }}kg  </h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-5">
                                                        <div class="card-header">
                                                            <h5 class="card-title">Amount : </h5>
                                                            <h5 class="card-title" id="amount" style="color: green;">
                                                             {{ amount }}   
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="card-header">
                                                            <h5 class="card-title">Mode : </h5>
                                                            <h5 class="card-title" style="color: green;" id="customer_mode_payment">
                                                                {{ mode_payment }}
                                                            </h5>
                                                        </div>
                                                    </div>

                                                </div>
                                                <hr class="solid">


                                            <button class="btn btn-success btn-lg pull-right" type="submit">Finish!</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
            </div>
    
</div>
</div>
                <div class="col-xl-3 col-xxl-4 col-lg-4 col-sm-4 ">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Overview</h5>
                        </div>
                        <div class="card-body">

                            <div class="card-header">
                                <h5 class="card-title">Cashier : </h5>
                                <h5 class="card-title" style="color: green;">Mrs Victoria Nwokolo </h5>
                            </div>
                            <div class="card-header">
                                <h5 class="card-title">Shifts : </h5>
                                <h5 class="card-title">Morning Shift </h5>
                            </div>
                            <div class="card-header">
                                <h5 class="card-title">Price Per Kg : </h5>
                                <h5 class="card-title" id="pricekg" style="color: green;"> </h5>
                            </div>
                            <div class="card-header">
                                <h5 class="card-title">Date : </h5>
                                <h5 class="card-title" id="date" >  </h5>
                            </div>
                        </div>
                        <div class="card-footer d-sm-flex justify-content-between">
                            <div class="card-footer-link mb-4 mb-sm-0">
                                <p class="card-text text-dark d-inline">Price updated 3 mins ago</p>
                            </div>
                            <li><button type="button" onclick="viewlocal()" class="default-btn prev-step">debug local storage</button></li>
                        </div>
                    </div>
                </div>
            </div>








            <!--**********************************
            Footer start
        ***********************************-->
            <div class="footer">
                <div class="copyright">
                    <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Petrosoft Limited</a>
                        2019
                    </p>
                    <p>Distributed by <a href="https://petrosoft.com.ng/" target="_blank">Petrosoft</a></p>
                </div>
            </div>
            <!--**********************************
            Footer end
        ***********************************-->

            <!--**********************************
           Support ticket button start
        ***********************************-->

            <!--**********************************
           Support ticket button end
        ***********************************-->


        </div>
         </div>
        </div>

        <!-- Required vendors -->
        <script src="vendor/global/global.min.js"></script>
        <script src="js/quixnav-init.js"></script>
        <script src="js/custom.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
        <script src="vendor/sweetalert2/dist/sweetalert2.min.js"></script>
        <script src="js/plugins-init/sweetalert.init.js"></script>

</body>



<!-- Mirrored from technext.github.io/focus-2/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Jan 2022 10:36:53 GMT -->

</html>

<script>
  $(document).ready(function () {
    var json = { "action": "retail_products_list", "user_id": 616, "token": "6161676986787Q6jheup2LqzakUfyEJGVA9W3mKicFs7SPdvC1" };
    const list = document.getElementById("list");
    
    
   
    $.ajax({
        type: "POST",
        url: "https://demo.station.cloud-sync.biz/api/pos.php",
        // The key needs to match your method's input parameter (case-sensitive).
        data: JSON.stringify(json),
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        crossDomain:true,
        success: function(data){
            data.data.forEach(product => {
           
               list.innerHTML += `<option value="${product.id}"
                data-cost="${product.cost}" data-selling="${product.selling}" data-name="${product.name}"
                > ${product.name} Balance [${product.balance}]  </option>`;
            });
            
        },
        error: function(errMsg) {
            alert("cant load");
        }
    });

    list.addEventListener("change", test);
});


function test(){
   var hope = list.getAttribute("data-selling");
    alert (hope + list.value )
  
}
</script>


<script>
    var date = new Date();
    var current_date = date.getDate()+"-"+(date.getMonth()+1)+"-"+ date.getFullYear();
	document.getElementById("date").innerHTML = current_date;;
</script>
<script>
    $(function(){
        var interval = null,
            ajaxSent = true,
            ajaxObject = false,
            sirenOn = false,
            sirenSRC = "data:audio/wav;base64,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%3D%3D"
            loader = ['-','\\','|','/'],
            i = 0;
        $('#network').append(' <li class="connect nav-item dropdown header-profile">');
        $('#network').append('<li id="siren" class="mb-1 mr-3" style="display:inline-block"></li>');
        $('#network').append('<li class="mb-1 mr-3" id="msg" style="color:green;"></li>');
        
        $(document).ready(function () {
            if (interval == null) {
               
                interval = setInterval(check, 2000);
            }
            else {
                if (ajaxObject) {
                    ajaxObject.abort();
                    ajaxObject = null;
                }
                sirenToggle(false);
                $('#loader').html('');
                $('#msg').html('');
                clearTimeout(interval);
                interval = null;
            }
        });
        
        function loading(){
            i = (i + 1) % 4;
            $('#loader').html(loader[i]);
        }
        function check() {
            if (ajaxSent) {
                $('#msg').html('Checking...');
                ajaxSent = false;
                ajaxObject = $.ajax({
type: 'HEAD',
                    url: document.location.href,
                    success: success,
                    error: fail,
                    timeout: 3000
                });
            }
        }
        function success() {
            $('#msg').html('Your connection is up :)');
            ajaxSent = true;
            sirenToggle(false);
            loading();
        }
        function fail() {
            $('#msg').html('Your connection is down :(');
            ajaxSent = true;
            sirenToggle(true);
            loading();
        }
        function sirenToggle(start) {
            if (start && $('#siren').html() == '') {
                $('#siren').html("<embed style='height: 0px; width: 0px' src='" + sirenSRC + "' autostart='true' loop='true'></embed>");
            }
            if (!start && $('#siren').html() != '') {
                $('#siren').html('');
            }
        }
    });
</script>
<script>
    $(document).ready(function () {
        var json= { "action": "dispensers_list", "user_id": 616, "token": "6161676986787Q6jheup2LqzakUfyEJGVA9W3mKicFs7SPdvC1" };
        const dispenser_list = document.getElementById("list_dispenser","dispensers");
        const dispensers = document.getElementById("dispensers");
        $.ajax({
            type: "POST",
            url: "https://demo.station.cloud-sync.biz/api/pos.php",
            // The key needs to match your method's input parameter (case-sensitive).
            data: JSON.stringify(json),
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            crossDomain:true,
            success: function(data){
                data.data.forEach(tank => {
                    dispensers.innerHTML += `<option value="${tank.tank_name}" onselect="test()">${tank.name} -- ${tank.product_name}  </option>`;
                    dispenser_list.innerHTML += `<option value="${tank.tank_name}">${tank.name} -- ${tank.product_name}  </option>`;
                });
               
            },
            error: function(errMsg) {
                alert("cant load");;
            }
        });
    });
</script>

<script>
    $(document).ready(function () {
      var json = { "action": "products_get", "user_id": 616, "token": "6161676986787Q6jheup2LqzakUfyEJGVA9W3mKicFs7SPdvC1" ,"product_id": 461};
      const pricing = document.getElementById("priceinput");
      const price = document.getElementById("pricekg");
      $.ajax({
          type: "POST",
          url: "https://demo.station.cloud-sync.biz/api/pos.php",
          // The key needs to match your method's input parameter (case-sensitive).
          data: JSON.stringify(json),
          contentType: "application/json; charset=utf-8",
          dataType: "json",
          crossDomain:true,
          success: function(data){
           
            pricing.value = data.data.selling; 
            price.innerHTML += `<h5 class="card-title"  style="color: green;">₦${data.data.selling} - 1Kg </h5>`;
          },
          error: function(errMsg) {
              alert("cant load");
          }
      });
  });
  </script>