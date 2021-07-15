@extends('mobile.layouts.index')

@section('content')

<div class="container">
    <div class="section">

            <ul class="subpages collection">
                <h5 class="pagetitle">SETTING</h5>               

                <li class="collection-item">
                    <a href="ui-pages-aboutus.html" class="waves-effect"><i class="mdi mdi-wallet-travel"></i></i><span>Language</span><i class="arrow mdi mdi-chevron-right"></i></a>
                </li>
                <li class="collection-item">
                    <a href="ui-pages-team.html" class="waves-effect"><i class="mdi mdi-television-guide"></i></i><span>Update Profile</span><i class="arrow mdi mdi-chevron-right"></i></a>
                </li>
                <li class="collection-item">
                    <a href="ui-pages-timeline.html" class="waves-effect"><i class="mdi mdi-timer-sand"></i></i><span>About us</span><i class="arrow mdi mdi-chevron-right"></i></a>
                </li>
                <li class="collection-item">
                    <a class="waves-effect" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    
                        <form id="logout-form" action="{{ route('member.logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form><i class="mdi mdi-logout"></i></i><span>Log out</span><i class="arrow mdi mdi-chevron-right"></i></a>
                </li>              
            </ul>
    </div>
</div>
@endsection