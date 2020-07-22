@extends('templates.default_layout')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metalusa</title>
</head>
<body>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Home</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Add Products</h1>
			</div>
        </div><!--/.row-->
		<form role="form" action="{{url('Products')}}" method="post">
         		@csrf
								<div class="form-group">
									<label for='cat_name'>Category Name</label>
                                    <Select name="category_id" id="" class="forme-control"
                                    class="@error('unit_price') is-danger @enderror">
                                    <option value="">Select Category</option>
                                    @foreach($categories as $category)
                                    
                                       
                                    
                                    </Select>
									
								</div>

								<button type="submit" class="btn btn-primary">
								<span class="glyphicon glyphicon-save"> </span>
						
								Enregistre</button>
									
</form>
</body>
</html>


@endsection