<!DOCTYPE html>
<html lang="en">
<head>
    <title> Inovar Locações e Equipamentos &amp; Containers, ferramentas e muito mais para sua construçao e aplicação Industrial - Inovar Locações </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="description" content="Herc Rentals offers daily, weekly, monthly rates for equipment &amp; tool rentals for construction and industrial applications. Find a location near you with over 275 locations in the United States and Canada."/>
    <meta name="keywords" content=" Herc equipment rental, equipment rental, equipment sales, used equipment, construction equipment, earthmoving equipment, industrial equipment, plant services, heavy equipment "/>
    <meta name="language" content="pt">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/site.css')}}" >
    <link rel="stylesheet" href="{{asset('css/herccatalog.css')}}" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<section class="menuBrdr">
    <div class="container">
        <div class="row">
            <div class="logoCont col-sm-7 col-md-7 col-lg-7">
                <div class="logoimagepath">
                    <div class="logoimg"><div>
                            <a href="/content/herc/en.html"><img src="{{url('images/logoPretaInovar.png')}}" alt="logo" class="img-responsive"></a>
                        </div>
                    </div>
                </div>
                <div class="new section">
                </div>
                <div class="iparys_inherited">
                </div>
                <div class="need_assistance col-sm-3 col-md-3 col-lg-3">
                    <p><a href="javascript:void(0);" data-toggle="modal" data-target="#myModal1">Precisa de Assistência?</a><br/><span>888-777-2700</span></p>
                </div>
            </div>
            <div class="just-mobile">
                <div class="cart_icon"><a href="/content/herc/en/cart.html"><img alt="addCart" src="/content/dam/herc/home/header/images/addtocart_icon.png"/></a><br/><span><b></b> ITEMS</span></div>
                <div class="search_icon"><a href="#"><img alt="searchIcon" src="/content/dam/herc/home/header/images/search_icon.png"/></a></div>
                <div class="menu_icon"><a class="clsdAct" href="#"><img class="openedImg" alt="menuOpen" src="{{url('images/menuOpened.png')}}"/><img class="closedImg" alt="menuClose" src="{{url('images/menuClosed.png')}}"/></a></div>
            </div>
            <div class="topRghtCont just-desktop col-sm-5 col-md-5 col-lg-5">
                <div class="col-sm-5 col-md-5 col-lg-5">
                    <div class="top_location">
                        <span class="hidden" id="latlong"></span>
                        <span class="hidden" id="latlongzipcode"></span>
                        <div class="loc_top">
                            <img alt="pointMap" src="/content/dam/herc/home/header/images/point_map_1.png" width="20" height="20"/>
                            <p></p>
                        </div>
                        <ul class="nav">
                            <li class="dropdown">
                                <a class="editLink dropdown-toggle" href="#" data-toggle="dropdown">EDIT</a>
                                <div class="dropdown-menu">
                                    <input class="zipVal" type="text" maxlength="12" id="zipcodetext" value="" placeholder="Enter Zip Code"/>
                                </div>
                            </li>
                        </ul>
                        <div class="loc_bottom nli"><a href="javascript:void(0);">Nearest Location Info</a></div>
                        <div class="loc_bottom"><a data-toggle="modal" data-target="#myModal" href="javascript:void(0);">Nearest Location Info</a></div>
                    </div>
                </div>

                <div class="col-sm-2 col-md-2 col-lg-2">
                    <div class="cart_icon"><a href="/content/herc/en/cart.html"><img alt="addCart" src="/content/dam/herc/home/header/images/addtocart_icon.png"/></a><br/><span><b></b> ITEMS</span></div>
                </div>
                <div class="col-sm-3 col-md-3 col-lg-3">
                    <div class="loginbtn">
                        <span class="loginid">My Account<br/></span><span class="signUpHead">Sign Up<br/></span>
                        <ul class="signOut">
                            <li><a href="javascript:void(0);">LOGOUT</a></li>
                        </ul>
                        <ul class="nav">
                            <li class="dropdown">
                                <a class="loginTxt dropdown-toggle" href="javascript:void(0);" data-toggle="dropdown">LOGIN</a>
                                <div class="dropdown-menu">
                                    <div class="error-msg" style="display: none; color:#fff;">
                                        <h4>Invalid Login Credentials</h4>
                                    </div>
                                    <div class="login_left">
                                        <form method="post" action="login">
                                            <input type="text" placeholder="User ID" id="username" name="username">
                                            <input type="password" placeholder="Password" id="passwd" name="password">
                                            <input type="hidden" id="zipcode" value=""/>
                                            <p><a href="/content/herc/en/forgot-password.html">Forgot Password?</a></p>
                                            <button type="button" class="btn btn-md signin">SIGN IN</button>
                                        </form>
                                    </div>
                                    <div class="login_right">
                                        <p> Herc Rentals Accounts come with tools to make your jobs easier, faster and more rewarding.</p>
                                        <p><a href="/content/herc/en/invite-landing.html">I have an ESP invite</a></p>
                                        <p>or</p>
                                        <p><a href="/content/herc/en/create-account.html">Create Account</a></p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="cntry col-sm-2 col-md-2 col-lg-2">
                    <div class="country_btn">
                        <ul class="nav">
                            <li class="dropdown">
                                <a class="usacndflg baseTxt dropdown-toggle" href="javascript:void(0);" data-toggle="dropdown">

                                </a>
                                <a class="usacndflg usaImg commonCss dropdown-toggle" href="javascript:void(0);" data-toggle="dropdown"><img alt="usaFlag" src="/content/dam/herc/home/header/images/usa_flag_img.png"/></a>
                                <a class="usacndflg canImg commonCss1 dropdown-toggle" href="javascript:void(0);" data-toggle="dropdown"><img alt="canadaFlag" src="/content/dam/herc/home/header/images/canada_flag_img.png"/></a>
                                <div class="dropdown-menu">
                                    <div class="ctryImgs">
                                        <span class="usaImg"><a href="javascript:void(0);" class="usaImg usacndflg"><img alt="usaFlag" src="/content/dam/herc/home/header/images/usa_flag_img.png"/></a></span>
                                        <span class="canImg"><a href="javascript:void(0);" class="canImg usacndflg"><img alt="canadaFlag" src="/content/dam/herc/home/header/images/canada_flag_img.png"/></a></span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="zipModal modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <h4 class="modal-title" id="myModalLabel">Please enter your ZIP Code to see rental rates</h4>
                            <form id="" method="POST" action="#">
                                <div class="form-group">
                                    <input type="text" id="newzipcode" value="" placeholder="Zip Code"/>
                                    <button type="button" class="newzipSearch">SUBMIT</button>
                                </div>
                            </form>
                            <div class="linksCont">
                                <a href="/content/herc/en/create-account.html">I have an Account</a><br/> or
                                <a href="/content/herc/en/create-account.html">Create an Account</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="modal fade needpopup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" id="myModal1">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-xs-6 needpop-left">
                                    <div class="leftPart">
                                        <p class="lftprt_p">Fill out this form and a representative will get back to you shortly</p>
                                        <form id="" method="POST" action="#">
                                            <div class="form-group">
                                                <input type="text" id="needusername" name="username" value="" placeholder="Name">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" id="email" name="email" value="" placeholder="Email address">
                                            </div>
                                            <div class="form-group needpop-textarea">
                                                <textarea rows="6" id="comments" placeholder="What can we assist you with?"></textarea>
                                            </div>
                                            <p class="errormsg"></p>
                                            <button type="submit" class="needAssist btn btn-block">SUBMIT</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-xs-6 needpop-right">
                                    <a href="#" class="popup_close"><img src="/content/dam/herc/home/header/images/closebtn.png"></a>
                                    <div class="ritcntntblk">
                                        <p class="talk_P">Talk to a representative by phone:</p>
                                        <span>Call <b>888-777-2700</b></span><br/><br/><br/>
                                        <p>Maybe there is already a solution for your issue.</p>
                                        <p> Check out our
                                            <a href="/content/herc/en/need-help/faq.html">FAQs</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="row brdrBottom">
        <nav id="menu-1" class="mega-menu">
            <ul class="menu-logo logohide">
                <li><a href="#"> <img src="/content/dam/herc/home/header/images/logohere.png" alt="logo"> </a></li>
            </ul>
            <ul class="menu-links">
                <li class="dvidr">
                    <a href="{{url('/')}}">Equipamentos</a>
                    <div class="drop-down grid-col-12">
                        <a href="/content/herc/en/rentals.html" class="seeOvr seeOvrrntls">See Rentals Overview ></a>
                        <a href="/content/herc/en/solutions.html" class="seeOvr seeOvrsol">See Solutions Overview ></a>
                        <div class="grid-row">
                            <div class="grid-col-3">
                                <ul class="rntList">
                                    <li><a href="/content/herc/en/rentals/aerial.html"> Aerial </a></li>
                                    <li><a href="/content/herc/en/rentals/air-compressors-tools.html"> Air Compressors &amp; Tools </a></li>
                                    <li><a href="/content/herc/en/rentals/climate-control.html"> Climate Control </a></li>
                                    <li><a href="/content/herc/en/rentals/compaction-paving.html"> Compaction &amp; Paving </a></li>
                                    <li><a href="/content/herc/en/rentals/concrete-masonry.html"> Concrete &amp; Masonry </a></li>
                                    <li><a href="/content/herc/en/rentals/earthmoving.html"> Earthmoving </a></li>
                                    <li><a href="/content/herc/en/rentals/floor-care-surface-prep.html"> Floor Care &amp; Surface Prep </a></li>
                                    <li><a href="/content/herc/en/rentals/material-handling.html"> Material Handling </a></li>
                                    <li><a href="/content/herc/en/rentals/power-generation.html"> Power Generation </a></li>
                                    <li><a href="/content/herc/en/rentals/procontractor.html"> ProContractor </a></li>
                                    <li><a href="/content/herc/en/rentals/pump.html"> Pump </a></li>
                                    <li><a href="/content/herc/en/rentals/trucks-trailers.html"> Trucks &amp; Trailers </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="drop-down grid-col-12 locationNav">
                        <div class="grid-row firstNav locNav" style="padding-left:2%;">
                            <div class="container">
                                <p class="errorMsg">Please enter valid Zip Code</p>
                                <input type="text" class="zipInpt" id="zipInpt" name="zipCode" value="" placeholder="Enter ZIP code">
                                <ul class="locList">
                                    <li class="Entertainment"><a class="locIcon1" href="javascript:void(0);">Entertainment</a></li>
                                    <li class="Climate_Control"><a class="locIcon2" href="javascript:void(0);">Climate Control</a></li>
                                    <li class="Pump"><a class="locIcon3" href="javascript:void(0);">Pump</a></li>
                                    <li class="Power_Generation"><a class="locIcon4" href="javascript:void(0);">Power Generation</a></li>
                                    <li class="Used_Equipment_Sales"><a class="locIcon5" href="javascript:void(0);">Government</a></li>
                                    <li class="General_Equipment_Rental"><a class="locIcon6" href="javascript:void(0);">Industrial</a></li>
                                    <li class="Remediation_Restoration"><a class="locIcon7" href="javascript:void(0);">Remediation & Restoration</a></li>
                                    <li class="Floor_Care_Surface_Prep"><a class="locIcon8" href="javascript:void(0);">Floor Care & Surface Prep</a></li>
                                    <li class="Pro_Contractor_Tools"><a class="locIcon9" href="javascript:void(0);">Pro Contractor</a></li>
                                    <li class="Trucks_Trailers"><a class="locIcon10" href="javascript:void(0);">Trucks & Trailers</a></li>
                                    <li class="Aerial"><a class="locIcon11" href="javascript:void(0);">Aerial</a></li>
                                    <li class="Earthmoving"><a class="locIcon12" href="javascript:void(0);">Earthmoving</a></li>
                                </ul>
                                <div class="locdownloadCont just-mobile">
                                    <input type="button" class="find" value="FIND"/>
                                </div>
                                <p>Browse by <a href="/content/herc/en/locations/location_statewise_results.html">State or Province</a></p>
                                <p>Download a <a href="/content/dam/herc/Location/folder/herclocs.pdf" class="dndPdf" target="_blank">PDF</a> or <a href="/content/dam/herc/Location/folder/herclocs.xls" class="dndExl" target="_blank">Excel</a> Doc for a list of all our locations</p>
                                <div class="locdownloadCont just-desktop">
                                    <a href="/content/dam/herc/Location/folder/herclocs.pdf" class="dndPdf" target="_blank"><img src="/content/dam/herc/home/header/images/download_pdf.png"/>Download&nbsp;PDF</a>
                                    <a href="/content/dam/herc/Location/folder/herclocs.xls" class="dndExl" target="_blank"><img src="/content/dam/herc/home/header/images/download_excel.png"/>Download&nbsp;Excel</a> <input type="button" value="FIND" class="find"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <img class="lstDvidr" src="{{url('images/divider_right.png')}}" alt="Lista dividir">
                <li class="dvidr">
                    <a>USED EQUIPMENT</a>
                    <div class="drop-down grid-col-12">
                        <a href="/content/herc/en/rentals.html" class="seeOvr seeOvrrntls">See Rentals Overview ></a>
                        <a href="/content/herc/en/solutions.html" class="seeOvr seeOvrsol">See Solutions Overview ></a>
                        <div class="grid-row">
                            <div class="grid-col-3">
                                <ul class="rntList">
                                    <li> <a target="_blank" href="http://used.hercrentals.com">Search Used Equipment</a></li>
                                    <li> <a target="_blank" href="http://used.hertzequip.com/Sales/Equipment-Assurance-Warranty">Equipment Assurance</a></li>
                                    <li> <a target="_blank" href="http://used.hercrentals.com/Sales/Ready-Finance-USA">Ready Finance</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="drop-down grid-col-12 locationNav">
                        <div class="grid-row firstNav locNav" style="padding-left:2%;">
                            <div class="container">
                                <p class="errorMsg">Please enter valid Zip Code</p>
                                <input type="text" class="zipInpt" id="zipInpt" name="zipCode" value="" placeholder="Enter ZIP code">
                                <ul class="locList">
                                    <li class="Entertainment"><a class="locIcon1" href="javascript:void(0);">Entertainment</a></li>
                                    <li class="Climate_Control"><a class="locIcon2" href="javascript:void(0);">Climate Control</a></li>
                                    <li class="Pump"><a class="locIcon3" href="javascript:void(0);">Pump</a></li>
                                    <li class="Power_Generation"><a class="locIcon4" href="javascript:void(0);">Power Generation</a></li>
                                    <li class="Used_Equipment_Sales"><a class="locIcon5" href="javascript:void(0);">Government</a></li>
                                    <li class="General_Equipment_Rental"><a class="locIcon6" href="javascript:void(0);">Industrial</a></li>
                                    <li class="Remediation_Restoration"><a class="locIcon7" href="javascript:void(0);">Remediation & Restoration</a></li>
                                    <li class="Floor_Care_Surface_Prep"><a class="locIcon8" href="javascript:void(0);">Floor Care & Surface Prep</a></li>
                                    <li class="Pro_Contractor_Tools"><a class="locIcon9" href="javascript:void(0);">Pro Contractor</a></li>
                                    <li class="Trucks_Trailers"><a class="locIcon10" href="javascript:void(0);">Trucks & Trailers</a></li>
                                    <li class="Aerial"><a class="locIcon11" href="javascript:void(0);">Aerial</a></li>
                                    <li class="Earthmoving"><a class="locIcon12" href="javascript:void(0);">Earthmoving</a></li>
                                </ul>
                                <div class="locdownloadCont just-mobile">
                                    <input type="button" class="find" value="FIND"/>
                                </div>
                                <p>Browse by <a href="/content/herc/en/locations/location_statewise_results.html">State or Province</a></p>
                                <p>Download a <a href="/content/dam/herc/Location/folder/herclocs.pdf" class="dndPdf" target="_blank">PDF</a> or <a href="/content/dam/herc/Location/folder/herclocs.xls" class="dndExl" target="_blank">Excel</a> Doc for a list of all our locations</p>
                                <div class="locdownloadCont just-desktop">
                                    <a href="/content/dam/herc/Location/folder/herclocs.pdf" class="dndPdf" target="_blank"><img src="/content/dam/herc/home/header/images/download_pdf.png"/>Download&nbsp;PDF</a>
                                    <a href="/content/dam/herc/Location/folder/herclocs.xls" class="dndExl" target="_blank"><img src="/content/dam/herc/home/header/images/download_excel.png"/>Download&nbsp;Excel</a> <input type="button" value="FIND" class="find"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <img class="lstDvidr" src="{{url('images/divider_right.png')}}" alt="Lista dividir">
                <li class="dvidr">
                    <a>Solutions</a>
                    <div class="drop-down grid-col-12">
                        <a href="/content/herc/en/rentals.html" class="seeOvr seeOvrrntls">See Rentals Overview ></a>
                        <a href="/content/herc/en/solutions.html" class="seeOvr seeOvrsol">See Solutions Overview ></a>
                        <div class="grid-row">
                            <div class="grid-col-3">
                                <ul class="rntList">
                                    <li><a href="/content/herc/en/solutions/climate-control.html"> Climate Control </a></li>
                                    <li><a href="/content/herc/en/solutions/entertainment.html"> Entertainment </a></li>
                                    <li><a href="/content/herc/en/solutions/floor-care-surface-prep.html"> Floor Care &amp; Surface Prep </a></li>
                                    <li><a href="/content/herc/en/solutions/government.html"> Government </a></li>
                                    <li><a href="/content/herc/en/solutions/industrial.html"> Industrial </a></li>
                                    <li><a href="/content/herc/en/solutions/power-generation.html"> Power Generation </a></li>
                                    <li><a href="/content/herc/en/solutions/procontractor.html"> ProContractor </a></li>
                                    <li><a href="/content/herc/en/solutions/pump.html"> Pump </a></li>
                                    <li><a href="/content/herc/en/solutions/remediation-restoration.html"> Remediation &amp; Restoration </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="drop-down grid-col-12 locationNav">
                        <div class="grid-row firstNav locNav" style="padding-left:2%;">
                            <div class="container">
                                <p class="errorMsg">Please enter valid Zip Code</p>
                                <input type="text" class="zipInpt" id="zipInpt" name="zipCode" value="" placeholder="Enter ZIP code">
                                <ul class="locList">
                                    <li class="Entertainment"><a class="locIcon1" href="javascript:void(0);">Entertainment</a></li>
                                    <li class="Climate_Control"><a class="locIcon2" href="javascript:void(0);">Climate Control</a></li>
                                    <li class="Pump"><a class="locIcon3" href="javascript:void(0);">Pump</a></li>
                                    <li class="Power_Generation"><a class="locIcon4" href="javascript:void(0);">Power Generation</a></li>
                                    <li class="Used_Equipment_Sales"><a class="locIcon5" href="javascript:void(0);">Government</a></li>
                                    <li class="General_Equipment_Rental"><a class="locIcon6" href="javascript:void(0);">Industrial</a></li>
                                    <li class="Remediation_Restoration"><a class="locIcon7" href="javascript:void(0);">Remediation & Restoration</a></li>
                                    <li class="Floor_Care_Surface_Prep"><a class="locIcon8" href="javascript:void(0);">Floor Care & Surface Prep</a></li>
                                    <li class="Pro_Contractor_Tools"><a class="locIcon9" href="javascript:void(0);">Pro Contractor</a></li>
                                    <li class="Trucks_Trailers"><a class="locIcon10" href="javascript:void(0);">Trucks & Trailers</a></li>
                                    <li class="Aerial"><a class="locIcon11" href="javascript:void(0);">Aerial</a></li>
                                    <li class="Earthmoving"><a class="locIcon12" href="javascript:void(0);">Earthmoving</a></li>
                                </ul>
                                <div class="locdownloadCont just-mobile">
                                    <input type="button" class="find" value="FIND"/>
                                </div>
                                <p>Browse by <a href="/content/herc/en/locations/location_statewise_results.html">State or Province</a></p>
                                <p>Download a <a href="/content/dam/herc/Location/folder/herclocs.pdf" class="dndPdf" target="_blank">PDF</a> or <a href="/content/dam/herc/Location/folder/herclocs.xls" class="dndExl" target="_blank">Excel</a> Doc for a list of all our locations</p>
                                <div class="locdownloadCont just-desktop">
                                    <a href="/content/dam/herc/Location/folder/herclocs.pdf" class="dndPdf" target="_blank"><img src="/content/dam/herc/home/header/images/download_pdf.png"/>Download&nbsp;PDF</a>
                                    <a href="/content/dam/herc/Location/folder/herclocs.xls" class="dndExl" target="_blank"><img src="/content/dam/herc/home/header/images/download_excel.png"/>Download&nbsp;Excel</a> <input type="button" value="FIND" class="find"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <img class="lstDvidr" src="{{url('images/divider_right.png')}}" alt="Lista dividir">
                <li class="dvidr">
                    <a>Programs</a>
                    <div class="drop-down grid-col-12">
                        <a href="/content/herc/en/rentals.html" class="seeOvr seeOvrrntls">See Rentals Overview ></a>
                        <a href="/content/herc/en/solutions.html" class="seeOvr seeOvrsol">See Solutions Overview ></a>
                        <div class="grid-row">
                            <div class="grid-col-3">
                                <ul class="rntList">
                                    <li><a href="/content/herc/en/programs/account-management.html"> Account Management </a></li>
                                    <li><a href="/content/herc/en/programs/credit.html"> Credit </a></li>
                                    <li><a href="/content/herc/en/programs/government.html"> Government </a></li>
                                    <li><a href="/content/herc/en/programs/national-accounts.html"> National Accounts </a></li>
                                    <li><a href="/content/herc/en/programs/safety-training.html"> Safety training </a></li>
                                    <li><a href="/content/herc/en/programs/rental-protection-plan.html"> Rental Protection Plan </a></li>
                                    <li><a href="/content/herc/en/programs/why-rent.html"> Why Rent </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="drop-down grid-col-12 locationNav">
                        <div class="grid-row firstNav locNav" style="padding-left:2%;">
                            <div class="container">
                                <p class="errorMsg">Please enter valid Zip Code</p>
                                <input type="text" class="zipInpt" id="zipInpt" name="zipCode" value="" placeholder="Enter ZIP code">
                                <ul class="locList">
                                    <li class="Entertainment"><a class="locIcon1" href="javascript:void(0);">Entertainment</a></li>
                                    <li class="Climate_Control"><a class="locIcon2" href="javascript:void(0);">Climate Control</a></li>
                                    <li class="Pump"><a class="locIcon3" href="javascript:void(0);">Pump</a></li>
                                    <li class="Power_Generation"><a class="locIcon4" href="javascript:void(0);">Power Generation</a></li>
                                    <li class="Used_Equipment_Sales"><a class="locIcon5" href="javascript:void(0);">Government</a></li>
                                    <li class="General_Equipment_Rental"><a class="locIcon6" href="javascript:void(0);">Industrial</a></li>
                                    <li class="Remediation_Restoration"><a class="locIcon7" href="javascript:void(0);">Remediation & Restoration</a></li>
                                    <li class="Floor_Care_Surface_Prep"><a class="locIcon8" href="javascript:void(0);">Floor Care & Surface Prep</a></li>
                                    <li class="Pro_Contractor_Tools"><a class="locIcon9" href="javascript:void(0);">Pro Contractor</a></li>
                                    <li class="Trucks_Trailers"><a class="locIcon10" href="javascript:void(0);">Trucks & Trailers</a></li>
                                    <li class="Aerial"><a class="locIcon11" href="javascript:void(0);">Aerial</a></li>
                                    <li class="Earthmoving"><a class="locIcon12" href="javascript:void(0);">Earthmoving</a></li>
                                </ul>
                                <div class="locdownloadCont just-mobile">
                                    <input type="button" class="find" value="FIND"/>
                                </div>
                                <p>Browse by <a href="/content/herc/en/locations/location_statewise_results.html">State or Province</a></p>
                                <p>Download a <a href="/content/dam/herc/Location/folder/herclocs.pdf" class="dndPdf" target="_blank">PDF</a> or <a href="/content/dam/herc/Location/folder/herclocs.xls" class="dndExl" target="_blank">Excel</a> Doc for a list of all our locations</p>
                                <div class="locdownloadCont just-desktop">
                                    <a href="/content/dam/herc/Location/folder/herclocs.pdf" class="dndPdf" target="_blank"><img src="/content/dam/herc/home/header/images/download_pdf.png"/>Download&nbsp;PDF</a>
                                    <a href="/content/dam/herc/Location/folder/herclocs.xls" class="dndExl" target="_blank"><img src="/content/dam/herc/home/header/images/download_excel.png"/>Download&nbsp;Excel</a> <input type="button" value="FIND" class="find"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <img class="lstDvidr"  src="{{url('images/divider_right.png')}}" alt="Lista dividir">
                <li class="dvidr">
                    <a>Locations</a>
                    <div class="drop-down grid-col-12">
                        <a href="/content/herc/en/rentals.html" class="seeOvr seeOvrrntls">See Rentals Overview ></a>
                        <a href="/content/herc/en/solutions.html" class="seeOvr seeOvrsol">See Solutions Overview ></a>
                        <div class="grid-row">
                            <div class="grid-col-3">
                                <ul class="rntList">
                                    <li><a href="/content/herc/en/locations/location_statewise_results.html"> Browse by State or Province </a></li>
                                    <li><a href="/content/herc/en/locations/location_results.html"> Location Results </a></li>
                                    <li><a href="/content/herc/en/locations/ab.html"> Alberta </a></li>
                                    <li><a href="/content/herc/en/locations/bc.html"> British Columbia </a></li>
                                    <li><a href="/content/herc/en/locations/mb.html"> Manitoba </a></li>
                                    <li><a href="/content/herc/en/locations/nb.html"> New Brunswick </a></li>
                                    <li><a href="/content/herc/en/locations/ns.html"> Nova Scotia </a></li>
                                    <li><a href="/content/herc/en/locations/on.html"> Ontario </a></li>
                                    <li><a href="/content/herc/en/locations/qc.html"> Quebec </a></li>
                                    <li><a href="/content/herc/en/locations/sk.html"> Saskatchewan </a></li>
                                    <li><a href="/content/herc/en/locations/al.html"> Alabama </a></li>
                                    <li><a href="/content/herc/en/locations/ar.html"> Arkansas </a></li>
                                    <li><a href="/content/herc/en/locations/az.html"> Arizona </a></li>
                                    <li><a href="/content/herc/en/locations/ca.html"> California </a></li>
                                    <li><a href="/content/herc/en/locations/co.html"> Colorado </a></li>
                                    <li><a href="/content/herc/en/locations/ct.html"> Connecticut </a></li>
                                    <li><a href="/content/herc/en/locations/fl.html"> Florida </a></li>
                                    <li><a href="/content/herc/en/locations/ga.html"> Georgia </a></li>
                                    <li><a href="/content/herc/en/locations/hi.html"> Hawaii </a></li>
                                    <li><a href="/content/herc/en/locations/ia.html"> Iowa </a></li>
                                    <li><a href="/content/herc/en/locations/il.html"> Illinois </a></li>
                                    <li><a href="/content/herc/en/locations/in.html"> Indiana </a></li>
                                    <li><a href="/content/herc/en/locations/ky.html"> Kentucky </a></li>
                                    <li><a href="/content/herc/en/locations/la.html"> Louisiana </a></li>
                                    <li><a href="/content/herc/en/locations/ma.html"> Massachusetts </a></li>
                                    <li><a href="/content/herc/en/locations/md.html"> Maryland </a></li>
                                    <li><a href="/content/herc/en/locations/me.html"> Maine </a></li>
                                    <li><a href="/content/herc/en/locations/mi.html"> Michigan </a></li>
                                    <li><a href="/content/herc/en/locations/mn.html"> Minnesota </a></li>
                                    <li><a href="/content/herc/en/locations/mo.html"> Missouri </a></li>
                                    <li><a href="/content/herc/en/locations/ms.html"> Mississippi </a></li>
                                    <li><a href="/content/herc/en/locations/nc.html"> North Carolina </a></li>
                                    <li><a href="/content/herc/en/locations/nd.html"> North Dakota </a></li>
                                    <li><a href="/content/herc/en/locations/ne.html"> Nebraska </a></li>
                                    <li><a href="/content/herc/en/locations/nj.html"> New Jersey </a></li>
                                    <li><a href="/content/herc/en/locations/nm.html"> New Mexico </a></li>
                                    <li><a href="/content/herc/en/locations/nv.html"> Nevada </a></li>
                                    <li><a href="/content/herc/en/locations/ny.html"> New York </a></li>
                                    <li><a href="/content/herc/en/locations/oh.html"> Ohio </a></li>
                                    <li><a href="/content/herc/en/locations/ok.html"> Oklahoma </a></li>
                                    <li><a href="/content/herc/en/locations/or.html"> Oregon </a></li>
                                    <li><a href="/content/herc/en/locations/pa.html"> Pennsylvania </a></li>
                                    <li><a href="/content/herc/en/locations/sc.html"> South Carolina </a></li>
                                    <li><a href="/content/herc/en/locations/tn.html"> Tennessee </a></li>
                                    <li><a href="/content/herc/en/locations/tx.html"> Texas </a></li>
                                    <li><a href="/content/herc/en/locations/ut.html"> Utah </a></li>
                                    <li><a href="/content/herc/en/locations/va.html"> Virginia </a></li>
                                    <li><a href="/content/herc/en/locations/wa.html"> Washington </a></li>
                                    <li><a href="/content/herc/en/locations/wi.html"> Wisconsin </a></li>
                                    <li><a href="/content/herc/en/locations/wv.html"> West Virginia </a></li>
                                    <li><a href="/content/herc/en/locations/wy.html"> Wyoming </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="drop-down grid-col-12 locationNav">
                        <div class="grid-row firstNav locNav" style="padding-left:2%;">
                            <div class="container">
                                <p class="errorMsg">Please enter valid Zip Code</p>
                                <input type="text" class="zipInpt" id="zipInpt" name="zipCode" value="" placeholder="Enter ZIP code">
                                <ul class="locList">
                                    <li class="Entertainment"><a class="locIcon1" href="javascript:void(0);">Entertainment</a></li>
                                    <li class="Climate_Control"><a class="locIcon2" href="javascript:void(0);">Climate Control</a></li>
                                    <li class="Pump"><a class="locIcon3" href="javascript:void(0);">Pump</a></li>
                                    <li class="Power_Generation"><a class="locIcon4" href="javascript:void(0);">Power Generation</a></li>
                                    <li class="Used_Equipment_Sales"><a class="locIcon5" href="javascript:void(0);">Government</a></li>
                                    <li class="General_Equipment_Rental"><a class="locIcon6" href="javascript:void(0);">Industrial</a></li>
                                    <li class="Remediation_Restoration"><a class="locIcon7" href="javascript:void(0);">Remediation & Restoration</a></li>
                                    <li class="Floor_Care_Surface_Prep"><a class="locIcon8" href="javascript:void(0);">Floor Care & Surface Prep</a></li>
                                    <li class="Pro_Contractor_Tools"><a class="locIcon9" href="javascript:void(0);">Pro Contractor</a></li>
                                    <li class="Trucks_Trailers"><a class="locIcon10" href="javascript:void(0);">Trucks & Trailers</a></li>
                                    <li class="Aerial"><a class="locIcon11" href="javascript:void(0);">Aerial</a></li>
                                    <li class="Earthmoving"><a class="locIcon12" href="javascript:void(0);">Earthmoving</a></li>
                                </ul>
                                <div class="locdownloadCont just-mobile">
                                    <input type="button" class="find" value="FIND"/>
                                </div>
                                <p>Browse by <a href="/content/herc/en/locations/location_statewise_results.html">State or Province</a></p>
                                <p>Download a <a href="/content/dam/herc/Location/folder/herclocs.pdf" class="dndPdf" target="_blank">PDF</a> or <a href="/content/dam/herc/Location/folder/herclocs.xls" class="dndExl" target="_blank">Excel</a> Doc for a list of all our locations</p>
                                <div class="locdownloadCont just-desktop">
                                    <a href="/content/dam/herc/Location/folder/herclocs.pdf" class="dndPdf" target="_blank"><img src="/content/dam/herc/home/header/images/download_pdf.png"/>Download&nbsp;PDF</a>
                                    <a href="/content/dam/herc/Location/folder/herclocs.xls" class="dndExl" target="_blank"><img src="/content/dam/herc/home/header/images/download_excel.png"/>Download&nbsp;Excel</a> <input type="button" value="FIND" class="find"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <img class="lstDvidr"  src="{{url('images/divider_right.png')}}" alt="Lista dividir">
                <li class="dvidr">
                    <a>Need Help</a>
                    <div class="drop-down grid-col-12">
                        <a href="/content/herc/en/rentals.html" class="seeOvr seeOvrrntls">See Rentals Overview ></a>
                        <a href="/content/herc/en/solutions.html" class="seeOvr seeOvrsol">See Solutions Overview ></a>
                        <div class="grid-row">
                            <div class="grid-col-3">
                                <ul class="rntList">
                                    <li><a href="/content/herc/en/need-help/company-overview.html"> Company Overview </a></li>
                                    <li><a href="/content/herc/en/need-help/contact-us.html"> Contact Us </a></li>
                                    <li><a href="/content/herc/en/need-help/faq.html"> FAQ </a></li>
                                    <li> <a href="http://ir.hercrentals.com">Investor Relations</a></li>
                                    <li><a href="/content/herc/en/need-help/lien-release.html"> Lien Release </a></li>
                                    <li><a href="/content/herc/en/need-help/international-operations.html"> International Operations </a></li>
                                    <li><a href="/content/herc/en/need-help/franchise.html"> Franchise Program </a></li>
                                    <li><a href="/content/herc/en/need-help/privacy.html"> </a></li>
                                    <li><a href="/content/herc/en/need-help/blog_landing.html"> </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="drop-down grid-col-12 locationNav">
                        <div class="grid-row firstNav locNav" style="padding-left:2%;">
                            <div class="container">
                                <p class="errorMsg">Please enter valid Zip Code</p>
                                <input type="text" class="zipInpt" id="zipInpt" name="zipCode" value="" placeholder="Enter ZIP code">
                                <ul class="locList">
                                    <li class="Entertainment"><a class="locIcon1" href="javascript:void(0);">Entertainment</a></li>
                                    <li class="Climate_Control"><a class="locIcon2" href="javascript:void(0);">Climate Control</a></li>
                                    <li class="Pump"><a class="locIcon3" href="javascript:void(0);">Pump</a></li>
                                    <li class="Power_Generation"><a class="locIcon4" href="javascript:void(0);">Power Generation</a></li>
                                    <li class="Used_Equipment_Sales"><a class="locIcon5" href="javascript:void(0);">Government</a></li>
                                    <li class="General_Equipment_Rental"><a class="locIcon6" href="javascript:void(0);">Industrial</a></li>
                                    <li class="Remediation_Restoration"><a class="locIcon7" href="javascript:void(0);">Remediation & Restoration</a></li>
                                    <li class="Floor_Care_Surface_Prep"><a class="locIcon8" href="javascript:void(0);">Floor Care & Surface Prep</a></li>
                                    <li class="Pro_Contractor_Tools"><a class="locIcon9" href="javascript:void(0);">Pro Contractor</a></li>
                                    <li class="Trucks_Trailers"><a class="locIcon10" href="javascript:void(0);">Trucks & Trailers</a></li>
                                    <li class="Aerial"><a class="locIcon11" href="javascript:void(0);">Aerial</a></li>
                                    <li class="Earthmoving"><a class="locIcon12" href="javascript:void(0);">Earthmoving</a></li>
                                </ul>
                                <div class="locdownloadCont just-mobile">
                                    <input type="button" class="find" value="FIND"/>
                                </div>
                                <p>Browse by <a href="/content/herc/en/locations/location_statewise_results.html">State or Province</a></p>
                                <p>Download a <a href="/content/dam/herc/Location/folder/herclocs.pdf" class="dndPdf" target="_blank">PDF</a> or <a href="/content/dam/herc/Location/folder/herclocs.xls" class="dndExl" target="_blank">Excel</a> Doc for a list of all our locations</p>
                                <div class="locdownloadCont just-desktop">
                                    <a href="/content/dam/herc/Location/folder/herclocs.pdf" class="dndPdf" target="_blank"><img src="/content/dam/herc/home/header/images/download_pdf.png"/>Download&nbsp;PDF</a>
                                    <a href="/content/dam/herc/Location/folder/herclocs.xls" class="dndExl" target="_blank"><img src="/content/dam/herc/home/header/images/download_excel.png"/>Download&nbsp;Excel</a> <input type="button" value="FIND" class="find"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <img class="lstDvidr"  src="{{url('images/divider_right.png')}}" alt="Lista dividir">
                <li class="dvidr">
                    <a>CAREERS</a>
                    <div class="drop-down grid-col-12">
                        <a href="/content/herc/en/rentals.html" class="seeOvr seeOvrrntls">See Rentals Overview ></a>
                        <a href="/content/herc/en/solutions.html" class="seeOvr seeOvrsol">See Solutions Overview ></a>
                        <div class="grid-row">
                            <div class="grid-col-3">
                                <ul class="rntList">
                                    <li><a href="/content/herc/en/careers/go-to-careers.html"> Go To Careers </a></li>
                                    <li><a href="/content/herc/en/careers/herchome.html"> </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="drop-down grid-col-12 locationNav">
                        <div class="grid-row firstNav locNav" style="padding-left:2%;">
                            <div class="container">
                                <p class="errorMsg">Please enter valid Zip Code</p>
                                <input type="text" class="zipInpt" id="zipInpt" name="zipCode" value="" placeholder="Enter ZIP code">
                                <ul class="locList">
                                    <li class="Entertainment"><a class="locIcon1" href="javascript:void(0);">Entertainment</a></li>
                                    <li class="Climate_Control"><a class="locIcon2" href="javascript:void(0);">Climate Control</a></li>
                                    <li class="Pump"><a class="locIcon3" href="javascript:void(0);">Pump</a></li>
                                    <li class="Power_Generation"><a class="locIcon4" href="javascript:void(0);">Power Generation</a></li>
                                    <li class="Used_Equipment_Sales"><a class="locIcon5" href="javascript:void(0);">Government</a></li>
                                    <li class="General_Equipment_Rental"><a class="locIcon6" href="javascript:void(0);">Industrial</a></li>
                                    <li class="Remediation_Restoration"><a class="locIcon7" href="javascript:void(0);">Remediation & Restoration</a></li>
                                    <li class="Floor_Care_Surface_Prep"><a class="locIcon8" href="javascript:void(0);">Floor Care & Surface Prep</a></li>
                                    <li class="Pro_Contractor_Tools"><a class="locIcon9" href="javascript:void(0);">Pro Contractor</a></li>
                                    <li class="Trucks_Trailers"><a class="locIcon10" href="javascript:void(0);">Trucks & Trailers</a></li>
                                    <li class="Aerial"><a class="locIcon11" href="javascript:void(0);">Aerial</a></li>
                                    <li class="Earthmoving"><a class="locIcon12" href="javascript:void(0);">Earthmoving</a></li>
                                </ul>
                                <div class="locdownloadCont just-mobile">
                                    <input type="button" class="find" value="FIND"/>
                                </div>
                                <p>Browse by <a href="/content/herc/en/locations/location_statewise_results.html">State or Province</a></p>
                                <p>Download a <a href="/content/dam/herc/Location/folder/herclocs.pdf" class="dndPdf" target="_blank">PDF</a> or <a href="/content/dam/herc/Location/folder/herclocs.xls" class="dndExl" target="_blank">Excel</a> Doc for a list of all our locations</p>
                                <div class="locdownloadCont just-desktop">
                                    <a href="/content/dam/herc/Location/folder/herclocs.pdf" class="dndPdf" target="_blank"><img src="/content/dam/herc/home/header/images/download_pdf.png"/>Download&nbsp;PDF</a>
                                    <a href="/content/dam/herc/Location/folder/herclocs.xls" class="dndExl" target="_blank"><img src="/content/dam/herc/home/header/images/download_excel.png"/>Download&nbsp;Excel</a> <input type="button" value="FIND" class="find"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <img class="lstDvidr"  src="{{url('images/divider_right.png')}}" alt="Lista dividir">
            </ul>
            <ul class="menuSearchBar just-desktop">
                <li class="inpVal">
                    <input class="equipSearch" tupe="text" placeholder="Search Equipment"/><a href="javascript:void(0);"><img src="/content/dam/herc/home/header/images/search_icon.png"></a>
                </li>
                <div class="searchCont"><ul class="searchHidden"></ul></div>
            </ul>
        </nav>
        <div class="just-mobile menuSearchBar" id="searchMobile">
            <input class="search" placeholder="Search"/><span id="closeSearch">X</span>
            <div class="searchCont"><ul class="searchHidden"></ul></div>
            <div class="mobilesearchcont searchCont"></div>
        </div>
        <div class="fixedCont just-mobile">
            <div class="ctryImgs">
                <span class="active usaImg"><a href="javascript:void(0);" class="usaImg"><img src="/content/dam/herc/home/header/images/usa_flag_img.png"/></a></span>
                <span class="canImg"><a href="javascript:void(0);" class="canImg"><img src="/content/dam/herc/home/header/images/canada_flag_img.png"/></a></span>
            </div>
            <div class="top_location">
                <div class="loc_top"><p></p></div>
                <ul class="nav">
                    <li class="dropdown">
                        <a class="editLink dropdown-toggle" href="#" data-toggle="dropdown">EDIT</a>
                        <div class="dropdown-menu">
                            <input class="zipVal" type="text" maxlength="12" id="zipcodetext" value="" placeholder="Enter Zip Code"/>
                        </div>
                    </li>
                </ul>
                <div class="loc_bottom nli"><a href="javascript:void(0);">Nearest Location Info</a></div>
                <div class="loc_bottom"><a data-toggle="modal" data-target="#myModal" href="javascript:void(0);">Nearest Location Info</a></div>
                <div class="noLogin"><p>Enter your <a href="#">ZIP code</a> for nearest location info and accurate pricing</p></div>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">


    var analyticsData  = {


        "pageInfo":{
            pageName: 'Home',
            channel:'Home',
            siteSection1:'Home',
            siteSection2:'Home',
            pageType:'',
            contentType:'',

        },


        "location":{
            homePagecode:'',
            locZipCode:'',
            locationClicked:'',
            rentallocation:'',
            country:'US',



        },




        "productDetails":{
            products :'',
            estimatedRevenue :'',

        },



        "userDetails":{
            loginStatus:'Signed Out',
            userType:'',

        },
    };

    if(analyticsData.pageInfo.channel){
        $('li.dvidr').each(function(){
            var skr = $(this).children().html().toLowerCase().split(' ').join('');
            if(skr == analyticsData.pageInfo.channel || analyticsData.pageInfo.channel == skr+'s'){
                $(this).addClass('navAct');
            }
        });
    }


    var chanl = 'myaccount';
    var chanel='cart';
    if(analyticsData.pageInfo.channel == chanl || analyticsData.pageInfo.channel == chanel){
        if(localStorage.userid == null || localStorage.userid == 'undefined'){
            if(analyticsData.location.country == 'US')
            {
                window.location.href = '/content/herc/en.html';
            }
            else
            {
                window.location.href = '/content/herc/ca.html';
            }
        }
    }


