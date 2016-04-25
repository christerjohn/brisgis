@extends('layouts.app')


@section('main-content')
  <section class="content-header">
  	<div class="col-md-8 col-md-offset-2">
          <h3>
            Disasters
          </h3> 
    </div>     
        </section>
        <!-- Main content -->
   <section class="content">
       <div class="row">
           <div class="col-md-8 col-md-offset-2">
            <div class="box">
                <div class="box-header">
                	<div class="col-xs-3">   
                          <h3 class="box-title">Information</h3>
                   </div>
             
                </div>
                    <div class="box-body">
                    	 <div class="col-md-12 form-group row">
				              <div class="col-md-4  col-md-offset-1">
				              <label for="TypeInput">Type of Disaster</label>
				              	<div class="input-group">
				              		 <span class="input-group-addon"><i class="fa fa-bolt"></i></span>                       	  	
				  					 <input type="text" class="form-control" id="type" placeholder="Ex.Flood">
				  				</div>
				              </div>
				              <div class="col-md-4 col-md-offset-1">
				              <label for="TypeInput">Date</label>   			              
				             	 <div class="input-group">
                              	  	 <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
				  					 <input type="date" class="form-control" id="date">
                     			  </div> 
				              </div>
				         </div>            
                         <div class="col-md-12 form-group row">
                              <div class="col-md-7 col-md-offset-2">
                              	<label></label>   
                                 <div class="input-group">
	                			   	   <span class="input-group-addon"><i class="fa fa-search"></i></span>
	                				   <input type="email" class="form-control" placeholder="Name">
                 				 </div>                     
                              </div> 
                         </div>
                         <div class="col-md-12 form-group row">
                            <div class="col-md-2 col-md-offset-4"> 
                                <label></label>
                             	<a href="#" class="btn btn-primary btn-sm btn-block">ADD</a>
                         	</div>   
                         </div>
                    </div>
                </div>
         	 </div>  
        </div>
   </section>

	<section class="content">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="box">
                <div class="box-header">
                	<div class="col-md-4">   
                          <h3 class="box-title">Affected Households</h3>
                   </div>                    
                </div>
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-striped">
                     <thead>
                       <tr>
                       	  <th>Name</th>
                          <th>Disaster Type</th>
                          <th><center>Date</center></th>
                          <th><center>Cancel</center></th>
                      
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>christer</td>
                        <td>Flood</td>
                        <td><center>01/01/2016</center></td>
                        <td>
                            <center>
                              <a href="#" data-toggle="modal" data-target="#cancel-disaster" >
                                <span class="glyphicon glyphicon-remove text-danger" aria-hidden="true"></span>
                              </a>
                            </center>
                        </td>  
                      </tr> 

                     @include('pages.disasters.cancel_modal')                             
                    </tbody>
                    <tfoot>
                      <tr>
                          <th>Name</th>
                          <th>Disaster Type</th>
                          <th><center>Date</center></th>
                          <th><center>Cancel</center></th>
                      </tr>
                   </tfoot>
                  </table>
                </div><!-- /.box-body -->
                <div class="box-body">
                  <div class="form-group row">
                      <div class="col-md-2 col-md-offset-10">
                           <a href="#" class="btn btn-primary btn-sm btn-block">
                           Submit
                          </a>
                      </div>
                  </div>
                </div>
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
       </section>
@endsection

@section('page-script')
    <!-- DataTables -->
    <script src="{{ asset('/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
    <!-- page script -->
    <script>
      $(function () {
        $('#example2').DataTable({
          "paging": false,
          "lengthChange": false,
          "searching": false,
          "ordering": false,
          "info": false,
          "autoWidth": true
        });
      });
    </script>
@endsection