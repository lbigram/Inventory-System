<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Chart 1 - Requests over a period of time</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->

    <ul class="breadcrumb">
      <li><?php echo anchor('/main/index', 'IVS'); ?></li>
      <li><?php echo anchor('/charts/chart1', 'Charts'); ?></li>
      <li class="active">Chart 1</li>
    </ul>

    <div class="jumbotron" style="padding-left: 20px;">
       <?php 
         if (isset($msg) && strlen($msg) > 0) { //display the message
          if ($msgType == 'error') {
           echo '<div class="alert alert-danger">';
          }
          elseif ($msgType == 'success') {
           echo '<div class="alert alert-success">';
          }
          else {
           echo '<div class="alert">';
          }
          echo $msg.'</div>';
         }
    
    ?>


    <div class="panel panel-default">
        <div class="panel-heading">
            <strong> Chart 1 - Requests over a period of time </strong>
        </div>
        <div class="panel-body">
             <div class="form-group">
             <label for="sdate">Start Date</label>
             <input type="text" class="form-control" id="sdate" name="sdate" value="" placeholder="Start Date" required="required"/>
            </div>

            <div class="form-group">
             <label for="edate">End Date</label>
             <input type="text" class="form-control" id="edate" name="edate" value="" placeholder="End Date" required="required"/>
            </div>

            <button type="submit" class="btn btn-success" id="chart1button"><?php echo $btnLabel; ?></button>
            <!--</form>-->
        </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <strong> Bar chart showing - Requests over a period of time </strong>
      </div>
      <!-- /.panel-heading -->
      <div class="panel-body">
          <div id="chart"></div>
      </div>
      <!-- /.panel-body -->
    </div>
    <!-- /.panel -->
	
	<link href="//cdn.datatables.net/1.10.5/css/jquery.dataTables.min.css" rel="stylesheet">

	<script src="//cdn.datatables.net/1.10.5/js/jquery.dataTables.min.js"></script>

    <script>
	
	


        $(function() {
	
          $('#chart1button').click(function() {
            // clear chart area
            $( "#chart" ).empty();

            // get chart data
            var request =  $.ajax({
				type: "POST",
				url: "chart1data",
				data: {sdate:$('#sdate').val(), edate:$('#edate').val()},
				dataType: 'json'
            });

            request.done(function( msg ) {
              // build chart
             // populateChart1(msg);
			 
			 var dataSet = msg;

 
			$('#chart').html( '<table cellpadding="0" cellspacing="0" border="0" class="display" id="example"></table>' );
		 
			$('#example').dataTable( {"ajax": dataSet,"columns": [{ "data": "requestid" },{ "data": "staffid" },
					{ "data": "requestorname" },
					{ "data": "inventoryid" },
					{ "data": "reasonforrequest" },
					{ "data": "quantityrequested" },
					{ "data": "status" },
					{ "data": "comments" },
					{ "data": "quantityapproved" },
					{ "data": "datereceived" },
					{ "data": "datedisbursed" },
					{ "data": "dateneeded" },
					{ "data": "priority" },
					{ "data": "unitid" },
					{ "data": "code" },
					{ "data": "staffemail" }
					
				]
			} ); 
			
			
            });
            request.fail(function( jqXHR, textStatus){
              alert( "Error loading data: " + text
               );
            });

          });
           
        });

        /* Build bar chart */
        function populateChart1(d) {
		
			var dataSet = d;

			$('#chart').html( '<table cellpadding="0" cellspacing="0" border="0" class="display" id="example"></table>' );
		 
			$('#example').dataTable( {
				"ajax": dataSet,
				"columns": [
					{ "data": "requestid" },
					{ "data": "staffid" },
					{ "data": "requestorname" },
					{ "data": "inventoryid" },
					{ "data": "reasonforrequest" },
					{ "data": "quantityrequested" },
					{ "data": "status" },
					{ "data": "comments" },
					{ "data": "quantityapproved" },
					{ "data": "datereceived" },
					{ "data": "datedisbursed" },
					{ "data": "dateneeded" },
					{ "data": "priority" },
					{ "data": "unitid" },
					{ "data": "code" },
					{ "data": "staffemail" }
					
				]
			} );  


        }
    </script>

    <script>
        $( document ).ready(function() {
            $( "#sdate" ).datepicker({ dateFormat: 'yy-mm-dd' });
            $( "#edate" ).datepicker({ dateFormat: 'yy-mm-dd' });
        });
    </script>

    </div>
    <!-- /.jumbotron-->
	


</div>
<!-- /#page-wrapper -->





