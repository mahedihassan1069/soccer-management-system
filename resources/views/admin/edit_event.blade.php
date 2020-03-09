@extends('admin_layout')
@section('admin_content')
<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">Add Tournaments</a>
				</li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Tournaments</h2>
						
					</div>
					<p class="alert-success">

							<?php
							$message=Session::get('message');
							if ($message){

											echo $message;
											Session::put('message',null);
								
									}

							?>
							
							
						</p>
					<div class="box-content">
						<form class="form-horizontal" action="{{url ('/save-event')}}" method="post">
							{{ csrf_field() }}
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Clube Name </label>
							 <input type="text" class="input-xlarg" name="clube_name" required="">
							</div>
							<div class="control-group">
							  <label class="control-label" for="fileInput">Clube Pic</label>
							  <div class="controls">
								<input class="input-file uniform_on" name="clube_pic" type="file"required="">
							  </div>
							</div> 
							<div class="control-group">
							  <label class="control-label" for="date01">Post Date</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="post_date"required="">
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Tournaments Title </label>
							 <input type="text" class="input-xlarg" name="tournaments_title"required="">
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Tournaments Code </label>
							 <input type="text" class="input-xlarg" name="tournaments_code"required="">
							</div>
							<div class="control-group">
							  <label class="control-label" for="date01">Match start Date</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="match_start_date"required="">
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Motto line </label>
							 <input type="text" class="input-xlarg" name="motto_line"required="">
							</div>

							        
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Description</label>
							  <div class="controls">
								<textarea class="cleditor" name="description" rows="3"required=""></textarea>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="fileInput">post pic</label>
							  <div class="controls">
								<input class="input-file uniform_on" name="post_pic" type="file"required="">
							  </div>
							</div>  
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">update Tournaments</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->






@endsection