</script>

<div class="herc_home_page">
    <link rel="stylesheet" href="{{asset('css/herccatalog.css')}}" type="text/css">
    <script type="text/javascript" src="{{asset('js/herccatalog.js')}}"></script>
    <script>
        $(document).ready(function(){
            var querystring = 'sideNav';

            $('.submenu li a').each(function()
            {
                var href = $(this).attr('href');
                href += (href.match(/\?/) ? '&a_source=' : '?a_source=') + querystring;
                $(this).attr('href', href);
            });


            //Start of Table and Custom Pagination
            $('.table1 li').click(function(){
                var sbmnuClass = $(this).children('a').attr('class');
                $('.tbltabs').hide();
                $('.submenu').removeClass('forPgn');
                $('.submenu.'+sbmnuClass).show().addClass('forPgn');
                //for home page pagination functionality
                var listCount = $('.forPgn .list ul li').size();
                var paginationlist = listCount/6;
                if($('.submenu').hasClass('forPgn')){
                    $('.forPgn .pagination li a').each(function(index){
                        $('.pagination li').removeClass('active' + index);
                        $(this).parent().addClass('active' + index);
                        $('li.arrow').removeClass('active' + index);
                        if($(this).html() == Math.ceil(paginationlist)){
                            if(Math.ceil(paginationlist) >= 5){
                                $('.forPgn .pagination li:gt(5)').hide();
                                $('.forPgn .pagination li:lt(5)').show();
                                $('.forPgn .pagination li').removeClass('lastHtml');
                                $(this).parent().addClass('lastHtml').nextAll().hide();
                                $('li.arrow').show();
                            }
                            else{
                                $('.forPgn .pagination li').removeClass('lastHtml');
                                $(this).parent().addClass('lastHtml').nextAll().hide();
                                $('li.arrow').show();
                            }
                        }
                    });

                    /* $('.table1 li').each(function(){

                     var rentitem = $(this).children('a').html().split('&amp').join('&').length;
                     if(rentitem <= 13){

                     $(this).children('a').addClass('singleline');
                     }
                     });*/



                    $(".forPgn .list ul li:nth-child(6n+1)").each(function(index){
                        index=index+1;
                        $(this).addClass('active' + index);
                    });
                    $(".forPgn .list ul li:nth-child(6n)").each(function(index){
                        index=index+1;
                        $(this).addClass('active-' + index);
                    });
                    $(".forPgn .list ul li").each(function(index){
                        index=index+1;
                        $("ul .active" +index).nextUntil('.active-'+index).addClass('active'+index);
                    });
                    $('.forPgn .list ul li').hide();
                    $('.forPgn .list ul li[class*=\\-]').each(function()  {
                        $(this)[0].className = $(this)[0].className.replace(/-/g,"");
                    });
                    $('.forPgn .list ul li.active1').show();
                }
            });
            $('.pagination li a').click(function(){

                if($(this).parent().hasClass('arrow')){
                    var pgehtml = $('.forPgn li.current a').html();
                    if($(this).parent().hasClass('prev')){
                        if(pgehtml == 1){
                            //do nothing
                        }
                        else{
                            if(pgehtml <=5){
                                $('.forPgn .pagination li:gt(5)').hide();
                                $('.forPgn .pagination li:lt(5)').show();
                                $('.lastHtml').nextAll().hide();
                                $('li.arrow').show();
                                $(".forPgn .list ul li").hide();
                                $(".forPgn .list ul li.active" +(parseInt(pgehtml)-1)).show();
                                $('li.current').removeClass('current').prev().addClass('current');
                            }
                            else{
                                $(".forPgn .list ul li").hide();
                                $(".forPgn .list ul li.active" +(parseInt(pgehtml)-1)).show();
                                $('li.current').removeClass('current').prev().addClass('current');
                            }
                        }
                    }
                    else if($(this).parent().hasClass('next')){
                        if($('.lastHtml').hasClass('current')){
                            //do nothing
                        }
                        else{
                            if(pgehtml == 5){
                                $('.forPgn .pagination li:gt(4)').show();
                                $('.forPgn .pagination li:lt(4)').hide();
                                $('.lastHtml').nextAll().hide();
                                $('li.arrow').show();
                                $(".forPgn .list ul li").hide();
                                $(".forPgn .list ul li.active" +(parseInt(pgehtml)+1)).show();
                                $('li.current').removeClass('current').next().addClass('current');
                            }
                            else {
                                $(".forPgn .list ul li").hide();
                                $(".forPgn .list ul li.active" +(parseInt(pgehtml)+1)).show();
                                $('li.current').removeClass('current').next().addClass('current');
                            }

                        }
                    }
                }
                else{
                    var pageDiv = $(this).html();
                    if(pageDiv == 5){
                        $('.forPgn .pagination li:gt(5)').show();
                        $('.forPgn .pagination li:lt(4)').hide();
                        $('.lastHtml').nextAll().hide();
                        $('li.arrow').show();
                        $(".forPgn .list ul li").hide();
                        $(".forPgn .list ul li.active" +pageDiv).show();
                        $(this).parent().addClass('current').siblings().removeClass('current');
                    }
                    else if(pageDiv <=4){
                        $('.forPgn .pagination li:gt(5)').hide();
                        $('.forPgn .pagination li:lt(5)').show();
                        $('.lastHtml').nextAll().hide();
                        $('li.arrow').show();
                        $(".forPgn .list ul li").hide();
                        $(".forPgn .list ul li.active" +pageDiv).show();
                        $(this).parent().addClass('current').siblings().removeClass('current');
                    }
                    else {
                        $(".forPgn .list ul li").hide();
                        $(".forPgn .list ul li.active" +pageDiv).show();
                        $(this).parent().addClass('current').siblings().removeClass('current');
                    }
                }

            });
            $('.submenu a img').click(function(){
                $('.list ul li').removeAttr('class').show();
                $('.submenu').hide();
                $('.tbltabs').show();
                $('.pagination li').removeClass('lastHtml');
                $('.pagination li').each(function(){
                    $(this).parent().children('li').removeClass('current');
                    $(this).parent().children('li:eq(1)').addClass('current');
                });
            });

        });
    </script>
    <section class="section home-section fullscreen parallax herc-hero" id="home">
        <div class="vcenter-container1">
            <div class="container" style="margin-bottom:0px;">
                <div class="header-caption">

                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4 tblcatagories">
                            <div class="tbltabs">
                                <div class="tabs_header">
                                    <a href="javascript:void(0)" class="rentals">rentals</a>
                                    <img src="{{url('images/slash.png')}}">
                                    <a href="javascript:void(0)">solutions</a>
                                    <hr size="3" NOSHADE color="black" width="100%">
                                </div>
                                <div>
                                    <ul class="tabmenu table1">
                                        <li>
                                            <img alt="Aerial" src="/content/dam/herc/home/rentals/icon/aerial.png"><a href="javascript:void(0);" class="aerial">Aerial</a>
                                        </li>
                                        <li>
                                            <img alt="Air Compressors &amp; Tools" src="/content/dam/herc/home/rentals/icon/air-compressors-tools.png"><a href="javascript:void(0);" class="air-compressors-tools">Air Compressors &amp; Tools</a>
                                        </li>
                                        <li>
                                            <img alt="Climate Control" src="/content/dam/herc/home/rentals/icon/climate-control.png"><a href="javascript:void(0);" class="climate-control">Climate Control</a>
                                        </li>
                                        <li>
                                            <img alt="Compaction &amp; Paving" src="/content/dam/herc/home/rentals/icon/compaction-paving.png"><a href="javascript:void(0);" class="compaction-paving">Compaction &amp; Paving</a>
                                        </li>
                                        <li>
                                            <img alt="Concrete &amp; Masonry" src="/content/dam/herc/home/rentals/icon/concrete-masonry.png"><a href="javascript:void(0);" class="concrete-masonry">Concrete &amp; Masonry</a>
                                        </li>
                                        <li>
                                            <img alt="Earthmoving" src="/content/dam/herc/home/rentals/icon/earthmoving.png"><a href="javascript:void(0);" class="earthmoving">Earthmoving</a>
                                        </li>
                                        <li>
                                            <img alt="Floor Care &amp; Surface Prep" src="/content/dam/herc/home/rentals/icon/floor-care-surface-prep.png"><a href="javascript:void(0);" class="floor-care-surface-prep">Floor Care &amp; Surface Prep</a>
                                        </li>
                                        <li>
                                            <img alt="Material Handling" src="/content/dam/herc/home/rentals/icon/material-handling.png"><a href="javascript:void(0);" class="material-handling">Material Handling</a>
                                        </li>
                                        <li>
                                            <img alt="Power Generation" src="/content/dam/herc/home/rentals/icon/power-generation.png"><a href="javascript:void(0);" class="power-generation">Power Generation</a>
                                        </li>
                                        <li>
                                            <img alt="ProContractor" src="/content/dam/herc/home/rentals/icon/procontractor.png"><a href="javascript:void(0);" class="procontractor">ProContractor</a>
                                        </li>
                                        <li>
                                            <img alt="Pump" src="/content/dam/herc/home/rentals/icon/pump.png"><a href="javascript:void(0);" class="pump">Pump</a>
                                        </li>
                                        <li>
                                            <img alt="Trucks &amp; Trailers" src="/content/dam/herc/home/rentals/icon/trucks-trailers.png"><a href="javascript:void(0);" class="trucks-trailers">Trucks &amp; Trailers</a>
                                        </li>
                                    </ul>
                                    <ul class="tabmenu table2">
                                        <li>
                                            <a href="/content/herc/en/solutions/climate-control.html" id="link"><img alt="Climate Control" src="/content/dam/herc/home/solutions/icon/climate-control.png"><span>Climate Control</span></a></li>
                                        <li>
                                            <a href="/content/herc/en/solutions/entertainment.html" id="link"><img alt="Entertainment" src="/content/dam/herc/home/solutions/icon/entertainment.png"><span>Entertainment</span></a></li>
                                        <li>
                                            <a href="/content/herc/en/solutions/floor-care-surface-prep.html" id="link"><img alt="Floor care &amp; Surface Prep" src="/content/dam/herc/home/solutions/icon/floor-care-surface-prep.png"><span>Floor care &amp; Surface Prep</span></a></li>
                                        <li>
                                            <a href="/content/herc/en/solutions/government.html" id="link"><img alt="Government" src="/content/dam/herc/home/solutions/icon/government.png"><span>Government</span></a></li>
                                        <li>
                                            <a href="/content/herc/en/solutions/industrial.html" id="link"><img alt="Industrial" src="/content/dam/herc/home/solutions/icon/industrial.png"><span>Industrial</span></a></li>
                                        <li>
                                            <a href="/content/herc/en/solutions/power-generation.html" id="link"><img alt="Power Generation" src="/content/dam/herc/home/solutions/icon/power-generation.png"><span>Power Generation</span></a></li>
                                        <li>
                                            <a href="/content/herc/en/solutions/procontractor.html" id="link"><img alt="ProContractor" src="/content/dam/herc/home/solutions/icon/procontractor.png"><span>ProContractor</span></a></li>
                                        <li>
                                            <a href="/content/herc/en/solutions/pump.html" id="link"><img alt="Pump" src="/content/dam/herc/home/solutions/icon/pump.png"><span>Pump</span></a></li>
                                        <li>
                                            <a href="/content/herc/en/solutions/remediation-restoration.html" id="link"><img alt="Remediation &amp; Restoration" src="/content/dam/herc/home/solutions/icon/remediation-restoration.png"><span>Remediation &amp; Restoration</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="submenu aerial">
                                <div class="headline">
                                    <div>
                                        <h2>Rentals catalog</h2>
                                    </div> <div class="header">
                                        <a href="javascript:void(0);">
                                            <div>
                                                <img src="/content/dam/herc/home/content/images/left-arrow.png">
                                            </div> </a>
                                        <img alt="Aerial" src="/content/dam/herc/home/rentals/icon/aerial.png">
                                        <h5>Aerial</h5>
                                    </div>
                                    <hr size="3" NOSHADE color="black" width="100%">
                                </div>
                                <div class="list">
                                    <h6>Type :</h6>
                                    <ul>
                                        <li><a href="/content/herc/en/rentals/aerial/articulated-boom-lifts.html">Articulated Boom Lifts</a></li>
                                        <li><a href="/content/herc/en/rentals/aerial/compact-crawler-lifts.html">Compact Crawler Lifts</a></li>
                                        <li><a href="/content/herc/en/rentals/aerial/electric-scissor-lifts.html">Electric Scissor Lifts</a></li>
                                        <li><a href="/content/herc/en/rentals/aerial/rough-terrain-scissor-lifts.html">Rough Terrain Scissor Lifts</a></li>
                                        <li><a href="/content/herc/en/rentals/aerial/straightmast-boom-lifts.html">Straightmast Boom Lifts</a></li>
                                        <li><a href="/content/herc/en/rentals/aerial/towable-boom-lifts.html">Towable Boom Lifts</a></li>
                                        <li><a href="/content/herc/en/rentals/aerial/verticle-mast-lifts.html">Verticle Mast Lifts</a></li>
                                    </ul>
                                    <div class="tab-pgntn">
                                        <ol class="pagination">
                                            <li rel="prev" class="prev arrow unavailable"><a href="javascript:void(0);">&laquo;</a></li>
                                            <li class="current"><a href="javascript:void(0);">1</a></li>
                                            <li><a href="javascript:void(0);">2</a></li>
                                            <li><a href="javascript:void(0);">3</a></li>
                                            <li><a href="javascript:void(0);">4</a></li>
                                            <li><a href="javascript:void(0);">5</a></li>
                                            <li rel="next" class="next arrow"><a href="javascript:void(0);">&raquo;</a></li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="submenu air-compressors-tools">
                                <div class="headline">
                                    <div>
                                        <h2>Rentals catalog</h2>
                                    </div> <div class="header">
                                        <a href="javascript:void(0);">
                                            <div>
                                                <img src="/content/dam/herc/home/content/images/left-arrow.png">
                                            </div> </a>
                                        <img alt="Air Compressors &amp; Tools" src="/content/dam/herc/home/rentals/icon/air-compressors-tools.png">
                                        <h5>Air Compressors &amp; Tools</h5>
                                    </div>
                                    <hr size="3" NOSHADE color="black" width="100%">
                                </div>
                                <div class="list">
                                    <h6>Type :</h6>
                                    <ul>
                                        <li><a href="/content/herc/en/rentals/air-compressors-tools/air-compressors.html">Air Compressors</a></li>
                                        <li><a href="/content/herc/en/rentals/air-compressors-tools/air-filtration.html">Air Filtration</a></li>
                                        <li><a href="/content/herc/en/rentals/air-compressors-tools/air-tools.html">Air Tools</a></li>
                                    </ul>
                                    <div class="tab-pgntn">
                                        <ol class="pagination">
                                            <li rel="prev" class="prev arrow unavailable"><a href="javascript:void(0);">&laquo;</a></li>
                                            <li class="current"><a href="javascript:void(0);">1</a></li>
                                            <li><a href="javascript:void(0);">2</a></li>
                                            <li><a href="javascript:void(0);">3</a></li>
                                            <li><a href="javascript:void(0);">4</a></li>
                                            <li><a href="javascript:void(0);">5</a></li>
                                            <li rel="next" class="next arrow"><a href="javascript:void(0);">&raquo;</a></li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="submenu climate-control">
                                <div class="headline">
                                    <div>
                                        <h2>Rentals catalog</h2>
                                    </div> <div class="header">
                                        <a href="javascript:void(0);">
                                            <div>
                                                <img src="/content/dam/herc/home/content/images/left-arrow.png">
                                            </div> </a>
                                        <img alt="Climate Control" src="/content/dam/herc/home/rentals/icon/climate-control.png">
                                        <h5>Climate Control</h5>
                                    </div>
                                    <hr size="3" NOSHADE color="black" width="100%">
                                </div>
                                <div class="list">
                                    <h6>Type :</h6>
                                    <ul>
                                        <li><a href="/content/herc/en/rentals/climate-control/heaters.html">Heaters</a></li>
                                        <li><a href="/content/herc/en/rentals/climate-control/air-conditioners.html">Air Conditioners</a></li>
                                        <li><a href="/content/herc/en/rentals/climate-control/air-movers.html">Air Movers</a></li>
                                        <li><a href="/content/herc/en/rentals/climate-control/chillers.html">Chillers</a></li>
                                        <li><a href="/content/herc/en/rentals/climate-control/dehumidifiers.html">Dehumidifiers</a></li>
                                        <li><a href="/content/herc/en/rentals/climate-control/fans-blowers.html">Fans &amp; Blowers</a></li>
                                        <li><a href="/content/herc/en/rentals/climate-control/ozone-generators.html">Ozone Generators</a></li>
                                    </ul>
                                    <div class="tab-pgntn">
                                        <ol class="pagination">
                                            <li rel="prev" class="prev arrow unavailable"><a href="javascript:void(0);">&laquo;</a></li>
                                            <li class="current"><a href="javascript:void(0);">1</a></li>
                                            <li><a href="javascript:void(0);">2</a></li>
                                            <li><a href="javascript:void(0);">3</a></li>
                                            <li><a href="javascript:void(0);">4</a></li>
                                            <li><a href="javascript:void(0);">5</a></li>
                                            <li rel="next" class="next arrow"><a href="javascript:void(0);">&raquo;</a></li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="submenu compaction-paving">
                                <div class="headline">
                                    <div>
                                        <h2>Rentals catalog</h2>
                                    </div> <div class="header">
                                        <a href="javascript:void(0);">
                                            <div>
                                                <img src="/content/dam/herc/home/content/images/left-arrow.png">
                                            </div> </a>
                                        <img alt="Compaction &amp; Paving" src="/content/dam/herc/home/rentals/icon/compaction-paving.png">
                                        <h5>Compaction &amp; Paving</h5>
                                    </div>
                                    <hr size="3" NOSHADE color="black" width="100%">
                                </div>
                                <div class="list">
                                    <h6>Type :</h6>
                                    <ul>
                                        <li><a href="/content/herc/en/rentals/compaction-paving/ride-on-rollers.html">Ride-On-Rollers</a></li>
                                        <li><a href="/content/herc/en/rentals/compaction-paving/plate-tampers.html">Plate Tampers</a></li>
                                        <li><a href="/content/herc/en/rentals/compaction-paving/milling-machines.html">Milling Machines</a></li>
                                        <li><a href="/content/herc/en/rentals/compaction-paving/plate-compactors.html">Plate Compactors</a></li>
                                        <li><a href="/content/herc/en/rentals/compaction-paving/rammers.html">Rammers</a></li>
                                        <li><a href="/content/herc/en/rentals/compaction-paving/trench-rollers.html">Trench Rollers</a></li>
                                        <li><a href="/content/herc/en/rentals/compaction-paving/walkbehind-rollers.html">Walkbehind Rollers</a></li>
                                    </ul>
                                    <div class="tab-pgntn">
                                        <ol class="pagination">
                                            <li rel="prev" class="prev arrow unavailable"><a href="javascript:void(0);">&laquo;</a></li>
                                            <li class="current"><a href="javascript:void(0);">1</a></li>
                                            <li><a href="javascript:void(0);">2</a></li>
                                            <li><a href="javascript:void(0);">3</a></li>
                                            <li><a href="javascript:void(0);">4</a></li>
                                            <li><a href="javascript:void(0);">5</a></li>
                                            <li rel="next" class="next arrow"><a href="javascript:void(0);">&raquo;</a></li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="submenu concrete-masonry">
                                <div class="headline">
                                    <div>
                                        <h2>Rentals catalog</h2>
                                    </div> <div class="header">
                                        <a href="javascript:void(0);">
                                            <div>
                                                <img src="/content/dam/herc/home/content/images/left-arrow.png">
                                            </div> </a>
                                        <img alt="Concrete &amp; Masonry" src="/content/dam/herc/home/rentals/icon/concrete-masonry.png">
                                        <h5>Concrete &amp; Masonry</h5>
                                    </div>
                                    <hr size="3" NOSHADE color="black" width="100%">
                                </div>
                                <div class="list">
                                    <h6>Type :</h6>
                                    <ul>
                                        <li><a href="/content/herc/en/rentals/concrete-masonry/concrete-cutting-drilling.html">Concrete Cutting &amp; Drilling</a></li>
                                        <li><a href="/content/herc/en/rentals/concrete-masonry/concrete-placement.html">Concrete Placement</a></li>
                                        <li><a href="/content/herc/en/rentals/concrete-masonry/mixers.html">Mixers</a></li>
                                        <li><a href="/content/herc/en/rentals/concrete-masonry/saws.html">Saws</a></li>
                                        <li><a href="/content/herc/en/rentals/concrete-masonry/concrete-paving-breakers.html">Concrete &amp; Paving Breakers</a></li>
                                        <li><a href="/content/herc/en/rentals/concrete-masonry/screeds.html">Screeds</a></li>
                                        <li><a href="/content/herc/en/rentals/concrete-masonry/trowels.html">Trowels</a></li>
                                    </ul>
                                    <div class="tab-pgntn">
                                        <ol class="pagination">
                                            <li rel="prev" class="prev arrow unavailable"><a href="javascript:void(0);">&laquo;</a></li>
                                            <li class="current"><a href="javascript:void(0);">1</a></li>
                                            <li><a href="javascript:void(0);">2</a></li>
                                            <li><a href="javascript:void(0);">3</a></li>
                                            <li><a href="javascript:void(0);">4</a></li>
                                            <li><a href="javascript:void(0);">5</a></li>
                                            <li rel="next" class="next arrow"><a href="javascript:void(0);">&raquo;</a></li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="submenu earthmoving">
                                <div class="headline">
                                    <div>
                                        <h2>Rentals catalog</h2>
                                    </div> <div class="header">
                                        <a href="javascript:void(0);">
                                            <div>
                                                <img src="/content/dam/herc/home/content/images/left-arrow.png">
                                            </div> </a>
                                        <img alt="Earthmoving" src="/content/dam/herc/home/rentals/icon/earthmoving.png">
                                        <h5>Earthmoving</h5>
                                    </div>
                                    <hr size="3" NOSHADE color="black" width="100%">
                                </div>
                                <div class="list">
                                    <h6>Type :</h6>
                                    <ul>
                                        <li><a href="/content/herc/en/rentals/earthmoving/backhoes.html">Backhoes</a></li>
                                        <li><a href="/content/herc/en/rentals/earthmoving/dozers.html">Dozers</a></li>
                                        <li><a href="/content/herc/en/rentals/earthmoving/excavators.html">Excavators</a></li>
                                        <li><a href="/content/herc/en/rentals/earthmoving/mini-skidsteers.html">Mini Skidsteers</a></li>
                                        <li><a href="/content/herc/en/rentals/earthmoving/skidsteers.html">Skidsteers</a></li>
                                        <li><a href="/content/herc/en/rentals/earthmoving/trenchers.html">Trenchers</a></li>
                                        <li><a href="/content/herc/en/rentals/earthmoving/wheel-loaders.html">Wheel Loaders</a></li>
                                        <li><a href="/content/herc/en/rentals/earthmoving/tractors.html">Tractors</a></li>
                                    </ul>
                                    <div class="tab-pgntn">
                                        <ol class="pagination">
                                            <li rel="prev" class="prev arrow unavailable"><a href="javascript:void(0);">&laquo;</a></li>
                                            <li class="current"><a href="javascript:void(0);">1</a></li>
                                            <li><a href="javascript:void(0);">2</a></li>
                                            <li><a href="javascript:void(0);">3</a></li>
                                            <li><a href="javascript:void(0);">4</a></li>
                                            <li><a href="javascript:void(0);">5</a></li>
                                            <li rel="next" class="next arrow"><a href="javascript:void(0);">&raquo;</a></li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="submenu floor-care-surface-prep">
                                <div class="headline">
                                    <div>
                                        <h2>Rentals catalog</h2>
                                    </div> <div class="header">
                                        <a href="javascript:void(0);">
                                            <div>
                                                <img src="/content/dam/herc/home/content/images/left-arrow.png">
                                            </div> </a>
                                        <img alt="Floor Care &amp; Surface Prep" src="/content/dam/herc/home/rentals/icon/floor-care-surface-prep.png">
                                        <h5>Floor Care &amp; Surface Prep</h5>
                                    </div>
                                    <hr size="3" NOSHADE color="black" width="100%">
                                </div>
                                <div class="list">
                                    <h6>Type :</h6>
                                    <ul>
                                        <li><a href="/content/herc/en/rentals/floor-care-surface-prep/cleaning-restoration.html">Cleaning &amp; Restoration</a></li>
                                        <li><a href="/content/herc/en/rentals/floor-care-surface-prep/floor-care.html">Floor Care</a></li>
                                        <li><a href="/content/herc/en/rentals/floor-care-surface-prep/grinders-polishers.html">Grinders &amp; Polishers</a></li>
                                        <li><a href="/content/herc/en/rentals/floor-care-surface-prep/surface-preparation.html">Surface Preparation</a></li>
                                    </ul>
                                    <div class="tab-pgntn">
                                        <ol class="pagination">
                                            <li rel="prev" class="prev arrow unavailable"><a href="javascript:void(0);">&laquo;</a></li>
                                            <li class="current"><a href="javascript:void(0);">1</a></li>
                                            <li><a href="javascript:void(0);">2</a></li>
                                            <li><a href="javascript:void(0);">3</a></li>
                                            <li><a href="javascript:void(0);">4</a></li>
                                            <li><a href="javascript:void(0);">5</a></li>
                                            <li rel="next" class="next arrow"><a href="javascript:void(0);">&raquo;</a></li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="submenu material-handling">
                                <div class="headline">
                                    <div>
                                        <h2>Rentals catalog</h2>
                                    </div> <div class="header">
                                        <a href="javascript:void(0);">
                                            <div>
                                                <img src="/content/dam/herc/home/content/images/left-arrow.png">
                                            </div> </a>
                                        <img alt="Material Handling" src="/content/dam/herc/home/rentals/icon/material-handling.png">
                                        <h5>Material Handling</h5>
                                    </div>
                                    <hr size="3" NOSHADE color="black" width="100%">
                                </div>
                                <div class="list">
                                    <h6>Type :</h6>
                                    <ul>
                                        <li><a href="/content/herc/en/rentals/material-handling/air-winches.html">Air Winches</a></li>
                                        <li><a href="/content/herc/en/rentals/material-handling/chain-lever-hoists.html">Chain &amp; Lever Hoists</a></li>
                                        <li><a href="/content/herc/en/rentals/material-handling/forklifts.html">Forklifts</a></li>
                                        <li><a href="/content/herc/en/rentals/material-handling/gantries-trolleys.html">Gantries &amp; Trolleys</a></li>
                                        <li><a href="/content/herc/en/rentals/material-handling/hydraulic-jacks-cylinders.html">Hydraulic Jacks &amp; Cylinders</a></li>
                                        <li><a href="/content/herc/en/rentals/material-handling/lift-carry.html">Lift &amp; Carry</a></li>
                                        <li><a href="/content/herc/en/rentals/material-handling/loading-unloading.html">Loading &amp; Unloading</a></li>
                                        <li><a href="/content/herc/en/rentals/material-handling/pallet-jacks.html">Pallet Jacks</a></li>
                                        <li><a href="/content/herc/en/rentals/material-handling/warehouse-dollies-carts.html">Warehouse Dollies &amp; Carts</a></li>
                                        <li><a href="/content/herc/en/rentals/material-handling/carry-deck-cranes.html">Carry Deck Cranes</a></li>
                                        <li><a href="/content/herc/en/rentals/material-handling/conveyer.html">Conveyer</a></li>
                                    </ul>
                                    <div class="tab-pgntn">
                                        <ol class="pagination">
                                            <li rel="prev" class="prev arrow unavailable"><a href="javascript:void(0);">&laquo;</a></li>
                                            <li class="current"><a href="javascript:void(0);">1</a></li>
                                            <li><a href="javascript:void(0);">2</a></li>
                                            <li><a href="javascript:void(0);">3</a></li>
                                            <li><a href="javascript:void(0);">4</a></li>
                                            <li><a href="javascript:void(0);">5</a></li>
                                            <li rel="next" class="next arrow"><a href="javascript:void(0);">&raquo;</a></li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="submenu power-generation">
                                <div class="headline">
                                    <div>
                                        <h2>Rentals catalog</h2>
                                    </div> <div class="header">
                                        <a href="javascript:void(0);">
                                            <div>
                                                <img src="/content/dam/herc/home/content/images/left-arrow.png">
                                            </div> </a>
                                        <img alt="Power Generation" src="/content/dam/herc/home/rentals/icon/power-generation.png">
                                        <h5>Power Generation</h5>
                                    </div>
                                    <hr size="3" NOSHADE color="black" width="100%">
                                </div>
                                <div class="list">
                                    <h6>Type :</h6>
                                    <ul>
                                        <li><a href="/content/herc/en/rentals/power-generation/generators.html">Generators</a></li>
                                        <li><a href="/content/herc/en/rentals/power-generation/tanks-vessels.html">Tanks &amp; Vessels</a></li>
                                        <li><a href="/content/herc/en/rentals/power-generation/transformers-converters.html">Transformers &amp; Converters</a></li>
                                        <li><a href="/content/herc/en/rentals/power-generation/light-towers.html">Light Towers</a></li>
                                        <li><a href="/content/herc/en/rentals/power-generation/power-distribution.html">Power Distribution</a></li>
                                    </ul>
                                    <div class="tab-pgntn">
                                        <ol class="pagination">
                                            <li rel="prev" class="prev arrow unavailable"><a href="javascript:void(0);">&laquo;</a></li>
                                            <li class="current"><a href="javascript:void(0);">1</a></li>
                                            <li><a href="javascript:void(0);">2</a></li>
                                            <li><a href="javascript:void(0);">3</a></li>
                                            <li><a href="javascript:void(0);">4</a></li>
                                            <li><a href="javascript:void(0);">5</a></li>
                                            <li rel="next" class="next arrow"><a href="javascript:void(0);">&raquo;</a></li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="submenu procontractor">
                                <div class="headline">
                                    <div>
                                        <h2>Rentals catalog</h2>
                                    </div> <div class="header">
                                        <a href="javascript:void(0);">
                                            <div>
                                                <img src="/content/dam/herc/home/content/images/left-arrow.png">
                                            </div> </a>
                                        <img alt="ProContractor" src="/content/dam/herc/home/rentals/icon/procontractor.png">
                                        <h5>ProContractor</h5>
                                    </div>
                                    <hr size="3" NOSHADE color="black" width="100%">
                                </div>
                                <div class="list">
                                    <h6>Type :</h6>
                                    <ul>
                                        <li><a href="/content/herc/en/rentals/procontractor/builders-renovation-tools.html">Builders &amp; Renovation Tools</a></li>
                                        <li><a href="/content/herc/en/rentals/procontractor/cable-wires.html">Cable &amp; Wires</a></li>
                                        <li><a href="/content/herc/en/rentals/procontractor/chippers-shreaders-stump-removal.html">Chippers, Shreaders &amp; Stump Removal</a></li>
                                        <li><a href="/content/herc/en/rentals/procontractor/demolition-tools.html">Demolition Tools</a></li>
                                        <li><a href="/content/herc/en/rentals/procontractor/electric-tools.html">Electric Tools</a></li>
                                        <li><a href="/content/herc/en/rentals/procontractor/fastening-tools.html">Fastening Tools</a></li>
                                        <li><a href="/content/herc/en/rentals/procontractor/grinders-polishers.html">Grinders &amp; Polishers</a></li>
                                        <li><a href="/content/herc/en/rentals/procontractor/hydraulic-punch.html">Hydraulic Punch</a></li>
                                        <li><a href="/content/herc/en/rentals/procontractor/hydraulic-tools.html">Hydraulic Tools</a></li>
                                        <li><a href="/content/herc/en/rentals/procontractor/inspection-measurement.html">Inspection &amp; Measurement</a></li>
                                        <li><a href="/content/herc/en/rentals/procontractor/lawn-garden.html">Lawn &amp; Garden</a></li>
                                        <li><a href="/content/herc/en/rentals/procontractor/lighting.html">Lighting</a></li>
                                        <li><a href="/content/herc/en/rentals/procontractor/nailer-staplers.html">Nailer &amp; Staplers</a></li>
                                        <li><a href="/content/herc/en/rentals/procontractor/paint-coating-sprayers.html">Paint &amp; Coating Sprayers</a></li>
                                        <li><a href="/content/herc/en/rentals/procontractor/pipe-tools.html">Pipe Tools</a></li>
                                        <li><a href="/content/herc/en/rentals/procontractor/plumbing-tools.html">Plumbing Tools</a></li>
                                        <li><a href="/content/herc/en/rentals/procontractor/pressure-washers.html">Pressure Washers</a></li>
                                        <li><a href="/content/herc/en/rentals/procontractor/safety-emergency-response.html">Safety &amp; Emergency Response</a></li>
                                        <li><a href="/content/herc/en/rentals/procontractor/sanders-finishers.html">Sanders &amp; Finishers</a></li>
                                        <li><a href="/content/herc/en/rentals/procontractor/saws.html">Saws</a></li>
                                        <li><a href="/content/herc/en/rentals/procontractor/torquing.html">Torquing</a></li>
                                        <li><a href="/content/herc/en/rentals/procontractor/welding.html">Welding</a></li>
                                        <li><a href="/content/herc/en/rentals/procontractor/explosion-proof-lighting.html">Explosion Proof Lighting</a></li>
                                        <li><a href="/content/herc/en/rentals/procontractor/hydraulic-test-pumps.html">Hydraulic Test Pumps</a></li>
                                        <li><a href="/content/herc/en/rentals/procontractor/magnetic-drills.html">Magnetic Drills</a></li>
                                        <li><a href="/content/herc/en/rentals/procontractor/street-sweepers.html">Street Sweepers</a></li>
                                    </ul>
                                    <div class="tab-pgntn">
                                        <ol class="pagination">
                                            <li rel="prev" class="prev arrow unavailable"><a href="javascript:void(0);">&laquo;</a></li>
                                            <li class="current"><a href="javascript:void(0);">1</a></li>
                                            <li><a href="javascript:void(0);">2</a></li>
                                            <li><a href="javascript:void(0);">3</a></li>
                                            <li><a href="javascript:void(0);">4</a></li>
                                            <li><a href="javascript:void(0);">5</a></li>
                                            <li rel="next" class="next arrow"><a href="javascript:void(0);">&raquo;</a></li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="submenu pump">
                                <div class="headline">
                                    <div>
                                        <h2>Rentals catalog</h2>
                                    </div> <div class="header">
                                        <a href="javascript:void(0);">
                                            <div>
                                                <img src="/content/dam/herc/home/content/images/left-arrow.png">
                                            </div> </a>
                                        <img alt="Pump" src="/content/dam/herc/home/rentals/icon/pump.png">
                                        <h5>Pump</h5>
                                    </div>
                                    <hr size="3" NOSHADE color="black" width="100%">
                                </div>
                                <div class="list">
                                    <h6>Type :</h6>
                                    <ul>
                                        <li><a href="/content/herc/en/rentals/pump/pump-accessories.html">Pump Accessories</a></li>
                                        <li><a href="/content/herc/en/rentals/pump/centrifugal-pumps.html">Centrifugal Pumps</a></li>
                                        <li><a href="/content/herc/en/rentals/pump/diaphram-pumps.html">Diaphram Pumps</a></li>
                                        <li><a href="/content/herc/en/rentals/pump/high-pressure-pumps.html">High Pressure Pumps</a></li>
                                        <li><a href="/content/herc/en/rentals/pump/hydraulic-power-unit-pumps.html">Hydraulic Power Unit Pumps</a></li>
                                        <li><a href="/content/herc/en/rentals/pump/hydraulic-pumps.html">Hydraulic Pumps</a></li>
                                        <li><a href="/content/herc/en/rentals/pump/industrial-pumps.html">Industrial Pumps</a></li>
                                        <li><a href="/content/herc/en/rentals/pump/slurry-pumps.html">Slurry Pumps</a></li>
                                        <li><a href="/content/herc/en/rentals/pump/submersible-pumps.html">Submersible Pumps</a></li>
                                        <li><a href="/content/herc/en/rentals/pump/trash-pumps.html">Trash Pumps</a></li>
                                        <li><a href="/content/herc/en/rentals/pump/wellpoint-pumps.html">Wellpoint Pumps</a></li>
                                    </ul>
                                    <div class="tab-pgntn">
                                        <ol class="pagination">
                                            <li rel="prev" class="prev arrow unavailable"><a href="javascript:void(0);">&laquo;</a></li>
                                            <li class="current"><a href="javascript:void(0);">1</a></li>
                                            <li><a href="javascript:void(0);">2</a></li>
                                            <li><a href="javascript:void(0);">3</a></li>
                                            <li><a href="javascript:void(0);">4</a></li>
                                            <li><a href="javascript:void(0);">5</a></li>
                                            <li rel="next" class="next arrow"><a href="javascript:void(0);">&raquo;</a></li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="submenu trucks-trailers">
                                <div class="headline">
                                    <div>
                                        <h2>Rentals catalog</h2>
                                    </div> <div class="header">
                                        <a href="javascript:void(0);">
                                            <div>
                                                <img src="/content/dam/herc/home/content/images/left-arrow.png">
                                            </div> </a>
                                        <img alt="Trucks &amp; Trailers" src="/content/dam/herc/home/rentals/icon/trucks-trailers.png">
                                        <h5>Trucks &amp; Trailers</h5>
                                    </div>
                                    <hr size="3" NOSHADE color="black" width="100%">
                                </div>
                                <div class="list">
                                    <h6>Type :</h6>
                                    <ul>
                                        <li><a href="/content/herc/en/rentals/trucks-trailers/off-road-vehicles.html">Off Road Vehicles</a></li>
                                        <li><a href="/content/herc/en/rentals/trucks-trailers/traffic-safety.html">Traffic Safety</a></li>
                                        <li><a href="/content/herc/en/rentals/trucks-trailers/trailers.html">Trailers</a></li>
                                        <li><a href="/content/herc/en/rentals/trucks-trailers/trucks.html">Trucks</a></li>
                                        <li><a href="/content/herc/en/rentals/trucks-trailers/vans.html">Vans</a></li>
                                    </ul>
                                    <div class="tab-pgntn">
                                        <ol class="pagination">
                                            <li rel="prev" class="prev arrow unavailable"><a href="javascript:void(0);">&laquo;</a></li>
                                            <li class="current"><a href="javascript:void(0);">1</a></li>
                                            <li><a href="javascript:void(0);">2</a></li>
                                            <li><a href="javascript:void(0);">3</a></li>
                                            <li><a href="javascript:void(0);">4</a></li>
                                            <li><a href="javascript:void(0);">5</a></li>
                                            <li rel="next" class="next arrow"><a href="javascript:void(0);">&raquo;</a></li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
    </section>
