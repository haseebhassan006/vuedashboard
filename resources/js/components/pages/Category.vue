<template>
<div>
  <div>
        <div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0 text-primary">Category</h4>
							</div>
                            <div class="page-rightheader">
                                 

  <vs-button @click="popupActivo4=true" color="danger" type="border">Open fullscreen popup</vs-button>


                            </div>

		</div>
    </div>
    	<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Basic Table</h3>
									</div>
									<div class="table-responsive">
										<table class="table card-table table-vcenter text-nowrap">
											<thead>
												<tr>
													<th>ID</th>
													<th>Name</th>
													<th>Position</th>
													<th>Salary</th>
                                                    <th>Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<th scope="row">1</th>
													<td>Joan Powell</td>
													<td>Associate Developer</td>
													<td>$450,870</td>
                                                    <td><a class="btn btn-secondary"><i class="fa fa-pencil-square-o"></i></a></td>
												</tr>
												<tr>
													<th scope="row">2</th>
													<td>Gavin Gibson</td>
													<td>Account manager</td>
													<td>$230,540</td>
                                                        <td><a class="btn btn-secondary"><i class="fa fa-pencil-square-o"></i></a></td>
												</tr>
												<tr>
													<th scope="row">3</th>
													<td>Julian Kerr</td>
													<td>Senior Javascript Developer</td>
													<td>$55,300</td>
                                                        <td><a class="btn btn-secondary"><i class="fa fa-pencil-square-o"></i></a></td>
												</tr>
												<tr>
													<th scope="row">4</th>
													<td>Cedric Kelly</td>
													<td>Accountant</td>
													<td>$234,100</td>
                                                    <td><a class="btn btn-secondary"><i class="fa fa-pencil-square-o"></i></a></td>
												</tr>
												<tr>
													<th scope="row">5</th>
													<td>Samantha May</td>
													<td>Junior Technical Author</td>
													<td>$43,198</td>
                                                        <td><a class="btn btn-secondary"><i class="fa fa-pencil-square-o"></i></a></td>
												</tr>
											</tbody>
										</table>
									</div>
									<!-- table-responsive -->
								</div>

							</div>
						</div>



</div>
</template>
<script>

   export default {
         data(){

    return {
      popupActivo4:false
    }
  },


    }

</script>
