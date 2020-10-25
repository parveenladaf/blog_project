

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.6/angular.min.js"></script>

<style>
    .card {
        width: 30% !important;
        padding: 15px;
        margin: 0 auto;
        margin-left: auto;
        margin-right: auto;
        top: 30%;
    }
    .h3 {
        text-align: center;
        padding: 20px;
    }
</style>

<div class="card" style="width: 18rem;">
    <form method="post" action="/api/login" enctype="multipart/form-data">
        {{ csrf_field() }}
        <h1 class="h3 mb-3 font-weight-normal">Login</h1>
        <div class="form-group">
            <label for="firstname" class="sr-only"></label>
            <input id="emailid" class="form-control" type="text" name="email_id" placeholder="Email Id">
        </div>

        <div class="form-group">
            <label for="lastname" class="sr-only"></label>
            <input id="password" class="form-control" type="text" name="password" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-lg btn-primary btn-block">Submit</button>
    </form>
</div>