</div>
<script>
    $(document).ready(function(){

    });
</script>
<section class="bg-gray">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4 col1">
                <div class="marketing"><div class="layer" style="background-image: url('/content/dam/herc/home/content/images/download_app.jpg');">
<span class="headline_small">
<h5>MANAGE ON THE GO</h5>
<h4>DOWNLOAD APP</h4>
<a href="https://itunes.apple.com/us/app/herc-rentals/id1085481059?ls=1&mt=8.html" <div><img src="/content/dam/herc/home/content/images/landing-arrow.jpg"></a>
        <p>Easily manage your account by downloading our new mobile app available in Apple &amp; Android app stores. </p>
    </span>
                    </div></div>



            </div>
            <div class="col-sm-4 col2">





                <div class="marketing"><div class="layer" style="background-image: url('/content/dam/herc/home/content/images/herc_rental_bg.jpg');">
  <span class="headline_small">
  <h5>NEW NAME, BETTER SERVICE</h5>
    <h4>HERC RENTALS</h4>


    <a href="/content/herc/en/need-help/company-overview.html" <div><img src="/content/dam/herc/home/content/images/landing-arrow.jpg"></a>
          <p>We are a premier, full-service equipment-rental firm with a large North American presence.</p>
    </span>
                    </div></div>



            </div>
            <div class="col-sm-4 col3">





                <div class="marketing"><div class="layer" style="background-image: url('/content/dam/herc/home/content/images/search_classes_bg.jpg');">
  <span class="headline_small">
  <h5>IT’S A NEW DAY. </h5>
    <h4>GEAR UP VIDEO</h4>

    <a href="https://vimeo.com/172810293" <div><img src="/content/dam/herc/home/content/images/landing-arrow.jpg"></a>

          <p>We are finally Herc Rentals! Spread the word.</p>
    </span>
                    </div></div>



            </div>
        </div>
    </div>

