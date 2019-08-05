@include('layouts.head')
 <style>
        body
        {
            background-image: linear-gradient(to right,#C21460,#66CCFF);
        }

        .wrapper
        {
            margin-top: 20vh;
        }
       
    </style>
<body>
    <div class="wrapper row justify-content-md-center">
            <div class="col-md-4">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Login</h4>
                  <p class="card-category">login into your account</p>
                </div>
                <div class="card-body">
                  <form>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Username</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Password</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Login</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
          
          </div>
</body>
@include('layouts.footer')

   
