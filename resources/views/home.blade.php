@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="text-center">
    <form action="/search" method="post" class="form-inline first-form" id="form_search" role="form" files="true" enctype="multipart/form-data">
            {{ csrf_field() }}
                    <input type="text" name="search" id="search" class="form-control" placeholder="Type here..." title="Search for your product here">
                     <input type="submit" name="submit" id="submit" class="form-control btn btn-sm btn-primary" value="Send">           
        </form>
    </div>


<form action="/newregister" method="POST" class="form-horizontal first-form" role="form" files="true" enctype="multipart/form-data" style="display: none;">
    {{ csrf_field() }}
        <h4 class="text-center">Please signup to sell your product</h4>
            
                 <div class="form-group">
                    <label for="product_title" class="col-xs-3 col-sm-4 col-md-4 col-lg-4 control-label">Title <span class="asterisks">*</span></label>
                    <div class="col-xs-8 col-sm-5 col-md-4 col-lg-4">
                        <input type="text" name="product_title" id="product_title" class="form-control" required="required" placeholder="Name of product" required="true" minlength="1"  title="Enter name of the product you want to sell">
                    </div>
                </div>
                <div class="form-group">
                    <label for="phone" class="col-xs-3 col-sm-4 col-md-4 col-lg-4 control-label">Category <span class="asterisks">*</span></label>
                    <div class="col-xs-8 col-sm-5 col-md-4 col-lg-4">
                        <select name="category_id" id="category_id" class="form-control" title="Choose the category does the product falls in">
                                <option value="Product" required="true">Product</option>
                                <option value="Service" required="true">Service</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="image" class="col-xs-3 col-sm-4 col-md-4 col-lg-4 control-label">Cover Photo <span class="asterisks">*</span></label>
                    <div class="col-xs-8 col-sm-5 col-md-4 col-lg-4">
                    <!--    <input type="file" name="photo" id="photo" placeholder="Enter Title" class="btn btn-success"> --><span class="asterisks small">(cover photo)</span>
                        <input type="file" name="image" id="image" class="btn btn-warning btn-block" required="true" accept="image/*" onchange="validateFileType()">
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="price" class="col-xs-3 col-sm-4 col-md-4 col-lg-4 control-label">Description <span class="asterisks">*</span></label>
                    <div class="col-xs-8 col-sm-5 col-md-4 col-lg-4">
                        <textarea class="form-control" rows="2" columns="1" name="description" placeholder="Enter full description of product including accessories, functions, etc." title="Fully describe the product" required="true"></textarea>
                    </div>
                </div>
            
                <div class="form-group">
                    <label for="state" class="col-xs-3 col-sm-4 col-md-4 col-lg-4 control-label">State <span class="asterisks">*</span></label>
                    <div class="col-xs-8 col-sm-5 col-md-4 col-lg-4">
                        <select name="state" id="state" class="form-control" title="Enter State">
                            @foreach($states as $state)
                                <option value="{{$state}}" required="true">{{$state}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="city" class="col-xs-3 col-sm-4 col-md-4 col-lg-4 control-label">City <span class="asterisks">*</span></label>
                    <div class="col-xs-8 col-sm-5 col-md-4 col-lg-4">
                        <input type="text" name="city" id="city" class="form-control" required="required" placeholder="Enter City" required="true" title="Enter City">
                    </div>
                </div>
                <div class="form-group">
                    <label for="phone" class="col-xs-3 col-sm-4 col-md-4 col-lg-4 control-label">Phone <span class="asterisks">*</span></label>
                    <div class="col-xs-8 col-sm-5 col-md-4 col-lg-4">
                        <input type="text" name="phone" id="phone" class="form-control" required="required" placeholder="Phone Number" required="true" title="Enter contact phone number">
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-xs-3 col-sm-4 col-md-4 col-lg-4 control-label">Name <span class="asterisks">*</span></label>
                    <div class="col-xs-8 col-sm-5 col-md-4 col-lg-4">
                        <input type="text" name="name" id="name" class="form-control" required="required" placeholder="Full Name" required="true" title="Enter Full name">
                    </div>
                </div>
                 <div class="form-group">
                    <div class="col-xs-12 col-sm-8 col-md-7 col-lg-4 col-sm-offset-4">
                        <button type="submit" class="btn btn-primary btn-block btn-sm">
                            Submit
                        </button>
                    </div>
                </div>
    </form>


@endsection