</section>

<section class="mmodule">
    <div class="container-fluid">
        <div class="row">





            <div class="index">
                <div class="col-sm-12 col-md-6 col-lg-6 mmodule_txt mmodule_txt1">
                    <div class="col-sm-8 col-md-6 col-lg-8">

                        <h2>we are here to assist you.</h2>
                        <p>Contact our customer service team to help better assist your needs.</p>
                    </div>
                    <div class="col-sm-4 col-md-6 col-lg-4 text-left">
                        <!--span type="submit" class="btn herc-btn hm-chat-btn"><a href="#" data-toggle="modal" data-target="#myModal1" class="btn herc-btn1">CHAT NOW</a></span-->


                        <span type="submit" class="btn herc-btn hm-chat-btn"><a href="/content/herc/en/need-help/contact-us.html" class="btn herc-btn1">CHAT NOW</a></span>


                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 mmodule_txt">

                    <div class="col-sm-8 col-md-6 col-lg-8">


                        <h2>You Should get an account. Really.</h2>

                        <p>Account management on-the-go while earning points, place reservations and see equipment you have on rent. 	</p>
                    </div>

                    <div class="col-sm-4 col-md-6 col-lg-4 text-left">
                        <span type="submit" class="btn herc-btn hm-chat-btn"><a href="/content/herc/en/create-account.html" class="btn herc-btn1">SIGN UP</a></span>
                    </div>
                </div>

            </div>



        </div>
    </div>
