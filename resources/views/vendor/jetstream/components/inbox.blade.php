<div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">Welcome !</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="{{route('home')}}">Dashboard</a></li>
                                    <li class="active">Add Customer</li>
                                </ol>
                            </div>
                        </div>
               <div class="col-md-2"></div>
                      <div class="col-md-8">
                                <div class="panel panel-info">
                                    <div class="panel-heading"><h3 class="panel-title text-white">Add Customer</h3></div>

                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    <div class="panel-body">
                                        <form role="form" method = "POST" action = "{{ url ('insert-customer')}}" enctype="multipart/form-data">
                                        	@csrf
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Customer Name</label>
                                                <input type="text" name = "name" class="form-control" id="exampleInputEmail1" placeholder="Enter name"required>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" name ="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email"required>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Phone No</label>
                                                <input type="tel" name = "phone" class="form-control" id="exampleInputEmail1" placeholder="Enter phone"required>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">NID Number</label>
                                                <input type="text" name = "nid_no" class="form-control" id="exampleInputEmail1" placeholder="Enter NID Number"required>
                                            </div>

                                             <div class="form-group">
                                                <label for="exampleInputEmail1">Account No </label>
                                                <input type="text" name = "account_no" class="form-control" id="exampleInputEmail1" placeholder="Bank Account No"required>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Address</label>
                                                <input type="text" name = "address" class="form-control" id="exampleInputEmail1" placeholder="Enter Address"required>
                                            </div>       
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Current City</label>
                                                <input type="text" name= "city" class="form-control" id="exampleInputPassword1" placeholder="Current City"required>
                                            </div>
                                              <div class="form-group">
                                              	<img id = "image" src="#"/>
                                                <label for="exampleInputPassword1">Your Photo</label>
                                                <input type="file" name= "photo" accept ="image/*" class ="upload" required onchange="readURL(this)" id="exampleInputPassword1" >
                                            </div>
                                            <div class="form-group">
                                                <div class="checkbox checkbox-primary">
                                                    <input id="checkbox1" type="checkbox">
                                                    <label for="checkbox1">
                                                        Remember me
                                                    </label>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                        </form>
                                    </div>
                                </div> 
                            </div>  
                      </div>
                   </div>
              </div>