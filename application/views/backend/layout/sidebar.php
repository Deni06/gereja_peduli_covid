<!--MAIN NAVIGATION-->
<!--===================================================-->
<nav id="mainnav-container">
    <div id="mainnav">

        <!--Shortcut buttons-->
        <!--================================-->
        
        <!--================================-->
        <!--End shortcut buttons-->


        <!--Menu-->
        <!--================================-->
        <div id="mainnav-menu-wrap" style="background: #455a64;padding-top: 85px;">
            <div class="nano">
                <div class="nano-content">
                    <ul id="mainnav-menu" class="list-group">
                        <!--Menu list item-->
                        <li class="list-divider"></li>    
                        <li <?php if($this->uri->segment(2)=='dashboard') echo 'class="active-link";'?>>
                        <a href="<?=base_url('admin/dashboard')?>">
                            <i class="fa fa-dashboard"></i>
                            <span class="menu-title">
                                <strong>Dashboard</strong>
                            </span>
                            </a>
                        </li>                      
                        <li <?php if($this->uri->segment(2)=='article') echo 'class="active-link";'?>>
                        <a href="<?=base_url('admin/article')?>">
                            <i class="fa fa-file-text-o"></i>
                            <span class="menu-title">
                                <strong>Article</strong>
                            </span>
                            </a>
                        </li>                      
                        <li <?php if($this->uri->segment(2)=='donasi') echo 'class="active-link";'?>>
                        <a href="<?=base_url('admin/donasi')?>">
                            <i class="fa fa-dollar"></i>
                            <span class="menu-title">
                                <strong>Donasi</strong>
                            </span>
                            </a>
                        </li>                      
                        <li <?php if($this->uri->segment(2)=='user') echo 'class="active-link";'?>>
                            <a href="<?=base_url('admin/user')?>">
                            <i class="fa fa-user"></i>
                            <span class="menu-title">
                                <strong>User</strong>
                            </span>
                            </a>
                        </li>                                                
                        <li <?php if($this->uri->segment(2)=='user_group') echo 'class="active-link";'?>>
                            <a href="<?=base_url('admin/user_group')?>">
                            <i class="fa fa-group"></i>
                            <span class="menu-title">
                                <strong>User Group</strong>
                            </span>
                            </a>
                        </li>  
                        <li <?php if($this->uri->segment(2)=='iklan') echo 'class="active-link";'?>>
                            <a href="<?=base_url('admin/iklan')?>">
                            <i class="fa fa-calendar"></i>
                            <span class="menu-title">
                                <strong>Iklan</strong>
                            </span>
                            </a>
                        </li>                                                                                          
                        <li <?php if($this->uri->segment(2)=='contact') echo 'class="active-link";'?>>
                            <a href="<?=base_url('admin/contact')?>">
                            <i class="fa fa-book"></i>
                            <span class="menu-title">
                                <strong>Kontak Kami</strong>
                            </span>
                            </a>
                        </li>                                                                                          
                        <li>
                        <a href="<?=base_url('login/logout')?>">
                            <i class="fa fa-sign-out"></i>
                            <span class="menu-title">
                                <strong>Logout</strong>
                            </span>
                            </a>
                        </li>                    
                    </ul>
                </div>
            </div>
        </div>
        <!--================================-->
        <!--End menu-->

    </div>
</nav>
<!--===================================================-->
<!--END MAIN NAVIGATION-->
        