</section>
<section class="solutions-bg">

    <div class="parbase solution_carousel list"><script src="{{asset('js/slickSlider.js')}}"></script>
        <div class="container">
            <div class="row">
                <div class="headline2">
                    <h5 class="herc">Solutions :</h5>
                </div>

                <div class="col-md-5 col-md-offset-4 col-lg-10 col-lg-offset-0 col-xs-12 col-sm-12 sltnCont">


                    <div class="Climate Control Equipments">
                        <h3>//Climate Control</h3>

                        <p style="width:60%;">Climate Control solutions offers a variety of heating and cooling solutions. From spot coolers to vertical HVAC units to self-contained ductless units to 50-ton chillers, we have you covered.
                        </p><br/>
                        <span type="submit" class="btn herc-btn"><a href="/content/herc/en/solutions/climate-control.html" class="btn herc-btn1">See Climate Control</a></span>

                    </div>

                    <div class="Entertainment Equipments">
                        <h3>//Entertainment</h3>

                        <p style="width:60%;">Entertainment Solutions are uniquely prepared to meet your Film, TV, and Event production needs.</p><br/>
                        <span type="submit" class="btn herc-btn"><a href="/content/herc/en/solutions/entertainment.html" class="btn herc-btn1">See Entertainment</a></span>

                    </div>

                    <div class="Floor care &amp; Surface Prep Equipments">
                        <h3>//Floor care &amp; Surface Prep</h3>

                        <p style="width:60%;">Let us help you tackle all your floor care, cleaning and removal needs.</p><br/>
                        <span type="submit" class="btn herc-btn"><a href="/content/herc/en/solutions/floor-care-surface-prep.html" class="btn herc-btn1">See Floor care &amp; Surface Prep</a></span>

                    </div>

                    <div class="Government Equipments">
                        <h3>//Government</h3>

                        <p style="width:60%;">Our national partnerships provide procurement resources for local and state government agencies, school districts (K-12), higher education, and nonprofit organizations with competitively solicited contracts for quality products, services, and solutions through lead public agencies.
                        </p><br/>
                        <span type="submit" class="btn herc-btn"><a href="/content/herc/en/solutions/government.html" class="btn herc-btn1">See Government</a></span>

                    </div>

                    <div class="Industrial Equipments">
                        <h3>//Industrial</h3>

                        <p style="width:60%;">Industrial Services is a global operation providing an industrial line of products and services that include equipment, supplies, tools, customized mobile tool rooms, and high-tech asset management systems.
                        </p><br/>
                        <span type="submit" class="btn herc-btn"><a href="/content/herc/en/solutions/industrial.html" class="btn herc-btn1">See Industrial</a></span>

                    </div>

                    <div class="Power Generation Equipments">
                        <h3>//Power Generation</h3>

                        <p style="width:60%;">Whether you need energy supplies to aid in disaster relief, power for an entertainment industry function, or electricity to keep a construction site humming, organizations of all sizes count on us to meet their power distribution needs.
                        </p><br/>
                        <span type="submit" class="btn herc-btn"><a href="/content/herc/en/solutions/power-generation.html" class="btn herc-btn1">See Power Generation</a></span>

                    </div>

                    <div class="ProContractor Equipments">
                        <h3>//ProContractor</h3>

                        <p style="width:60%;">We have the right tool for the job no matter how small or large the need is. Rely on our tools to get your job done.</p><br/>
                        <span type="submit" class="btn herc-btn"><a href="/content/herc/en/solutions/procontractor.html" class="btn herc-btn1">See ProContractor</a></span>

                    </div>

                    <div class="Pump Equipments">
                        <h3>//Pump</h3>

                        <p style="width:60%;">Whether it&#39;s dewatering a construction site, bypassing a sewer line, transferring a tank or preparing for hurricanes, both small and large companies have come to count on us for specialty pumping needs.
                        </p><br/>
                        <span type="submit" class="btn herc-btn"><a href="/content/herc/en/solutions/pump.html" class="btn herc-btn1">See Pump</a></span>

                    </div>

                    <div class="Remediation &amp; Restoration Equipments">
                        <h3>//Remediation &amp; Restoration</h3>

                        <p style="width:60%;">We specialize in rental equipment and services related to restoration and drying equipment, emergency power and distribution, and climate and humidity control with a quick response and expert approach when it matters most.
                        </p><br/>
                        <span type="submit" class="btn herc-btn"><a href="/content/herc/en/solutions/remediation-restoration.html" class="btn herc-btn1">See Remediation &amp; Restoration</a></span>

                    </div>



                </div>
                <div class="othersolution col-xs-12 col-sm-12">
                    <h3 class="otherSol">OTHER SOLUTIONS </h3>
                </div>
                <div class="slider">


                    <div>
                        <img class="sliderInactiveImg" alt="Climate Control Equipments " src="/content/dam/herc/home/image/climate-control.png"><img class="sliderActiveImg" style="display:none;" alt="Climate Control Equipments" src="/content/dam/herc/home/image/climate-control_select.png">
                        <p>Climate Control</p>
                    </div>

                    <div>
                        <img class="sliderInactiveImg" alt="Entertainment Equipments " src="/content/dam/herc/home/image/entertainment.png"><img class="sliderActiveImg" style="display:none;" alt="Entertainment Equipments" src="/content/dam/herc/home/image/entertainment_select.png">
                        <p>Entertainment</p>
                    </div>

                    <div>
                        <img class="sliderInactiveImg" alt="Floor care &amp; Surface Prep Equipments " src="/content/dam/herc/home/image/floor-care-surface-prep.png"><img class="sliderActiveImg" style="display:none;" alt="Floor care &amp; Surface Prep Equipments" src="/content/dam/herc/home/image/floor-care-surface-prep_select.png">
                        <p>Floor care &amp; Surface Prep</p>
                    </div>

                    <div>
                        <img class="sliderInactiveImg" alt="Government Equipments " src="/content/dam/herc/home/image/government.png"><img class="sliderActiveImg" style="display:none;" alt="Government Equipments" src="/content/dam/herc/home/image/government_select.png">
                        <p>Government</p>
                    </div>

                    <div>
                        <img class="sliderInactiveImg" alt="Industrial Equipments " src="/content/dam/herc/home/image/industrial.png"><img class="sliderActiveImg" style="display:none;" alt="Industrial Equipments" src="/content/dam/herc/home/image/industrial_select.png">
                        <p>Industrial</p>
                    </div>

                    <div>
                        <img class="sliderInactiveImg" alt="Power Generation Equipments " src="/content/dam/herc/home/image/power-generation.png"><img class="sliderActiveImg" style="display:none;" alt="Power Generation Equipments" src="/content/dam/herc/home/image/power-generation_select.png">
                        <p>Power Generation</p>
                    </div>

                    <div>
                        <img class="sliderInactiveImg" alt="ProContractor Equipments " src="/content/dam/herc/home/image/procontractor.png"><img class="sliderActiveImg" style="display:none;" alt="ProContractor Equipments" src="/content/dam/herc/home/image/procontractor_select.png">
                        <p>ProContractor</p>
                    </div>

                    <div>
                        <img class="sliderInactiveImg" alt="Pump Equipments " src="/content/dam/herc/home/image/pump.png"><img class="sliderActiveImg" style="display:none;" alt="Pump Equipments" src="/content/dam/herc/home/image/pump_select.png">
                        <p>Pump</p>
                    </div>

                    <div>
                        <img class="sliderInactiveImg" alt="Remediation &amp; Restoration Equipments " src="/content/dam/herc/home/image/remediation-restoration.png"><img class="sliderActiveImg" style="display:none;" alt="Remediation &amp; Restoration Equipments" src="/content/dam/herc/home/image/remediation-restoration_select.png">
                        <p>Remediation &amp; Restoration</p>
                    </div>


                </div>
                <div class="nxtprv">
                    <ul>
                        <li class="prev"></li>
                        <li class="next"></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>



