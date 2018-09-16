<!DOCTYPE html>
<html>
<body>


   <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
 
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="{{ asset('css/style.css') }}" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="{{ asset('js/script.js') }}"></script>



<body>
<div class="container fluid">
    <div clas="row">
        <div class="col">
            <a href="workout.php"><h3>View Workouts</h3></a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 maincol">
            <form id="additem">
                <input type="text" name="item" placeholder="add new excercise" value="">

                <input type="submit" name="submit" value="submit">     
            </form>
            <div id="itemlist">

            </div>

        </div>
        <div class="col-md-6 maincol">
            <form  method="post" action="/create">
                <input type="text" name="workout" placeholder="Enter workout name" value="">
                <div id="bigbox" class="container-fluid dropbox primary" ondrop="drop(event)" ondragover="allowDrop(event)">

                </div>
                <input type="submit" value="Hit It!">
            </form>
        </div>
    </div>
</div>


</body>
</html>

</ul>


</body>
</html>