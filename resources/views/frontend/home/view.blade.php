@extends('frontend.layouts.index')
@section('content')

<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="col-md-12">
                <!-- Weather -->
                <div class="col-lg-12 col-md-12">
                    <div class="card weather">
                        <div class="header">
                            <h2>Weather</h2>
                        </div>
                        <div class="body">
                            <div class="city">
                                <span>sky is clear</span>
                                <h3>New York</h3>
                                <i class="wi wi-day-sunny-overcast"></i>
                            </div>
                            <ul class="row days list-unstyled m-b-0">
                                <li>
                                    <h5>SUN</h5>
                                    <i class="wi wi-rain"></i>
                                    <span class="degrees">77</span>
                                </li>
                                <li>
                                    <h5>MON</h5>
                                    <i class="wi wi-cloudy"></i>
                                    <span class="degrees">81</span>
                                </li>
                                <li>
                                    <h5>TUE</h5>
                                    <i class="wi wi-rain-wind"></i>
                                    <span class="degrees">82</span>
                                </li>
                                <li>
                                    <h5>WED</h5>
                                    <i class="wi wi-lightning"></i>
                                    <span class="degrees">82</span>
                                </li>
                                <li>
                                    <h5>THU</h5>
                                    <i class="wi wi-day-cloudy-gusts"></i>
                                    <span class="degrees">81</span>
                                </li>
                                <li>
                                    <h5>FRI</h5>
                                    <i class="wi wi-day-showers"></i>
                                    <span class="degrees">67</span>
                                </li>
                                <li>
                                    <h5>SAT</h5>
                                    <i class="wi wi-day-snow"></i>
                                    <span class="degrees">81</span>
                                </li>
                            </ul>						
                        </div>
                    </div>
                </div>
                <!-- Time line -->
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>Timeline</h2>
                        </div>
                        <div class="body">
                            <div class="new_timeline">
                                <ul>
                                    <li>
                                        <div class="bullet pink"></div>
                                        <div class="time">11am</div>
                                        <div class="desc">
                                            <h3>Attendance</h3>
                                            <h4>Computer Class</h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="bullet green"></div>
                                        <div class="time">12pm</div>
                                        <div class="desc">
                                            <h3>Developer Team</h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="bullet orange"></div>
                                        <div class="time">1:30pm</div>
                                        <div class="desc">
                                            <h3>Lunch Break</h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="bullet green"></div>
                                        <div class="time">2pm</div>
                                        <div class="desc">
                                            <h3>Finish</h3>
                                            <h4>Go to Home</h4>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

