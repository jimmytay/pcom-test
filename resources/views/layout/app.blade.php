<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Test  </title>
  <link rel="icon" href="{!! asset('images/0001.jpg') !!}"/>
  <!-- Bootstrap core CSS -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
  <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/blog-post.css" rel="stylesheet">

</head>
<style>

#button1,
#button2{
  display: inline-block;
  vertical-align: top;
  margin: 5px;
}

table {
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

.form-control:focus {
  border-color: #FF0000;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(255, 0, 0, 0.6);
}
.form-group input {
  border-radius: 25px;
  padding: 10px;
  width: 250px;
  height: 50px;
  border-color:#D4AC0D  ;

}

.form-group textarea {
  columns: : 100px;
  rows: 10px;
  border-color: #D4AC0D  ;

}

.form-group select {
  border-radius: 25px;
  padding: 10px;
  width: 150px;
  height: 50px;
  border-color:#D4AC0D  ;
  position: absolute;
  top:-20px;
  left:-150px;

}

.form-group1 select {
  border-radius: 25px;
  padding: 10px;
  width: 150px;
  height: 50px;
  border-color:#D4AC0D  ;


}

.form-group option {
  border-color: #FF0000;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(255, 0, 0, 0.6);

}

.searchBox {
  margin-left:50px;
  margin-top:35px;
}

.addBox {
  margin-right:50px;
  margin-top:35px;
}
</style>

<!-- Page Content -->
@section('body')
@show
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
