@extends('layouts.default')
@section('content')
<div class="chart-container" style="position: relative;">
<canvas id="myChart" ></canvas>
<script>
var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
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
</script>
</div>
<!--ROW 1-->
<div class="w3-row-padding w3-margin-bottom">
    <!--1-->
    <div class="w3-quarter">
        <div class="w3-container w3-pale-red w3-padding-16">
            <div class="w3-left"><i class="fa fa-book w3-xxxlarge"></i></div>
            <div class="w3-right">
            </div>
            <div class="w3-clear"></div>
            <a href="/books"><h6>Book</h6></a>
        </div>
    </div>
    <!--2-->
    <div class="w3-quarter">
        <div class="w3-container w3-pale-yellow w3-padding-16">
            <div class="w3-left"><i class="fa fa-th w3-xxxlarge"></i></div>
            <div class="w3-right">
            </div>
            <div class="w3-clear"></div>
            <a href="/book_in_stocks"><h6>Book In Stock</h6></a>
        </div>
    </div>
    <!--3-->
    <div class="w3-quarter">
        <div class="w3-container w3-pale-green w3-padding-16">
            <div class="w3-left"><i class="fa fa-user-circle w3-xxxlarge"></i></div>
            <div class="w3-right">
            </div>
            <div class="w3-clear"></div>
            <a href="/customers"><h6>Customers</h6></a>
        </div>
    </div>
    <!--4-->
    <div class="w3-quarter">
        <div class="w3-container w3-pale-blue w3-padding-16">
            <div class="w3-left"><i class="fa fa-user w3-xxxlarge"></i></div>
            <div class="w3-right">
            </div>
            <div class="w3-clear"></div>
            <a href="/persons"><h6>Persons</h6></a>
        </div>
    </div>
</div>
<!--ROW 2-->
<div class="w3-row-padding w3-margin-bottom">
    <!--1-->
    <div class="w3-quarter">
        <div class="w3-container w3-red w3-padding-16">
            <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
            <div class="w3-right">
            </div>
            <div class="w3-clear"></div>
            <a href="/staffs"><h6>Staffs</h6></a>
        </div>
    </div>
    <!--2-->
    <div class="w3-quarter">
        <div class="w3-container w3-khaki w3-padding-16">
            <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
            <div class="w3-right">
            </div>
            <div class="w3-clear"></div>
            <a href="/managers"><h6>Managers</h6></a>
        </div>
    </div>
    <!--3-->
    <div class="w3-quarter">
        <div class="w3-container w3-light-green w3-padding-16">
            <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
            <div class="w3-right">
            </div>
            <div class="w3-clear"></div>
            <a href="/employees"><h6>Employees</h6></a>
        </div>
    </div>
    <!--4-->
    <div class="w3-quarter">
        <div class="w3-container w3-light-blue w3-padding-16">
            <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
            <div class="w3-right">
            </div>
            <div class="w3-clear"></div>
            <a href="/stock_keepers"><h6>Stock Keepers</h6></a>
        </div>
    </div>
</div>
<!--ROW 3-->
<div class="w3-row-padding w3-margin-bottom">
    <!--1-->
    <div class="w3-quarter">
        <div class="w3-container w3-pink w3-padding-16">
            <div class="w3-left"><i class="fa fa-th w3-xxxlarge"></i></div>
            <div class="w3-right">
            </div>
            <div class="w3-clear"></div>
            <a href="/stores"><h6>Store</h6></a>
        </div>
    </div>
    <!--2-->
    <div class="w3-quarter">
        <div class="w3-container w3-amber w3-padding-16">
            <div class="w3-left"><i class="fa fa-th w3-xxxlarge"></i></div>
            <div class="w3-right">
            </div>
            <div class="w3-clear"></div>
            <a href="/stocks"><h6>Stocks</h6></a>
        </div>
    </div>
    <!--3-->
    <div class="w3-quarter">
        <div class="w3-container w3-green w3-padding-16">
            <div class="w3-left"><i class="fa fa-handshake-o w3-xxxlarge"></i></div>
            <div class="w3-right">
            </div>
            <div class="w3-clear"></div>
            <a href="/publishers"><h6>Publishers</h6></a>
        </div>
    </div>
    <!--4-->
    <div class="w3-quarter">
        <div class="w3-container w3-cyan w3-padding-16">
            <div class="w3-left"><i class="fa fa-truck w3-xxxlarge"></i></div>
            <div class="w3-right">
            </div>
            <div class="w3-clear"></div>
            <a href="/product_lines"><h6>Product Lines</h6></a>
        </div>
    </div>
</div>
<!--ROW 4-->
<div class="w3-row-padding w3-margin-bottom">
    <!--1-->
    <div class="w3-quarter">
        <div class="w3-container w3-purple w3-padding-16">
            <div class="w3-left"><i class="fa fa-database w3-xxxlarge"></i></div>
            <div class="w3-right">
            </div>
            <div class="w3-clear"></div>
            <a href="/sell_details"><h6>Sell Detail</h6></a>
        </div>
    </div>
    <!--2-->
    <div class="w3-quarter">
        <div class="w3-container w3-yellow w3-padding-16">
            <div class="w3-left"><i class="fa fa-database w3-xxxlarge"></i></div>
            <div class="w3-right">
            </div>
            <div class="w3-clear"></div>
            <a href="/sell_logs"><h6>Sell Logs</h6></a>
        </div>
    </div>
    <!--3-->
    <div class="w3-quarter">
        <div class="w3-container w3-teal w3-padding-16">
            <div class="w3-left"><i class="fa fa-database w3-xxxlarge"></i></div>
            <div class="w3-clear"></div>
            <a href="/supply_details"><h6>Supply Detail</h6></a>
        </div>
    </div>
    <!--4-->
    <div class="w3-quarter">
        <div class="w3-container w3-blue w3-padding-16">
            <div class="w3-left"><i class="fa fa-database w3-xxxlarge"></i></div>
            <div class="w3-clear"></div>
            <a href="/supply_logs"><h6>Supply Logs</h6></a>
        </div>
    </div>
</div>
@stop