</section>
<section class="three_cols">
    <div class="container-fluid headline">
        <div class="container">
            <div class="row">
                <h5>STRONG SERVICE, STURDY EQUIPMENT,</h5>
                <h3><img src="/content/dam/herc/home/content/images/lines_headline.png" alt="lines"> SOLID FOUNDATION</h3>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-md-4 col-lg-4 serv_box">





                <div class="about">		<div class="service-box">
                        <div>
                            <img alt="" src="/content/dam/herc/home/content/images/careers_icon.png">
                        </div>
                        <div class="divider-header1">//</div>
                        <h5>CAREERS</h5>
                    </div>

                    <div class="service-box-txt">
                        <p>Want to be a part of the Herc Rental team? Find out more about our career opportunities.</p>

                        <a href="https://careers.hercrentals.com/" target="_blank" class="btn-skin">More ></a>

                    </div>    </div>



            </div>
            <div class="col-sm-4 col-md-4 col-lg-4 serv_box">





                <div class="about">		<div class="service-box">
                        <div>
                            <img alt="" src="/content/dam/herc/home/content/images/about_icon.png">
                        </div>
                        <div class="divider-header1">//</div>
                        <h5>ABOUT</h5>
                    </div>

                    <div class="service-box-txt">
                        <p>We are a premier, full-service equipment-rental firm with a large North American presence.</p>

                        <a href="/content/herc/en/need-help/company-overview.html" target="_blank" class="btn-skin">More ></a>

                    </div>    </div>



            </div>
            <div class="col-sm-4 col-md-4 col-lg-4 serv_box">





                <div class="about">		<div class="service-box">
                        <div>
                            <img alt="" src="/content/dam/herc/home/content/images/investor_relations_icon.png">
                        </div>
                        <div class="divider-header1">//</div>
                        <h5>INVESTOR RELATIONS</h5>
                    </div>

                    <div class="service-box-txt">
                        <p>Our latest presentations, news and other financial information.</p>
                        <div><br></div>
                        <a href="http://ir.hercrentals.com/" target="_blank" class="btn-skin">More ></a>

                    </div>    </div>



            </div>
        </div>
    </div>
