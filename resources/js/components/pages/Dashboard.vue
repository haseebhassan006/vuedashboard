<template>
<div>
    <div>
        <div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0 text-primary">Dashboard</h4>
							</div>

		</div>
    </div>
    <div class="row">
							<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
								<div class="card overflow-hidden dash1-card border-0 bg-primary-transparent">
									<div class="card-body">
										<div class="row">
											<div class="col-md-6 col-sm-6 col-6">
												<div class="">
													<span class="fs-14 font-weight-normal">Total Sales</span>
													<h2 class="mb-2 number-font carn1 font-weight-bold text-primary">3,257</h2>
													<span class=""><i class="fe fe-arrow-up-circle text-primary"></i> 76% <span class="ms-1 fs-11">Growth This Month</span>
												</span></div>
											</div>
											<div class="col-md-6 col-sm-6 col-6 my-auto mx-auto">
												<div class="mx-auto text-right">
													<div id="spark1"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
								<div class="card overflow-hidden dash1-card border-0 bg-success-transparent">
									<div class="card-body">
										<div class="row">
											<div class="col-md-6 col-sm-6 col-6">
												<div class="">
													<span class="fs-14">Total Stats</span>
													<h2 class="mb-2 mt-1 number-font carn2 font-weight-bold  text-success">1,678</h2>
													<span class=""><i class="fe fe-arrow-down-circle text-success"></i> 15% <span class="ms-1 fs-11">Loss This Month</span>
												</span></div>
											</div>
											<div class="col-md-6 col-sm-6 col-6 my-auto mx-auto">
												<div class="mx-auto text-right">
													<div id="spark2"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
								<div class="card overflow-hidden dash1-card border-0 bg-warning-transparent">
									<div class="card-body">
										<div class="row">
											<div class="col-md-6 col-sm-6 col-6">
												<div class="">
													<span class="fs-14">Total Income</span>
													<h2 class="mb-2 mt-1 number-font carn2 font-weight-bold  text-warning">$2,590</h2>
													<span class=""><i class="fe fe-arrow-up-circle text-warning"></i> 62% <span class="ms-1 fs-11">From Last Month</span>
												</span></div>
											</div>
											<div class="col-md-6 col-sm-6 col-6 my-auto mx-auto">
												<div class="mx-auto text-right">
													<div id="spark3"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
								<div class="card overflow-hidden dash1-card border-0 bg-danger-transparent">
									<div class="card-body">
										<div class="row">
											<div class="col-md-6 col-sm-6 col-6">
												<div class="text-justify">
													<span>Total Tax</span>
													<h2 class="mb-2 mt-1 number-font carn2 font-weight-bold text-danger">$1,954</h2>
													<span class=""><i class="fe fe-arrow-up-circle text-danger"></i> 53% <span class="ms-1 fs-11">From Last Month</span>
												</span></div>
											</div>
											<div class="col-md-6 col-sm-6 col-6 my-auto mx-auto">
												<div class="mx-auto text-right">
													<div id="spark4"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Invoice Summary</h3>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-bordered card-table table-vcenter text-nowrap" id="datatable">
												<thead>
													<tr>
														<th>Invoice ID</th>
														<th scope="row">Customer Name</th>
														<th>Customer ID</th>
														<th>Date</th>
														<th>Order Value</th>
														<th>Status</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<a class="font-weight-normal1" href="">002584611</a>
														</td>
														<td>Joan Powell</td>
														<td>JoanPowell@gmail.com</td>
														<td>08/3/2021</td>
														<td>$450,870</td>
														<td>
															<span class="badge bg-success-light border-success fs-11">Paid</span>
														</td>
													</tr>
													<tr>
														<td>
															<a class="font-weight-normal1" href="">004641215</a>
														</td>
														<td>Gavin Gibson</td>
														<td>JoanPowell@gmail.com</td>
														<td>08/3/2021</td>
														<td>$230,540</td>
														<td>
															<span class="badge bg-danger-light border-danger fs-11">Failed</span>
														</td>
													</tr>
													<tr>
														<td>
															<a class="font-weight-normal1" href="">004655445</a>
														</td>
														<td>Julian Kerr</td>
														<td>JoanPowell@gmail.com</td>
														<td>08/3/2021</td>
														<td>$55,300</td>
														<td>
															<span class="badge bg-success-light border-success fs-11">Paid</span>
														</td>
													</tr>
													<tr>
														<td>
															<a class="font-weight-normal1" href="">004343455</a>
														</td>
														<td>Cedric Kelly</td>
														<td>JoanPowell@gmail.com</td>
														<td>08/3/2021</td>
														<td>$234,100</td>
														<td>
															<span class="badge bg-success-light border-success fs-11">Paid</span>
														</td>
													</tr>
													<tr>
														<td>
															<a class="font-weight-normal1" href="">004651234</a>
														</td>
														<td>Junior Sam</td>
														<td>JoanPowell@gmail.com</td>
														<td>08/3/2021</td>
														<td>$43,198</td>
														<td>
															<span class="badge bg-success-light border-success fs-11">Paid</span>
														</td>
													</tr>
													<tr>
														<td>
															<a class="font-weight-normal1" href="">00434567</a>
														</td>
														<td>Gabriel</td>
														<td>JoanPowell@gmail.com</td>
														<td>08/3/2021</td>
														<td>$230,540</td>
														<td>
															<span class="badge bg-warning-light border-warning fs-11">Pending</span>
														</td>
													</tr>
													<tr>
														<td>
															<a class="font-weight-normal1" href="">004345623</a>
														</td>
														<td>Zach efron</td>
														<td>JoanPowell@gmail.com</td>
														<td>08/3/2021</td>
														<td>$55,300</td>
														<td>
															<span class="badge bg-success-light border-success fs-11">Paid</span>
														</td>
													</tr>
													<tr>
														<td>
															<a class="font-weight-normal1" href="">004345234</a>
														</td>
														<td>Mona matty</td>
														<td>JoanPowell@gmail.com</td>
														<td>08/3/2021</td>
														<td>$234,100</td>
														<td>
															<span class="badge bg-success-light border-success fs-11">Paid</span>
														</td>
													</tr>
													<tr>
														<td>
															<a class="font-weight-normal1" href="">004567455</a>
														</td>
														<td>Samantha May</td>
														<td>JoanPowell@gmail.com</td>
														<td>08/3/2021</td>
														<td>$43,198</td>
														<td>
															<span class="badge bg-warning-light border-warning fs-11">Pending</span>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
</div>
</template>
<script>

    export default {


        mounted() {
            console.log('Component mounted.')
        }
    }

</script>
