<!DOCTYPE html>
<html>
<title>book list</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
table.sortable thead {
    color:#000000;
    font-weight: Raleway;
    cursor: default;}
</style>
<script src="sorttable.js"></script>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="img/manager.jpg" style="width:45%;" class="w3-round"><br><br>
    <h4><b>book list</b></h4>
  </div>
  <div class="w3-bar-block">
    <a href="manager_pageA.html" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-circle fa-fw w3-margin-right"></i>Back</a>
  </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Header -->
  <header id="portfolio">
    <a href="#"><img src="img/manager.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
    <h1><b>book list</b></h1>
    <div class="w3-section w3-bottombar w3-padding-10"></div>
    </div>
  </header>

  <center><table class="sortable" border="1" id="myTable" style="width:97%;"></center>
	    <div class="w3-container w3-white" >
        <tr>
          <th>Book ID</th>
          <th>Book name</th>
          <th>type</th>
          <th>edition</th>
          <th>publisher by</th>
          <th>published year</th>
          <th>price</th>
        </tr>
        @foreach ($books as $book)
        <tr>
            <th>{{$book->Book_id}}</th>
            <th>{{$book->Book_name}}</th>
            <th>{{$book->type}}</th>
            <th>{{$book->edition}}</th>
            <th>{{$book->publisher_name}}</th>
            <th>{{$book->published_year}}</th>
            <th>{{$book->price}}</th>
            <th><a href="/book/{{$book->Book_id}}">detail</a></th>
        </tr>
        @endforeach
      </table>

      <!-- bottom to page create -->
          <a href="/book/create">add book</a>
      </div>
</html>
