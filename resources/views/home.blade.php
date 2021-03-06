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
    <!--ROW1-->
    <div class="row">
        <!--CHARTS-->
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
        <!--CARD-->
        <div class="col"><br>
            <div class="card bg-light mb-3">
                <div class="card-header" style="position:fix;">Bestseller</div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                <td scope="col">Book Name</td>
                                <td scope="col">Amount</td>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($devlist as $devlist)
                            <tr>
                                <td>{{$devlist->name}}</td>
                                <td>{{$devlist->amount}}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div> 
                </div>
            </div>
        </div>
    </div>
    <!--ROW2-->
    <div class="card text-center">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Orders/Year</a></li>
                <!--<li class="nav-item">
                    <a class="nav-link" id="pills-home-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-home" aria-selected="false">Supply</a></li>-->
            </ul>
        </div>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <td scope="col">Order Date</td> 
                                <td scope="col">Order: Book ID/Name</td>
                                <td scope="col">Total Payment</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orderlist as $orderlist)
                            <tr>
                                <td>{{$orderlist->date}}</td>
                                <td>{{$orderlist->bookid}}/{{$orderlist->bookname}}</td>
                                <td>{{$orderlist->total}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div> 
            </div>
            <!--<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                             
                            </tr>
                        </thead>
                        <tbody>
    
                        </tbody>
                    </table>
                </div> 
            </div>-->
        </div>
    </div><br>
</div>
@stop
