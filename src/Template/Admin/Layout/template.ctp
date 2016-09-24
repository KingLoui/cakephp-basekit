<?php
$pageTitle = 'BaseKit:';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?= $this->Html->charset() ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>
        <?= $pageTitle ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('KingLoui/BaseKit.basekit-admin.css') ?>
    <?= $this->Html->css('KingLoui/BaseKit.vendor/animate/animate.css') ?>
    <?= $this->Html->css('KingLoui/BaseKit.vendor/font-awesome/font-awesome.min.css') ?>
    

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script_head') ?>

    <?= // Body scripts
        $this->Html->script(
        [
            'KingLoui/BaseKit.vendor/jquery/jquery-3.1.0.min.js', 
            'KingLoui/BaseKit.vendor/bootstrap/bootstrap.min.js',
            'KingLoui/BaseKit.vendor/slimscroll/jquery.slimscroll.min.js',
            'KingLoui/BaseKit.vendor/metismenu/jquery.metisMenu.js',
            'KingLoui/BaseKit.vendor/pace/pace.min.js',
            'KingLoui/BaseKit.theme-basekit-admin.js'
        ], 
        ['block' => 'scriptfiles_body'])
    ?>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="bk-backend">
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                    <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Matthias Hollerbach</strong>
                                     </span> <span class="text-muted text-xs block">Art Director <b class="caret"></b></span> </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="profile.html">Profile</a></li>
                                <li><a href="contacts.html">Contacts</a></li>
                                <li><a href="mailbox.html">Mailbox</a></li>
                                <li class="divider"></li>
                                <li><a href="login.html">Logout</a></li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            IN+
                        </div>
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="index.html">Dashboard v.1</a></li>
                            <li><a href="dashboard_2.html">Dashboard v.2</a></li>
                            <li><a href="dashboard_3.html">Dashboard v.3</a></li>
                            <li><a href="dashboard_4_1.html">Dashboard v.4</a></li>
                            <li><a href="dashboard_5.html">Dashboard v.5 </a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="layouts.html"><i class="fa fa-diamond"></i> <span class="nav-label">Layouts</span></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Graphs</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="graph_flot.html">Flot Charts</a></li>
                            <li><a href="graph_morris.html">Morris.js Charts</a></li>
                            <li><a href="graph_rickshaw.html">Rickshaw Charts</a></li>
                            <li><a href="graph_chartjs.html">Chart.js</a></li>
                            <li><a href="graph_chartist.html">Chartist</a></li>
                            <li><a href="c3.html">c3 charts</a></li>
                            <li><a href="graph_peity.html">Peity Charts</a></li>
                            <li><a href="graph_sparkline.html">Sparkline Charts</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="mailbox.html"><i class="fa fa-envelope"></i> <span class="nav-label">Mailbox </span><span class="label label-warning pull-right">16/24</span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="mailbox.html">Inbox</a></li>
                            <li><a href="mail_detail.html">Email view</a></li>
                            <li><a href="mail_compose.html">Compose email</a></li>
                            <li><a href="email_template.html">Email templates</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="metrics.html"><i class="fa fa-pie-chart"></i> <span class="nav-label">Metrics</span>  </a>
                    </li>
                    <li>
                        <a href="widgets.html"><i class="fa fa-flask"></i> <span class="nav-label">Widgets</span></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Forms</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="form_basic.html">Basic form</a></li>
                            <li><a href="form_advanced.html">Advanced Plugins</a></li>
                            <li><a href="form_wizard.html">Wizard</a></li>
                            <li><a href="form_file_upload.html">File Upload</a></li>
                            <li><a href="form_editors.html">Text Editor</a></li>
                                <li><a href="form_autocomplete.html">Autocomplete</a></li>
                            <li><a href="form_markdown.html">Markdown</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-desktop"></i> <span class="nav-label">App Views</span>  <span class="pull-right label label-primary">SPECIAL</span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="contacts.html">Contacts</a></li>
                            <li><a href="profile.html">Profile</a></li>
                            <li><a href="profile_2.html">Profile v.2</a></li>
                            <li><a href="contacts_2.html">Contacts v.2</a></li>
                            <li><a href="projects.html">Projects</a></li>
                            <li><a href="project_detail.html">Project detail</a></li>
                            <li><a href="teams_board.html">Teams board</a></li>
                            <li><a href="social_feed.html">Social feed</a></li>
                            <li><a href="clients.html">Clients</a></li>
                            <li><a href="full_height.html">Outlook view</a></li>
                            <li><a href="vote_list.html">Vote list</a></li>
                            <li><a href="file_manager.html">File manager</a></li>
                            <li><a href="calendar.html">Calendar</a></li>
                            <li><a href="issue_tracker.html">Issue tracker</a></li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="article.html">Article</a></li>
                            <li><a href="faq.html">FAQ</a></li>
                            <li><a href="timeline.html">Timeline</a></li>
                            <li><a href="pin_board.html">Pin board</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-files-o"></i> <span class="nav-label">Other Pages</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="search_results.html">Search results</a></li>
                            <li><a href="lockscreen.html">Lockscreen</a></li>
                            <li><a href="invoice.html">Invoice</a></li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="login_two_columns.html">Login v.2</a></li>
                            <li><a href="forgot_password.html">Forget password</a></li>
                            <li><a href="register.html">Register</a></li>
                            <li><a href="404.html">404 Page</a></li>
                            <li><a href="500.html">500 Page</a></li>
                            <li><a href="empty_page.html">Empty page</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-globe"></i> <span class="nav-label">Miscellaneous</span><span class="label label-info pull-right">NEW</span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="toastr_notifications.html">Notification</a></li>
                            <li><a href="nestable_list.html">Nestable list</a></li>
                            <li><a href="agile_board.html">Agile board</a></li>
                            <li><a href="timeline_2.html">Timeline v.2</a></li>
                            <li><a href="diff.html">Diff</a></li>
                                <li><a href="pdf_viewer.html">PDF viewer</a></li>
                            <li><a href="i18support.html">i18 support</a></li>
                            <li><a href="sweetalert.html">Sweet alert</a></li>
                            <li><a href="idle_timer.html">Idle timer</a></li>
                            <li><a href="truncate.html">Truncate</a></li>
                            <li><a href="spinners.html">Spinners</a></li>
                            <li><a href="tinycon.html">Live favicon</a></li>
                            <li><a href="google_maps.html">Google maps</a></li>
                                <li><a href="datamaps.html">Datamaps</a></li>
                                <li><a href="social_buttons.html">Social buttons</a></li>
                            <li><a href="code_editor.html">Code editor</a></li>
                            <li><a href="modal_window.html">Modal window</a></li>
                            <li><a href="clipboard.html">Clipboard</a></li>
                            <li><a href="forum_main.html">Forum view</a></li>
                            <li><a href="validation.html">Validation</a></li>
                            <li><a href="tree_view.html">Tree view</a></li>
                            <li><a href="loading_buttons.html">Loading buttons</a></li>
                            <li><a href="chat_view.html">Chat view</a></li>
                            <li><a href="masonry.html">Masonry</a></li>
                            <li><a href="tour.html">Tour</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-flask"></i> <span class="nav-label">UI Elements</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="typography.html">Typography</a></li>
                            <li><a href="icons.html">Icons</a></li>
                            <li><a href="draggable_panels.html">Draggable Panels</a></li> <li><a href="resizeable_panels.html">Resizeable Panels</a></li>
                            <li><a href="buttons.html">Buttons</a></li>
                            <li><a href="video.html">Video</a></li>
                            <li><a href="tabs_panels.html">Panels</a></li>
                            <li><a href="tabs.html">Tabs</a></li>
                            <li><a href="notifications.html">Notifications &amp; Tooltips</a></li>
                                <li><a href="helper_classes.html">Helper css classes</a></li>
                            <li><a href="badges_labels.html">Badges, Labels, Progress</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="grid_options.html"><i class="fa fa-laptop"></i> <span class="nav-label">Grid options</span></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-table"></i> <span class="nav-label">Tables</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="table_basic.html">Static Tables</a></li>
                            <li><a href="table_data_tables.html">Data Tables</a></li>
                            <li><a href="table_foo_table.html">Foo Tables</a></li>
                            <li><a href="jq_grid.html">jqGrid</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-shopping-cart"></i> <span class="nav-label">E-commerce</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="ecommerce_products_grid.html">Products grid</a></li>
                            <li><a href="ecommerce_product_list.html">Products list</a></li>
                            <li><a href="ecommerce_product.html">Product edit</a></li>
                            <li><a href="ecommerce_product_detail.html">Product detail</a></li>
                            <li><a href="ecommerce-cart.html">Cart</a></li>
                            <li><a href="ecommerce-orders.html">Orders</a></li>
                            <li><a href="ecommerce_payments.html">Credit Card form</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-picture-o"></i> <span class="nav-label">Gallery</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="basic_gallery.html">Lightbox Gallery</a></li>
                            <li><a href="slick_carousel.html">Slick Carousel</a></li>
                            <li><a href="carousel.html">Bootstrap Carousel</a></li>

                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap"></i> <span class="nav-label">Menu Levels </span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li>
                                <a href="#">Third Level <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level collapse">
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>

                                </ul>
                            </li>
                            <li><a href="#">Second Level Item</a></li>
                            <li>
                                <a href="#">Second Level Item</a></li>
                            <li>
                                <a href="#">Second Level Item</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="css_animation.html"><i class="fa fa-magic"></i> <span class="nav-label">CSS Animations </span><span class="label label-info pull-right">62</span></a>
                    </li>
                    <li class="landing_link">
                        <a target="_blank" href="landing.html"><i class="fa fa-star"></i> <span class="nav-label">Landing Page</span> <span class="label label-warning pull-right">NEW</span></a>
                    </li>
                    <li class="special_link">
                        <a href="package.html"><i class="fa fa-database"></i> <span class="nav-label">Package</span></a>
                    </li>
                </ul>

            </div>
        </nav>
        <div id="page-wrapper" class="gray-bg">
            <div class="overlay"></div>
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                        <form role="search" class="navbar-form-custom" action="search_results.html">
                            <div class="form-group">
                                <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                            </div>
                        </form>
                    </div>
                    <ul class="nav navbar-top-links navbar-right">
                        <li>
                            <span class="m-r-sm text-muted welcome-message">Welcome to BaseKit Admin.</span>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                                <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
                            </a>
                            <ul class="dropdown-menu dropdown-messages">
                                <li>
                                    <div class="dropdown-messages-box">
                                        <a href="profile.html" class="pull-left">
                                                                                    </a>
                                        <div class="media-body">
                                            <small class="pull-right">46h ago</small>
                                            <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                                            <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <div class="dropdown-messages-box">
                                        <a href="profile.html" class="pull-left">
                                           
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right text-navy">5h ago</small>
                                            <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                                            <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <div class="dropdown-messages-box">
                                        <a href="profile.html" class="pull-left">
                                            
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right">23h ago</small>
                                            <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                            <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <div class="text-center link-block">
                                        <a href="mailbox.html">
                                            <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                                <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                            </a>
                            <ul class="dropdown-menu dropdown-alerts">
                                <li>
                                    <a href="mailbox.html">
                                        <div>
                                            <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                            <span class="pull-right text-muted small">4 minutes ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="profile.html">
                                        <div>
                                            <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                            <span class="pull-right text-muted small">12 minutes ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="grid_options.html">
                                        <div>
                                            <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                            <span class="pull-right text-muted small">4 minutes ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <div class="text-center link-block">
                                        <a href="notifications.html">
                                            <strong>See All Alerts</strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>


                        <li>
                            <a href="login.html">
                                <i class="fa fa-sign-out"></i> Log out
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Layouts</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li class="active">
                            <strong>Layouts</strong>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-content text-center p-md">

                                <h2><span class="text-navy">INSPINIA - Responsive Admin Theme</span>
                                is provided with two main layouts <br>three skins and separate configure options.</h2>

                                <p>
                                    All config options you can trun on/off from the theme box configuration (green icon on the left side of page).
                                </p>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="ibox float-e-margins">
                            <div class="ibox-content text-center p-md">

                                <h4 class="m-b-xxs">Top navigation, centered content layout</h4>
                                <small>(optional layout)</small>
                                <p>Avalible configure options</p>
                                <span class="simple_tag">Scroll navbar</span>
                                <span class="simple_tag">Top fixed navbar</span>
                                <span class="simple_tag">Boxed layout</span>
                                <span class="simple_tag">Scroll footer</span>
                                <span class="simple_tag">Fixed footer</span>
                                <div class="m-t-md">
                                    <p>Check the Dashboard v.4 with top navigation layout</p>
                                    <div class="p-lg ">
                                    <a href="dashboard_4.html"></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6">
                        <div class="ibox float-e-margins">
                            <div class="ibox-content text-center p-md">

                                <h4 class="m-b-xxs">Basci left side nabigation layout </h4><small>(main layout)</small>
                                <p>Avalible configure options</p>
                                <span class="simple_tag">Collapse menu</span>
                                <span class="simple_tag">Fixed sidebar</span>
                                <span class="simple_tag">Scroll navbar</span>
                                <span class="simple_tag">Top fixed navbar</span>
                                <span class="simple_tag">Boxed layout</span>
                                <span class="simple_tag">Scroll footer</span>
                                <span class="simple_tag">Fixed footer</span>
                                <div class="m-t-md">
                                    <p>Check the Dashboard v.4 with basic layout</p>
                                    <div class="p-lg">
                                        <a href="dashboard_4_1.html"></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="ibox float-e-margins">
                            <div class="ibox-content text-center p-md">

                                <h4 class="m-b-xxs">Full height - Outlook view <span class="label label-primary">NEW</span></h4>
                                <small>(optional layout)</small>
                                <p>Avalible configure options</p>
                                <span class="simple_tag">Scroll navbar</span>
                                <span class="simple_tag">Boxed layout</span>
                                <span class="simple_tag">Scroll footer</span>
                                <span class="simple_tag">Fixed footer</span>
                                <div class="m-t-md">
                                    <p>Check the Outlook view in in full height page</p>
                                    <div class="p-lg ">
                                        <a href="full_height.html"></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6">
                        <div class="ibox float-e-margins">
                            <div class="ibox-content text-center p-md">

                                <h4 class="m-b-xxs">Off canvas menu <span class="label label-primary">NEW</span></h4>
                                <small>(optional layout)</small>
                                <p>Avalible configure options</p>
                                <span class="simple_tag">Collapse menu</span>
                                <span class="simple_tag">Fixed sidebar</span>
                                <span class="simple_tag">Top fixed navbar</span>
                                <span class="simple_tag">Boxed layout</span>
                                <span class="simple_tag">Scroll footer</span>
                                <span class="simple_tag">Fixed footer</span>
                                <div class="m-t-md">
                                    <p>Check the off canvas menu on example article page</p>
                                    <div class="p-lg">
                                        <a href="off_canvas_menu.html"></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
            <div class="footer">
                <div class="pull-right">
                    10GB of <strong>250GB</strong> Free.
                </div>
                <div>
                    <strong>Copyright</strong> Example Company © 2014-2017
                </div>
            </div>
        </div>
    </div>
    <div class="theme-config">
    <div class="theme-config-box">
        <div class="spin-icon">
            <i class="fa fa-cogs fa-spin"></i>
        </div>
        <div class="skin-setttings">
            <div class="title">Configuration</div>
            <div class="setings-item">
                    <span>
                        Collapse menu
                    </span>

                <div class="switch">
                    <div class="onoffswitch">
                        <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="collapsemenu">
                        <label class="onoffswitch-label" for="collapsemenu">
                            <span class="onoffswitch-inner"></span>
                            <span class="onoffswitch-switch"></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="setings-item">
                    <span>
                        Fixed sidebar
                    </span>

                <div class="switch">
                    <div class="onoffswitch">
                        <input type="checkbox" name="fixedsidebar" class="onoffswitch-checkbox" id="fixedsidebar">
                        <label class="onoffswitch-label" for="fixedsidebar">
                            <span class="onoffswitch-inner"></span>
                            <span class="onoffswitch-switch"></span>
                        </label>
                    </div>
                </div>
            </div>




            <div class="setings-item">
                    <span>
                        Animation Fade
                    </span>

                <div class="switch">
                    <div class="onoffswitch">
                        <input type="checkbox" name="fixedsidebar" class="onoffswitch-checkbox" id="animationfade">
                        <label class="onoffswitch-label" for="animationfade">
                            <span class="onoffswitch-inner"></span>
                            <span class="onoffswitch-switch"></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="setings-item">
                    <span>
                        Animation Push
                    </span>

                <div class="switch">
                    <div class="onoffswitch">
                        <input type="checkbox" name="fixedsidebar" class="onoffswitch-checkbox" id="animationpush">
                        <label class="onoffswitch-label" for="animationpush">
                            <span class="onoffswitch-inner"></span>
                            <span class="onoffswitch-switch"></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="setings-item">
                    <span>
                        Animation Reveal
                    </span>

                <div class="switch">
                    <div class="onoffswitch">
                        <input type="checkbox" name="fixedsidebar" class="onoffswitch-checkbox" id="animationreveal">
                        <label class="onoffswitch-label" for="animationreveal">
                            <span class="onoffswitch-inner"></span>
                            <span class="onoffswitch-switch"></span>
                        </label>
                    </div>
                </div>
            </div>





            <div class="setings-item">
                    <span>
                        Top navbar
                    </span>

                <div class="switch">
                    <div class="onoffswitch">
                        <input type="checkbox" name="fixednavbar" class="onoffswitch-checkbox" id="fixednavbar">
                        <label class="onoffswitch-label" for="fixednavbar">
                            <span class="onoffswitch-inner"></span>
                            <span class="onoffswitch-switch"></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="setings-item">
                    <span>
                        Top navbar v.2
                        <br>
                        <small>*Primary layout</small>
                    </span>

                <div class="switch">
                    <div class="onoffswitch">
                        <input type="checkbox" name="fixednavbar2" class="onoffswitch-checkbox" id="fixednavbar2">
                        <label class="onoffswitch-label" for="fixednavbar2">
                            <span class="onoffswitch-inner"></span>
                            <span class="onoffswitch-switch"></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="setings-item">
                    <span>
                        Boxed layout
                    </span>

                <div class="switch">
                    <div class="onoffswitch">
                        <input type="checkbox" name="boxedlayout" class="onoffswitch-checkbox" id="boxedlayout">
                        <label class="onoffswitch-label" for="boxedlayout">
                            <span class="onoffswitch-inner"></span>
                            <span class="onoffswitch-switch"></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="setings-item">
                    <span>
                        Fixed footer
                    </span>

                <div class="switch">
                    <div class="onoffswitch">
                        <input type="checkbox" name="fixedfooter" class="onoffswitch-checkbox" id="fixedfooter">
                        <label class="onoffswitch-label" for="fixedfooter">
                            <span class="onoffswitch-inner"></span>
                            <span class="onoffswitch-switch"></span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <?php $this->append('script_body'); ?>
        <script>
            // Config box

            // Enable/disable fixed top navbar
            $('#fixednavbar').click(function (){
                if ($('#fixednavbar').is(':checked')){
                    $(".navbar-static-top").removeClass('navbar-static-top').addClass('navbar-fixed-top');
                    $("body").removeClass('boxed-layout');
                    $("body").addClass('fixed-nav');
                    $('#boxedlayout').prop('checked', false);

                    if (localStorageSupport){
                        localStorage.setItem("boxedlayout",'off');
                    }

                    if (localStorageSupport){
                        localStorage.setItem("fixednavbar",'on');
                    }
                } else{
                    $(".navbar-fixed-top").removeClass('navbar-fixed-top').addClass('navbar-static-top');
                    $("body").removeClass('fixed-nav');
                    $("body").removeClass('fixed-nav-basic');
                    $('#fixednavbar2').prop('checked', false);

                    if (localStorageSupport){
                        localStorage.setItem("fixednavbar",'off');
                    }

                    if (localStorageSupport){
                        localStorage.setItem("fixednavbar2",'off');
                    }
                }
            });

            // Enable/disable fixed top navbar
            $('#fixednavbar2').click(function (){
                if ($('#fixednavbar2').is(':checked')){
                    $(".navbar-static-top").removeClass('navbar-static-top').addClass('navbar-fixed-top');
                    $("body").removeClass('boxed-layout');
                    $("body").addClass('fixed-nav').addClass('fixed-nav-basic');
                    $('#boxedlayout').prop('checked', false);

                    if (localStorageSupport){
                        localStorage.setItem("boxedlayout",'off');
                    }

                    if (localStorageSupport){
                        localStorage.setItem("fixednavbar2",'on');
                    }
                } else {
                    $(".navbar-fixed-top").removeClass('navbar-fixed-top').addClass('navbar-static-top');
                    $("body").removeClass('fixed-nav').removeClass('fixed-nav-basic');
                    $('#fixednavbar').prop('checked', false);

                    if (localStorageSupport){
                        localStorage.setItem("fixednavbar2",'off');
                    }
                    if (localStorageSupport){
                        localStorage.setItem("fixednavbar",'off');
                    }
                }
            });

            // Enable/disable fixed sidebar
            $('#fixedsidebar').click(function (){
                if ($('#fixedsidebar').is(':checked')){
                    $("body").addClass('fixed-sidebar');
                    $('.sidebar-collapse').slimScroll({
                        height: '100%',
                        railOpacity: 0.9
                    });

                    if (localStorageSupport){
                        localStorage.setItem("fixedsidebar",'on');
                    }
                } else{
                    $('.sidebar-collapse').slimscroll({destroy: true});
                    $('.sidebar-collapse').attr('style', '');
                    $("body").removeClass('fixed-sidebar');

                    if (localStorageSupport){
                        localStorage.setItem("fixedsidebar",'off');
                    }
                }
            });


            // Enable/disable animation fade
            $('#animationfade').click(function (){
                if ($('#animationfade').is(':checked')){
                    $("body").removeClass('sidebar-push');
                    $("body").removeClass('sidebar-reveal');
                    $('#animationpush').prop('checked', false);
                    $('#animationreveal').prop('checked', false);

                    if (localStorageSupport){
                        localStorage.setItem("animationfade",'on');
                    }
                    if (localStorageSupport){
                        localStorage.setItem("animationreveal",'off');
                    }
                    if (localStorageSupport){
                        localStorage.setItem("animationpush",'off');
                    }
                } else{
                    if (localStorageSupport){
                        localStorage.setItem("animationfade",'off');
                    }
                }
            });
            // Enable/disable animation push
            $('#animationpush').click(function (){
                if ($('#animationpush').is(':checked')){
                    $("body").addClass('sidebar-push');
                    $("body").removeClass('sidebar-reveal');
                    $('#animationreveal').prop('checked', false);
                    $('#animationfade').prop('checked', false);

                    if (localStorageSupport){
                        localStorage.setItem("animationpush",'on');
                    }
                    if (localStorageSupport){
                        localStorage.setItem("animationreveal",'off');
                    }
                    if (localStorageSupport){
                        localStorage.setItem("animationfade",'off');
                    }
                } else{
                    $("body").removeClass('sidebar-push');
                    if (localStorageSupport){
                        localStorage.setItem("animationpush",'off');
                    }
                }
            });
            // Enable/disable animation reveal
            $('#animationreveal').click(function (){
                if ($('#animationreveal').is(':checked')){
                    $("body").removeClass('sidebar-push');
                    $("body").addClass('sidebar-reveal');
                    $('#animationpush').prop('checked', false);
                    $('#animationfade').prop('checked', false);

                    if (localStorageSupport){
                        localStorage.setItem("animationreveal",'on');
                    }
                    if (localStorageSupport){
                        localStorage.setItem("animationreveal",'off');
                    }
                    if (localStorageSupport){
                        localStorage.setItem("animationpush",'off');
                    }
                } else{
                    $("body").removeClass('sidebar-reveal');
                    if (localStorageSupport){
                        localStorage.setItem("animationreveal",'off');
                    }
                }
            });

            // Enable/disable collapse menu
            $('#collapsemenu').click(function (){
                if ($('#collapsemenu').is(':checked')){
                    $("body").addClass('mini-navbar');
                    SmoothlyMenu();

                    if (localStorageSupport){
                        localStorage.setItem("collapse_menu",'on');
                    }

                } else{
                    $("body").removeClass('mini-navbar');
                    SmoothlyMenu();

                    if (localStorageSupport){
                        localStorage.setItem("collapse_menu",'off');
                    }
                }
            });

            // Enable/disable boxed layout
            $('#boxedlayout').click(function (){
                if ($('#boxedlayout').is(':checked')){
                    $("body").addClass('boxed-layout');
                    $('#fixednavbar').prop('checked', false);
                    $('#fixednavbar2').prop('checked', false);
                    $(".navbar-fixed-top").removeClass('navbar-fixed-top').addClass('navbar-static-top');
                    $("body").removeClass('fixed-nav');
                    $("body").removeClass('fixed-nav-basic');
                    $(".footer").removeClass('fixed');
                    $('#fixedfooter').prop('checked', false);

                    if (localStorageSupport){
                        localStorage.setItem("fixednavbar",'off');
                    }

                    if (localStorageSupport){
                        localStorage.setItem("fixednavbar2",'off');
                    }

                    if (localStorageSupport){
                        localStorage.setItem("fixedfooter",'off');
                    }


                    if (localStorageSupport){
                        localStorage.setItem("boxedlayout",'on');
                    }
                } else{
                    $("body").removeClass('boxed-layout');

                    if (localStorageSupport){
                        localStorage.setItem("boxedlayout",'off');
                    }
                }
            });

            // Enable/disable fixed footer
            $('#fixedfooter').click(function (){
                if ($('#fixedfooter').is(':checked')){
                    $('#boxedlayout').prop('checked', false);
                    $("body").removeClass('boxed-layout');
                    $(".footer").addClass('fixed');

                    if (localStorageSupport){
                        localStorage.setItem("boxedlayout",'off');
                    }

                    if (localStorageSupport){
                        localStorage.setItem("fixedfooter",'on');
                    }
                } else{
                    $(".footer").removeClass('fixed');

                    if (localStorageSupport){
                        localStorage.setItem("fixedfooter",'off');
                    }
                }
            });

            // SKIN Select
            $('.spin-icon').click(function (){
                $(".theme-config-box").toggleClass("show");
            });

            // Default skin
            $('.s-skin-0').click(function (){
                $("body").removeClass("skin-1");
                $("body").removeClass("skin-2");
                $("body").removeClass("skin-3");
            });

            // Blue skin
            $('.s-skin-1').click(function (){
                $("body").removeClass("skin-2");
                $("body").removeClass("skin-3");
                $("body").addClass("skin-1");
            });

            // Inspinia ultra skin
            $('.s-skin-2').click(function (){
                $("body").removeClass("skin-1");
                $("body").removeClass("skin-3");
                $("body").addClass("skin-2");
            });

            // Yellow skin
            $('.s-skin-3').click(function (){
                $("body").removeClass("skin-1");
                $("body").removeClass("skin-2");
                $("body").addClass("skin-3");
            });

            if (localStorageSupport){
                var collapse = localStorage.getItem("collapse_menu");
                var fixedsidebar = localStorage.getItem("fixedsidebar");
                var fixednavbar = localStorage.getItem("fixednavbar");
                var fixednavbar2 = localStorage.getItem("fixednavbar2");
                var boxedlayout = localStorage.getItem("boxedlayout");
                var fixedfooter = localStorage.getItem("fixedfooter");
                var animationfade = localStorage.getItem("animationfade");
                var animationpush = localStorage.getItem("animationpush");
                var animationreveal = localStorage.getItem("animationreveal");

                if (collapse == 'on'){
                    $('#collapsemenu').prop('checked','checked')
                }
                if (fixedsidebar == 'on'){
                    $('#fixedsidebar').prop('checked','checked')
                }
                if (fixednavbar == 'on'){
                    $('#fixednavbar').prop('checked','checked')
                }
                if (fixednavbar2 == 'on'){
                    $('#fixednavbar2').prop('checked','checked')
                }
                if (boxedlayout == 'on'){
                    $('#boxedlayout').prop('checked','checked')
                }
                if (fixedfooter == 'on') {
                    $('#fixedfooter').prop('checked','checked')
                }
                if (animationfade == 'on'){
                    $('#animationfade').prop('checked','checked')
                }
                if (animationpush == 'on'){
                    $('#animationpush').prop('checked','checked')
                }
                if (animationreveal == 'on') {
                    $('#animationreveal').prop('checked','checked')
                }
            }
        </script>
    <?php $this->end(); ?>
    <?= $this->fetch('scriptfiles_body') ?>
    <?= $this->fetch('script_body') ?>
  </body>
</html>