</section>
<!--/* Footer Content Start */ -->
<footer class="footer_yellow1">
    <div class="container0">
        <div class="row">


            <div class="footer_yellow1">

                <a href="https://itunes.apple.com/us/app/herc-rentals/id1085481059?ls=1&mt=8" target="_blank"><img src="/content/dam/herc/home/footer/images/download_ap_btn.png" alt="" class="img-responsive"></a>


                <img src="/content/dam/herc/home/footer/images/footer_or.png" alt="" class="img-responsive img-or">

                <a href="https://play.google.com/store/apps/details?id=com.hertz.hercmobileapp" target="_blank"><img src="/content/dam/herc/home/footer/images/download_gplay_btn.png" alt="" class="img-responsive"></a>


            </div>
            <!--div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 playstore_btns">
                <a href="#"><img src="/content/dam/herc/home/footer/images/download_ap_btn.png" alt="" class="img-responsive"></a>

            </div>
            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                <img src="/content/dam/herc/home/footer/images/footer_or.png" alt="" class="img-responsive">
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 playstore_btns">
                 <a href="#"><img src="/content/dam/herc/home/footer/images/download_gplay_btn.png" alt="" class="img-responsive"></a>
            </div-->
        </div>
    </div>
</footer>

<footer class="footer2">
    <div class="container">
        <div class="row">






            <div class="text parbase">
                <div style="padding-left: 0;"
                     class="col-xs-6 col-sm-3 col-md-3 col-lg-3"><div
                            class="footer_col1"><h3>Contact Us</h3>
                        <p>888-777-2700<br />
                            <a href="/cdn-cgi/l/email-protection#dcb4b9aebfafbdb0b9af9cb4b9aebfaeb9b2a8bdb0aff2bfb3b1"><span class="__cf_email__" data-cfemail="8de5e8ffeefeece1e8fecde5e8ffeeffe8e3f9ece1fea3eee2e0">[email&#160;protected]</span><script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */!function(t,e,r,n,c,a,p){try{t=document.currentScript||function(){for(t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&(c=t.previousSibling)){p=t.parentNode;if(a=c.getAttribute('data-cfemail')){for(e='',r='0x'+a.substr(0,2)|0,n=2;a.length-n;n+=2)e+='%'+('0'+('0x'+a.substr(n,2)^r).toString(16)).slice(-2);p.replaceChild(document.createTextNode(decodeURIComponent(e)),c)}p.removeChild(t)}}catch(u){}}()/* ]]> */</script></a><br />
                        </p>
                        <p><a adhocenable="false" href="/content/herc/en/need-help/contact-us.html" target="_blank">Request Form</a></p>
                        <a adhocenable="false" href="https://www.facebook.com/HercRentalsInc/" target="_blank"><img class="img-responsive" alt="Facebook" src="/content/dam/herc/home/footer/images/social_facebook.png"/></a><a href="https://twitter.com/HercRentalsInc" target="_blank" adhocenable="false"><img class="img-responsive" alt="Twitter" src="/content/dam/herc/home/footer/images/social_twitter.png"/></a><a href="http://www.linkedin.com/company/hercrentalsinc" target="_blank" adhocenable="false"><img class="img-responsive" alt="Linkedin" src="/content/dam/herc/home/footer/images/social_linkedin.png"/></a></div>
                </div>

                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 footer_col"><div
                            class="footer_col2"><h3>Careers</h3>
                        <ul
                                class="list-unstyled">
                            <li><a href="https://careers.hercrentals.com/" target="_blank">Job Search</a></li>
                            <li><a href="https://careers.hercrentals.com/choose-herc/military-veteran-recruiting/" target="_blank">Military Friendly</a></li>
                            <li><a href="https://careers.hercrentals.com/our-careers/career-opportunities/" target="_blank">Career Opportunities</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 footer_col"><div
                            class="footer_col3"><h3>Services</h3>
                        <ul
                                class="list-unstyled">
                            <li><a href="/content/herc/en/rentals.html">Equipment Rental</a></li>
                            <li><a href="http://used.hercrentals.com">Used Equipment Sales</a></li>
                            <li><a href="/content/herc/en/solutions.html">Solutions</a></li>
                            <li><a href="/content/herc/en/create-account.html">Account Management</a></li>
                            <li><a href="/content/herc/en/programs/safety-training.html">Safety Training</a></li>
                            <li><a href="/content/herc/en/programs/credit.html">Credit Application</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 footer_col"><div
                            class="footer_col3"><h3>About</h3>
                        <ul
                                class="list-unstyled">
                            <li><a href="/content/herc/en/need-help/company-overview.html">Company Overview</a></li>
                            <li><a href="http://ir.hercrentals.com/">Investor Relations</a></li>
                            <li><a href="http://ir.hercrentals.com/">Press Releases</a></li>
                            <li><a href="/content/herc/en/need-help/company-overview/in-the-news.html">In The News</a></li>
                            <li><a href="http://ir.hercrentals.com/">Leadership</a></li>
                            <li><a href="/content/herc/en/need-help/international-operations.html">International Operations</a></li>
                        </ul>
                    </div>
                </div>


            </div>




            <div class="new section">
            </div>




            <div class="iparys_inherited">





            </div>




        </div>
    </div>
</footer>
<footer>
    <div class="container footer3">
        <div class="row">
            <div class="col-xs-12 col-md-6 col-lg-6 footer3_left">



                Site Map / <a href="/content/herc/en/privacy-policy.html">Privacy Policy</a>
                / <a href="/content/herc/en/terms-of-use.html">Terms Of Use </a>
                / <a href="/content/herc/en/appprivacy-policy.html">App Privacy Policy</a>
                / <a href="/content/herc/en/appterms-of-use.html">App Terms Of Use </a>

                <br>
                <p>© 2016 Herc Rentals Inc. - 27500 Riverview Center Blvd, Ste 100, Bonita Springs, FL 34134</p>



            </div>



            <div class="col-xs-12 col-md-6 col-lg-6">


                <div class="col-xs-12 col-sm-8 col-md-8 footer3_right_txt">
                    Affiliations:
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 footer3_right">




                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <span> Affiliations: &nbsp;</span><img src="/content/dam/herc/home/footer/images/affliation_mf15.png" alt="" class="img-responsive">
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 gsa_contract_holder">
                        <img src="/content/dam/herc/home/footer/images/gsa_contract_holder.png" alt="" class="img-responsive">
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 affliation_us_communities">
                        <img src="/content/dam/herc/home/footer/images/affliation_us_communities.png" alt="" class="img-responsive">
                    </div>







                </div>
            </div>

        </div>
    </div>
</footer>
<!--<div class="loader"><img src="/content/dam/herc/common/static_images/loading.gif" /></div>-->
</body>
</html>
