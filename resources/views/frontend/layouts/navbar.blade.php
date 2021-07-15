<nav class="navbar navbar-fixed-top">
    
    <div class="container-fluid">
        <div class="navbar-btn">
            <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
        </div>

        <div class="navbar-brand">
            <a href="#"><img src="#" alt="" class="img-responsive logo"></a>                
        </div>
        
        <div class="navbar-right">
            <form id="navbar-search" class="navbar-form search-form">
                <input value="" class="form-control" placeholder="Search here..." type="text">
                <button type="button" class="btn btn-default"><i class="icon-magnifier"></i></button>
            </form>               

            <div id="navbar-menu">
                <ul class="nav navbar-nav">                        
                  <li>
                    <a href="page-login.html" class="icon-menu" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"><i class="icon-login"></i>
                        <form id="logout-form" action="{{ route('member.logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>