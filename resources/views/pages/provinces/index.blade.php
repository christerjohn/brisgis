@extends('layouts.app')

@section('main-content')
  <section class="content-header">
          <h1>
            Provinces
          </h1>
          
        </section>



        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                    <div class="col-xs-3">   
                      <h3 class="box-title">List of Provinces</h3>
                    </div>
                    <div class="col-xs-1">
                      <a data-toggle="modal" data-target="#add-province" style="float: right;" class="btn btn-primary">
                          <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> 
                          Add Province
                      </a>
                    </div>
                      
                   
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                     <thead>
                       <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th><center>Edit</center></th>
                          <th><center>Delete</center></th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Lanao del Norte</td>
                          <td>
                            <center>
                              <a href="#" data-toggle="modal" data-target="#" >
                                <span class="glyphicon glyphicon-edit text-info" aria-hidden="true"></span>
                              </a>
                            </center>
                          </td>
                        <td>
                            <center>
                              <a href="#" data-toggle="modal" data-target="#" >
                                <span class="glyphicon glyphicon-remove text-danger" aria-hidden="true"></span>
                              </a>
                            </center>
                        </td>
                      </tr>
                     
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th><center>Edit</center></th>
                        <th><center>Delete</center></th>
                      </tr>
                   </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
@endsection

@section('page-script')
    <!-- DataTables -->
    <script src="{{ asset('/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
    <!-- page script -->
    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>
@endsection