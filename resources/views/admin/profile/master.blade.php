@if ( Auth::user())
    <head>
        <meta charset="utf-8"/>
        <title>Dashboard Admin Panel</title>

        <link rel="stylesheet" href="{{url('admin/css/layout.css')}}" type="text/css" media="screen" />
        <link rel="stylesheet" type="text/css" href="{{url(elixir('css/all.css'))}}">
        <script src="{{url('admin/js/jquery-1.5.2.min.js')}}" type="text/javascript"></script>
        <script src="{{url('admin/js/hideshow.js')}}" type="text/javascript"></script>
        <script src="{{url('admin/js/jquery.tablesorter.min.js')}}" type="text/javascript"></script>
        <script type="text/javascript" src="{{url('admin/js/jquery.equalHeight.js')}}"></script>
        <script type="text/javascript">
            $(document).ready(function()
                    {
                        $(".tablesorter").tablesorter();
                    }
            );
            $(document).ready(function() {

                //When page loads...
                $(".tab_content").hide(); //Hide all content
                $("ul.tabs li:first").addClass("active").show();//Activate first tab

                $(".tab_content:first").show(); //Show first tab content

                //On Click Event
                $("ul.tabs li").click(function() {

                    $("ul.tabs li").removeClass("active"); //Remove any "active" class
                    $(this).addClass("active"); //Add "active" class to selected tab
                    $(".tab_content").hide(); //Hide all tab content

                    var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
                    $(activeTab).fadeIn(); //Fade in the active ID content
                    return false;
                });



            });
        </script>
        <script type="text/javascript">
            $(function(){
                $('.column').equalHeight();
            });
        </script>

    </head>


    <body>

    <header id="header">
        <hgroup>
            <h1 class="site_title"><a href="{{url('profile')}}">Welcome ({{Auth::user()->name}})</a></h1>
            <h2 class="section_title">Dashboard</h2><div class="btn_view_site"><a href="http://www.medialoot.com">View Site</a></div>

        </hgroup>
    </header> <!-- end of header bar -->

    <section id="secondary_bar">
        <div class="user">
            <p>John Doe (<a href="#">3 Messages</a>)</p>
            <a class="logout_user" href="#" title="Logout">Logout</a>
        </div>
        <div class="breadcrumbs_container">
            <article class="breadcrumbs"><a href="{{url('profile')}}">Website Admin</a> <div class="breadcrumb_divider"></div> <a class="current">Dashboard</a></article>
        </div>
    </section><!-- end of secondary bar -->
    <aside id="sidebar" class="column">
        <form class="quick_search">
            <input type="text" value="Quick Search" onfocus="if(!this._haschanged){this.value=''};this._haschanged=true;">
        </form>
        <hr/>
        <h3>Content</h3>
        <ul class="toggle" >
            <li class="icn_new_article"><a href="{{url('new-album')}}">New Album</a></li>
            <li class="icn_edit_article"><a href="#">Edit Articles</a></li>
            <li class="icn_categories"><a href="{{url('new-category')}}">Categories</a></li>
            <li class="icn_tags"><a href="#">Tags</a></li>
        </ul>
        <h3>Users</h3>
        <ul class="toggle">
            <li class="icn_add_user"><a href="#">Add New User</a></li>
            <li class="icn_view_users"><a href="#">View Users</a></li>
            <li class="icn_profile"><a href="#">Your Profile</a></li>
        </ul>
        <h3>Media</h3>
        <ul class="toggle">
            <li class="icn_folder"><a href="#">File Manager</a></li>
            <li class="icn_photo"><a href="#">Gallery</a></li>
            <li class="icn_audio"><a href="#">Audio</a></li>
            <li class="icn_video"><a href="#">Video</a></li>
        </ul>
        <h3>Admin</h3>
        <ul class="toggle">
            <li class="icn_settings"><a href="#">Options</a></li>
            <li class="icn_security"><a href="#">Security</a></li>
            <li class="icn_jump_back"><a href="{{route('logout')}}">Logout</a></li>
        </ul>

        <footer>
            <hr />
            <p><strong>Copyright &copy; 2011 Website Admin</strong></p>
        </footer>
    </aside><!-- end of sidebar -->
    <section id="main" class="column">
        <h4 class="alert_info">Welcome to the Admin panel Cms.</h4>


        <div class="clear"></div>
        </div>
        @yield('main-panel')

    </section>

    </body>




@else
    {{"Beta Tumse Na ho payega"}}
@endif