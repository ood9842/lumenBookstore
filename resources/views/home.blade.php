@extends('layouts.default')
@section('content')
<header class="container-fluid">
    <h5><b><i class="fa fa-dashboard"></i>Dashboard</b></h5>
</header>
<!--TOP-->
<div class="w3-row-padding w3-margin-bottom">
    <div class="w3-quarter">
        <div class="w3-container w3-red w3-padding-16">
            <div class="w3-left"><i class="fa fa-book w3-xxxlarge"></i></div>
            <div class="w3-right">
            </div>
            <div class="w3-clear"></div>
            <a href="/books"><h6>Book</h6></a>
        </div>
    </div>
    <div class="w3-quarter">
        <div class="w3-container w3-blue w3-padding-16">
            <div class="w3-left"><i class="fa fa-th w3-xxxlarge"></i></div>
            <div class="w3-right">
            </div>
            <div class="w3-clear"></div>
            <a href="/book_in_stocks"><h6>Book In Stock</h6></a>
        </div>
    </div>
    <div class="w3-quarter">
        <div class="w3-container w3-teal w3-padding-16">
            <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
            <div class="w3-right">
            </div>
            <div class="w3-clear"></div>
            <a href="/staffs"><h6>Staffs</h6></a>
        </div>
    </div>
    <div class="w3-quarter">
        <div class="w3-container w3-orange w3-text-white w3-padding-16">
            <div class="w3-left"><i class="fa fa-user w3-xxxlarge"></i></div>
            <div class="w3-right">
            </div>
            <div class="w3-clear"></div>
            <a href="/persons"><h6>Persons</h6></a>
        </div>
    </div>
</div>
<!--CONTENT-->
<div class="container-fluid">
    <div class="row">
        <!--Charts-->
        <div class="col">
            <header class="container"><h3>Sales/Month</h3></header>
            <div class="chart-container" style="position: relative;">
                <canvas id="myChart" width="550" height="350"></canvas>
                <script>
                    $.getJSON("/chart/data/sell", function (result) {
                        var labels = [],data=[];
                        for (var i = 0; i < result.length; i++) {
                            labels.push(result[i].month);
                            data.push(result[i].Sum);
                        }
                        var ctx = document.getElementById("myChart").getContext('2d');
                        var myChart = new Chart(ctx, {
                            type: 'line',
                            data: {
                                labels: labels,
                                datasets: [{
                                    label: 'sales volume',
                                    data: data,
                                }]
                            },
                            options: {
                                scales: {
                                    yAxes: [{
                                        ticks: {
                                            beginAtZero:true
                                        }
                                    }]
                                }
                            }
                        });
                    });
                </script>
            </div>
        </div>
        <!--Card 1-->
        <div class="col">
            <div class="card bg-light mb-3" style="height: 26rem;">
                <div class="card-header" style="position:fix;">Bestseller</div>
                    <p clase="card-text">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <td scope="col">Book Name</td>
                            <td scope="col">Amount</td>
                          </tr>
                        </thead>
                        <tbody id="myTable">
                        @foreach ($devlist as $devlist)
                        <tr>
                          <td>{{$devlist->name}}</td>
                          <td>{{$devlist->amount}}</td>
                        </tr>
                        @endforeach
                      </tbody>
                  </table>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="card text-center">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Order</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-home-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-home" aria-selected="true">Link</a>
                </li>
            </ul>
        </div>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">..dsadsadasdsadad.</div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...dsdadsdsd33333sdasdasd</div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">..sadasdasdasdasdasda.</div>
        </div>
    </div>
<br><br>
</div>
@stop
