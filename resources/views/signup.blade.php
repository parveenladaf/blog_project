<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<style>
    .card {
        padding: 15px;
        margin: 0 auto;
        margin-left: auto;
        margin-right: auto;
        width: 30% !important;
        top: 30%;
    }

    .form-group {
        display: inline-flex;
    }

    .h3 {
        text-align: center;
        padding: 20px;

    }

    .buttons {
        display: inline-flex;
    }
</style>

<div class="card" style="width: 30%;">
    <form method="post" action="/api/signup/create" enctype="multipart/form-data">
        {{ csrf_field() }}
        <h1 class="h3 mb-3 font-weight-normal">Registration</h1>

        <div>
            <div class="form-group">
                <div class="col-sm-6">
                    <label for="firstname"></label>
                    <input id="firstname" class="form-control" type="text" name="first_name" placeholder="First name">
                </div>
                <div class="col-sm-6">
                    <label for="lastname"></label>
                    <input id="lastname" class="form-control" type="text" name="last_name" placeholder="Last name">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-6">
                    <label for="emailid"></label>
                    <input id="emailid" class="form-control" type="text" name="email_id" placeholder="Email Id">
                </div>
                <div class="col-sm-6">
                    <label for="password"></label>
                    <input id="password" class="form-control" type="text" name="password" placeholder="Password">
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-start align-items-center">
            <button type="submit" class="btn bg-primary ml-3">Submit <i class="icon-paperplane ml-2"></i></button>
        </div>
    </form>
</div>