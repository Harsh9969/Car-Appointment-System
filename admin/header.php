<div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            
                            <!--<li class="dropdown">
                                <i class="ti-bell dropdown-toggle" data-toggle="dropdown">
                                    <span>2</span>
                                </i>
                                <div class="dropdown-menu bell-notify-box notify-box">
                                    <span class="notify-title">You have 3 new notifications <a href="#">view all</a></span>
                                    <div class="nofity-list">
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
                                            <div class="notify-text">
                                                <p>You have Changed Your Password</p>
                                                <span>Just Now</span>
                                            </div>
                                        </a>
                                       
                                    </div>
                                </div>
                            </li>-->
                            
                            <li>
                               <a  href="login.php?a=lo"><i class="ti-power-off"></i> Log Out</a>
								<?php
													if(isset($_SESSION['em']))
													{
														$u=$_SESSION['em'];
													}
													else
													{
													
														echo'<script>window.location="login.php";</script>';
													}
													
								?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>