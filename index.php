<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food See2</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
          crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
</head>

<body>
<div class="container pt-3">
    <h4 class="mb-3">Register Food Supply Chain</h4>
    <form action="/supply/register.php">
        <div class="mb-3">
            <label>Line User Id</label>
            <input type="text" class="form-control" id="lineUid" placeholder=""
                   value="" required="" disabled name="line_id">
        </div>

        <div class="mb-3">
            <label>Line Name</label>
            <input type="text" class="form-control" id="lineName" placeholder=""
                   value="" required="" disabled name="line_name">
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="firstName">First name</label>
                <input type="text" class="form-control" id="firstName" placeholder=""
                       value="" required="" name="first_name">
            </div>
            <div class="col-md-6 mb-3">
                <label for="lastName">Last name</label>
                <input type="text" class="form-control" id="lastName" placeholder=""
                       value="" required="" name="last_name">
            </div>
        </div>

        <div class="mb-3">
            <label for="email">Email <span class="text-muted">(Optional)</span></label>
            <input type="email" class="form-control" id="email"
                   placeholder="you@example.com" name="email">
        </div>

        <div class="mb-3">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address"
                   placeholder="1234 Main St" required="" name="address">
        </div>

        <div class="row">
            <div class="col-md-5 mb-3">
                <label for="country">Province</label>
                <select class="custom-select d-block w-100" id="country" required="" name="province">
                    <option value="">Choose...</option>
                    <option value="bangkok">Bangkok</option>
                </select>
            </div>
            <div class="col-md-3 mb-3">
                <label for="zip">Zip Code</label>
                <input type="text" class="form-control" id="zip" placeholder=""
                       required="" name="zip_code">
            </div>
        </div>
        <hr class="mb-4">
        <button class="btn btn-success btn-lg btn-block" type="submit" style="background: #6bc950">
            Register
        </button>
    </form>

</div>

<script src="https://d.line-scdn.net/liff/1.0/sdk.js"></script>
<script src="liff-starter.js?<? rand(0,1000) ?>"></script>
</body>