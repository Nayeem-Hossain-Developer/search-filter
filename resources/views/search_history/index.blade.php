<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .list-group-item {
            border: 0 !important;
        }
 .loader {
    animation: rotate 1s infinite;
    height: 50px;
    width: 50px;
    position: absolute;
    top: 10%;
    left: 50%;
    background: white;
    z-index: 999;

  }

  .loader:before,
  .loader:after {
    border-radius: 50%;
    content: "";
    display: block;
    height: 20px;
    width: 20px;
  }
  .loader:before {
    animation: ball1 1s infinite;
    background-color: #fff;
    box-shadow: 30px 0 0 #ff3d00;
    margin-bottom: 10px;
  }
  .loader:after {
    animation: ball2 1s infinite;
    background-color: #ff3d00;
    box-shadow: 30px 0 0 #fff;
  }

  @keyframes rotate {
    0% { transform: rotate(0deg) scale(0.8) }
    50% { transform: rotate(360deg) scale(1.2) }
    100% { transform: rotate(720deg) scale(0.8) }
  }

  @keyframes ball1 {
    0% {
      box-shadow: 30px 0 0 #ff3d00;
    }
    50% {
      box-shadow: 0 0 0 #ff3d00;
      margin-bottom: 0;
      transform: translate(15px, 15px);
    }
    100% {
      box-shadow: 30px 0 0 #ff3d00;
      margin-bottom: 10px;
    }
  }

  @keyframes ball2 {
    0% {
      box-shadow: 30px 0 0 #fff;
    }
    50% {
      box-shadow: 0 0 0 #fff;
      margin-top: -20px;
      transform: translate(15px, 15px);
    }
    100% {
      box-shadow: 30px 0 0 #fff;
      margin-top: 0;
    }
  }

    </style>
  </head>
  <body>
    <div class="container">
        <div class="row my-5">
            <div class="col-md-4">
                <form id="ajax-form" method="post" action="{{url('search')}}">
                @csrf
                <div class="mb-3">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">All Keywords :</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                @foreach($keywords as $keyword)
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div>
                                        <input class="form-check-input me-1 keyword" type="checkbox" name="keywords[]" value="{{$keyword->search_keyword}}" id="keyword{{$keyword->id}}">
                                        <label class="form-check-label" for="keyword{{$keyword->id}}">{{$keyword->search_keyword}}</label>
                                    </div>
                                    <span class="badge bg-primary rounded-pill">{{$keyword->count}}</span>
                                </li>
                                @endforeach
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
                                @foreach($users as $user)
                                <li class="list-group-item">
                                    <input class="form-check-input user me-1" type="checkbox" name=users[] value="{{$user->id}}" id="user{{$user->id}}">
                                    <label class="form-check-label" for="user{{$user->id}}">{{$user->name}}</label>
                                </li>
                                @endforeach
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
                                    <input class="form-check-input me-1 time" name="yesterday" type="checkbox" value="1" id="yesterday">
                                    <label class="form-check-label" for="yesterday">See Date From Yesterday</label>
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1 time" name="lastweek" type="checkbox" value="1" id="lastweek">
                                    <label class="form-check-label" for="lastweek">See Date From Last Week</label>
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1 time" name="lastmonth" type="checkbox" value="1" id="lastmonth">
                                    <label class="form-check-label" for="lastmonth">See Date From Last Month</label>
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
                            <div class="input-group date datepicker" id="startDate">
                                <input type="text" class="form-control" id="sdate"/>
                                <span class="input-group-append">
                                <span class="input-group-text bg-light d-block">
                                    <i class="fa fa-calendar"></i>
                                </span>
                                </span>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="">End Date</label>
                            <div class="input-group date datepicker" id="endDate">
                                <input type="text" class="form-control" id="edate"/>
                                <span class="input-group-append">
                                <span class="input-group-text bg-light d-block">
                                    <i class="fa fa-calendar"></i>
                                </span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
              </form>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title text-center">All User Search Result</h3>
                    </div>
                    <div class="card-body position-relative">
                       <span class="loader d-none" id="loader"></span>
                        <ol class="list-group list-group-numbered" id="result-body">
                            @foreach($searchResults as $searchResult)
                            <li class="list-group-item mb-3">{{$searchResult->search_results}} <strong>(search by : {{$searchResult->user->name}} , Search time : {{date('d M,Y g:i a',strtotime($searchResult->search_time))}} )</strong></li>
                            <hr>
                            @endforeach
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script>
        $(function(){
            $('.datepicker').datepicker();
        });

        function getFilterResult(){
            $('#loader').removeClass('d-none');
            let $this = $('#ajax-form');
            let formData = new FormData(document.querySelector('form'));
            $.ajax({
                type: $this.attr('method'),
                url: $this.attr('action'),
                data: formData,
                contentType: false,
                processData: false,
                cache: false,
                success: function (response) {
                    $('#loader').addClass('d-none');
                    $('#result-body').html(response);
                        console.clear()
                    }
            })
        }

        $(document).on('click','.keyword',function(){
             getFilterResult();
        });

        $(document).on('click','.user',function(){
             getFilterResult();
        });

        $(document).on('click','.time',function(){
             getFilterResult();
        });

        $('#startDate').datepicker().on('changeDate', function (ev) {
            getFilterResult();
        });

        $('#endDate').datepicker().on('changeDate', function (ev) {
            getFilterResult();
        });
    </script>
  </body>
</html>
