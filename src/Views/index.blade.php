<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Starter Template of Bootstrap</title>

    <!-- Bootstrap core CSS -->

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"/>

    <!-- Custom Style for this template -->

    <style>
        body{
            padding-top: 50px;
        }

        .starter-template{
            padding: 40px 15px;
            text-align: center;
        }
    </style>

    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"/>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"/>

</head>
<body>

<div class="container>
   <div class="row">
     <div class="col-xs-12">
       <form action="{{ route('bmi_path') }}" method="get" role="form">
           <legend>Calculate your BMI</legend>
           @if(!empty($bmi))
               <div class="alert alert-success">
                   Your BMI is: {{ $bmi }}
               </div>
           @endif

           <div class="form-group">
               <input type="number" class="form-control" name="weight" id="" placeholder="Weight" required/>
           </div>

           <div class="form-group">
               <input type="number" class="form-control" name="height" id="" placeholder="Height" required/>
           </div>

           <button type="submit" class="btn btn-primary">Calculate</button>
       </form>
     </div>
   </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/bootstrap.min.js"></script>
</body>
</html>