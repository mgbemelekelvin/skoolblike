<header>
    <div class="container">
        <nav class="navbar navbar-default" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="navbar-header">
                <img src="images/logo.png" style="width:100%; max-height:80px; max-width:150px;">
                <a href="#" onClick="javascript.void()" class="submenu">Menus</a> </div>
            <div class="menuBar">
                <ul class="menu">
                    <li  @if(strpos($title, 'Welcome to Skoolblike') !== false) class="active" @else @endif>
                        <a href="/">Home</a></li>
                    <li @if(strpos($title, 'Partnered Schools') !== false) class="active" @else @endif>
                        <a href="schools">Partnered Schools</a></li>
                    <li @if(strpos($title, 'About Us') !== false) class="active" @else @endif>
                        <a href="about_us">About Us</a></li>
                    <li @if(strpos($title, 'Features') !== false) class="active" @else @endif>
                        <a href="features">Features</a></li>
                    <li @if(strpos($title, 'Pricing') !== false) class="active" @else @endif>
                        <a href="pricing">Pricing</a></li>
                    <li @if(strpos($title, 'Tutorials') !== false) class="active" @else @endif>
                        <a href="tutorials">Tutorials</a></li>
                    <li @if(strpos($title, 'Download') !== false) class="active" @else @endif>
                        <a href="download">Download</a></li>
                    <li @if(strpos($title, 'Contact Us') !== false) class="active" @else @endif>
                        <a href="contact">Contact Us</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
    </div>
</header>