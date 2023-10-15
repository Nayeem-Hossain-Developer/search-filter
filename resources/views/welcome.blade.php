<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        .list-group-item {
            border: 0 !important;
        }
    </style>
  </head>
  <body>
    <div class="container">
        <div class="row my-5">
            <div class="col-md-4">
                <div class="mb-3">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">All Keywords :</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div>
                                        <input class="form-check-input me-1" type="checkbox" value="" id="firstCheckbox">
                                        <label class="form-check-label" for="firstCheckbox">First checkbox</label>
                                    </div>
                                    <span class="badge bg-primary rounded-pill">14</span>
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" id="secondCheckbox">
                                    <label class="form-check-label" for="secondCheckbox">Second checkbox</label>
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" id="thirdCheckbox">
                                    <label class="form-check-label" for="thirdCheckbox">Third checkbox</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">All Users :</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" id="firstCheckbox">
                                    <label class="form-check-label" for="firstCheckbox">First checkbox</label>
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" id="secondCheckbox">
                                    <label class="form-check-label" for="secondCheckbox">Second checkbox</label>
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" id="thirdCheckbox">
                                    <label class="form-check-label" for="thirdCheckbox">Third checkbox</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                 <div class="mb-3">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Time Range :</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" id="firstCheckbox">
                                    <label class="form-check-label" for="firstCheckbox">See Date From Yesterday</label>
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" id="secondCheckbox">
                                    <label class="form-check-label" for="secondCheckbox">See Date From Last Week</label>
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" id="thirdCheckbox">
                                    <label class="form-check-label" for="thirdCheckbox">See Date From Last Month</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Select Date :</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="">Start Date</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">End Date</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title text-center">All User Search Result</h3>
                    </div>
                    <div class="card-body">
                        <ol class="list-group list-group-numbered">
                            <li class="list-group-item mb-3">A list item</li>
                            <li class="list-group-item mb-3">A list item</li>
                            <li class="list-group-item mb-3">A list item</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('/')}}/frontend/js/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
