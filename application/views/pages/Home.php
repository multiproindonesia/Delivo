	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dashboard</h1>
			</div>
		</div><!--/.row-->

		<div id="inputnew" class="panel panel-container">
			<div class="row">
				<div class="col-xs-6 col-md-6 col-lg-6 no-padding">
					<div class="panel panel-teal panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-shopping-cart color-blue"></em>
							<div class="large">120</div>
							<div class="text-muted">Today <u>D.O</u> Issued</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-6 col-lg-6 no-padding">
					<div class="panel panel-blue panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-comments color-orange"></em>
							<div class="large">52</div>
							<div class="text-muted">Yesterday <u>D.O</u> Issued</div>
						</div>
					</div>
				</div>				
			</div><!--/.row-->
		</div>
		
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 no-padding">
					<center><button onclick="show()"  class="btn btn-lg btn-primary">Create New D.O</button></center>
				</div>		
			</div>
			<br>
		<div class="panel panel-container" id="createnew">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<center><div class="large">Input New Delivery Order</center>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12">
					<form action="#">
					<div class="form-group">
				    	<label for="date">Date</label>
				    	<input type="text" name="date" id="date" class="form-control datepicker">
				  </div>
				  <div class="form-group">
				    <label for="customername">Customer Name</label>
				    <select class="form-control select" id="customer">
				    	<option>1</option>
				    	<option>2</option>
				    	<option>3</option>
				    </select>

				    <small id="emailHelp" class="form-text text-muted">Choose Customer Name or Input Manually</small>
				  </div>
				  <div class="form-group">
				    <label for="building">Building</label>
				    <input type="text" name="building" id="building" class="form-control">
				  </div>
				  <div class="form-group">
				    <label for="address">Address</label>
				    <textarea class="form-control" id="address"></textarea>
				  </div>
				  <div class="form-group">
				    <label for="city">City</label>
				    <input type="text" name="city" id="city" class="form-control">
				  </div>
				  <div class="form-group">
				    <label for="cp">Contact Person</label>
				    <input type="text" name="cp" id="cp" class="form-control">
				  </div>
				  <div class="form-group">
				    <label for="telephone">Telephone</label>
				    <input type="text" name="telephone" id="telephone" class="form-control">
				  </div>
				  
				  <button type="submit" onclick="save()" class="btn btn-primary">Submit</button>
</form>
				</div>
			</div>
		</div>
		
		
		
		
		<div class="row">					
			<div class="col-sm-12">
				<p class="back-link">Delivo by <a href="https://multipro.id">Multipro</a></p>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	
