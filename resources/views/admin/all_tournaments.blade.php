@extends('admin_layout')
@section('admin_content')
		<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Tables</a></li>
			</ul>

			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
						
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>

							  <tr>

								  <th style="font-size: 80%">tournaments_id</th>
								  <th style="font-size: 80%" style="font-size: 80%">clubename</th>
								  <th style="font-size: 80%">clubepic</th>
								  <th style="font-size: 80%">postdate</th>
								  <th style="font-size: 80%">tournament title</th>
								  <th style="font-size: 80%">matchstartdate</th>
								  <th style="font-size: 80%">mottoline</th>
								  <th style="font-size: 80%">description</th>
								  <th style="font-size: 80%">postpic</th>
								  <th style="font-size: 80%">tournamentcode</th>
								  <th style="font-size: 80%">Action</th>
							  </tr>
						  </thead> 
						  @foreach($all_event_info as $v_tournaments)  
						  <tbody>
							<tr>
								<td>{{ $v_tournaments->tournaments_id }}</td>
								<td class="center">{{ $v_tournaments->clube_name }}</td>
								<td class="center">{{ $v_tournaments->clube_pic }}</td>
								<td class="center">{{ $v_tournaments->post_date }}</td>
								<td class="center">{{ $v_tournaments->tournaments_title }}</td>
								<td class="center">{{ $v_tournaments->match_start_date }}</td>
								<td class="center">{{ $v_tournaments->motto_line }}</td>
								<td class="center">{{ $v_tournaments->description }}</td>
								<td class="center">{{ $v_tournaments->post_pic }}</td>
								<td class="center">{{ $v_tournaments->tournaments_code }}</td>




								
								<td class="center">
									<a class="btn btn-success" href="#">
										<i class="halflings-icon white zoom-in"></i>  
									</a>
									<a class="btn btn-info" href="{{URL::to('/edit-event/'.$v_tournaments->tournaments_id)}}">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" href="#">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>
						

						  </tbody>
						  @endforeach
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->




@endsection
