<?php $__env->startSection('master'); ?>
<?php $__env->startSection('title','Trang quản trị'); ?>
				
<div class="container">
	<div class="side-app">
		<div class="page-header">
			<h4 class="page-title">Dashboard</h4>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Dashboard 02</li>
			</ol>
		</div>

		<div class="row row-cards">
        
			<div class="col-sm-12 col-md-6 col-lg-3">
				<div class="card overflow-hidden">
					<div class="card-status bg-purple br-tr-3 br-tl-3"></div>
					<div class="card-body row">
						<div class="col">
							<div class="text-muted">Visitors online</div>
							<div class="h3 m-0 text-primary counter font-30"><b>897</b></div>
						</div>
						<div class="col-auto align-self-center ">
							<div class="card-value float-right text-purple">
								<div class="icon icon-shape bg-gradient-primary rounded-circle text-white">
									<i class="fas fa-users text-white"></i>
								</div>
							</div>
						</div>
					</div>
					<div class="chart-wrapper px-0">
						<canvas id="widgetChart1"></canvas>
					</div>
				</div>
			</div>
            
			<div class="col-sm-12 col-md-6 col-lg-3">
				<div class="card overflow-hidden">
					<div class="card-status bg-teal br-tr-3 br-tl-3"></div>
					<div class="card-body">
						<div class="row">
							<div class="col">
								<div class="text-muted">Total Sales</div>
								<div class="h3 m-0  text-teal counter font-30"><b>125</b></div>
							</div>
							<div class="col-auto align-self-center">
								<div class="card-value float-right text-purple">
									<div class="icon icon-shape bg-gradient-teal rounded-circle text-white">
										<i class="fas fa-cart-plus text-white"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
                    <div class="chart-wrapper px-0">
                        <canvas id="widgetChart2"></canvas>
                    </div>
				</div>
			</div>
            
			<div class="col-sm-12 col-md-6 col-lg-3">
				<div class="card overflow-hidden">
					<div class="card-status bg-yellow br-tr-3 br-tl-3"></div>
					<div class="card-body ">
						<div class="row">
							<div class="col">
								<div class="text-muted">Total Projects</div>
								<div class="h3 m-0 text-orange counter font-30"><b>2056</b></div>
							</div>
							<div class="col-auto align-self-center">
								<div class="card-value float-right text-purple">
									<div class="icon icon-shape bg-gradient-orange rounded-circle text-white">
										<i class="fas fa-edit text-white"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
                    <div class="chart-wrapper px-3">
                        <canvas id="widgetChart4"></canvas>
                    </div>
				</div>
			</div>
            
			<div class="col-sm-12 col-md-6 col-lg-3">
				<div class="card overflow-hidden">
					<div class="card-status bg-blue br-tr-3 br-tl-3"></div>
					<div class="card-body">
						<div class="row">
							<div class="col">
								<div class="text-muted">Today Income</div>
								<div class="h3 m-0  text-blue counter font-30">5,67,00</div>
							</div>
							<div class="col-auto align-self-center">
								<div class="icon icon-shape bg-gradient-blue rounded-circle text-white">
									<i class="fas fa-dollar-sign text-white"></i>
								</div>
							</div>
						</div>
					</div>
                    <div class="chart-wrapper px-0">
                        <canvas id="widgetChart3"></canvas>
                    </div>
				</div>
			</div>
		</div>
		
        <div class="row">
			<div class="col-lg-6">
				<div class="card ">
					<div class="card-body">
						<canvas id="lineChart"></canvas>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="card" >
					<div class="card-header">
						<h3 class="card-title">World</h3>
					</div>
					<div class="Vector-map-js">
						<div id="vmap" class="vmap" style="height: 265px;"></div>
					</div>
				</div>
			</div>
        </div>
        
		<div class="row">
			<div class="col-sm-6 col-lg-3">
				<div class="card p-3">
					<div class="d-flex align-items-center">
						<span class="stamp stamp-md bg-gradient-primary mr-3 rounded-circle ">
							<i class="fas fa-users text-white"></i>
						</span>
						<div>
							<h4 class="m-0"><a href="javascript:void(0)"><strong>765</strong> <small>Customers</small></a></h4>
							<small class="text-muted">13 new customers </small>
						</div>
					</div>
					<div class="progress progress-sm mt-3">
						<div class="progress-bar bg-gradient-primary" style="width: 37%"></div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-lg-3">
				<div class="card p-3">
					<div class="d-flex align-items-center">
						<span class="stamp stamp-md bg-gradient-orange mr-3 rounded-circle">
							<i class="fas fa-cart-arrow-down"></i>
						</span>
						<div>
							<h4 class="m-0"><a href="javascript:void(0)"><strong>92</strong> <small>Selling</small></a></h4>
							<small class="text-muted">67 deliverd</small>
						</div>
					</div>
					<div class="progress progress-sm mt-3">
						<div class="progress-bar bg-gradient-orange" style="width: 37%"></div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-lg-3">
				<div class="card p-3">
					<div class="d-flex align-items-center">
						<span class="stamp stamp-md bg-gradient-blue mr-3 rounded-circle">
							<i class="fas fa-eye"></i>
						</span>
						<div>
							<h4 class="m-0"><a href="javascript:void(0)"><strong>2,456 </strong><small>Visitors</small></a></h4>
							<small class="text-muted">281 sign in</small>
						</div>
					</div>
					<div class="progress progress-sm mt-3">
						<div class="progress-bar bg-gradient-blue" style="width: 37%"></div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-lg-3">
				<div class="card p-3">
					<div class="d-flex align-items-center">
						<span class="stamp stamp-md bg-gradient-teal mr-3 rounded-circle">
							<i class="fas fa-file-alt"></i>
						</span>
						<div>
							<h4 class="m-0"><a href="javascript:void(0)"><strong>125 </strong><small>FeedBack</small></a></h4>
							<small class="text-muted">32 Pending</small>
						</div>
					</div>
					<div class="progress progress-sm mt-3">
						<div class="progress-bar bg-gradient-teal" style="width: 37%"></div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-12">
				<div class="card">
					<div class="card-status bg-success br-tr-3 br-tl-3"></div>
					<div class="card-header">
						<h3 class="card-title">Facebook Source </h3>
					</div>
					<div class="card-body">
						<div class="current-progress">
							<div class="progress-content">
								<div class="row">
									<div class="col-lg-4 mt-2">
										<div class="progress-text">Page Profile</div>
									</div>
									<div class="col-lg-8">
										<div class="current-progressbar">
											<div class="progress progress-md">
												<div class="progress-bar bg-gradient-teal" style="width: 25%">25%</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="progress-content">
								<div class="row">
									<div class="col-lg-4 mt-2">
										<div class="progress-text">Favorite</div>
									</div>
									<div class="col-lg-8">
										<div class="current-progressbar">
											<div class="progress progress-md">
												<div class="progress-bar bg-gradient-indigo" style="width: 47%">47%</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="progress-content">
								<div class="row">
									<div class="col-lg-4 mt-2">
										<div class="progress-text">Like Story</div>
									</div>
									<div class="col-lg-8">
										<div class="current-progressbar">
											<div class="progress progress-md">
												<div class="progress-bar bg-gradient-orange" style="width: 55%"> 55%</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="progress-content">
								<div class="row">
									<div class="col-lg-4 mt-2">
										<div class="progress-text">Mobile</div>
									</div>
									<div class="col-lg-8">
										<div class="current-progressbar">
											<div class="progress progress-md">
												<div class="progress-bar bg-gradient-info" style="width: 67%">67%</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="progress-content">
								<div class="row">
									<div class="col-lg-4 mt-2">
										<div class="progress-text">Videos</div>
									</div>
									<div class="col-lg-8">
										<div class="current-progressbar">
											<div class="progress progress-md">
												<div class="progress-bar bg-gradient-dark" style="width: 33%">33%</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="progress-content">
								<div class="row">
									<div class="col-lg-4 mt-2">
										<div class="progress-text">Photos</div>
									</div>
									<div class="col-lg-8">
										<div class="current-progressbar">
											<div class="progress progress-md">
												<div class="progress-bar bg-gradient-danger" style="width: 78%">78%</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="progress-content">
								<div class="row">
									<div class="col-lg-4 mt-2">
										<div class="progress-text">Games</div>
									</div>
									<div class="col-lg-8">
										<div class="current-progressbar">
											<div class="progress progress-md">
												<div class="progress-bar bg-gradient-teal" style="width: 98%">98%</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="progress-content">
								<div class="row">
									<div class="col-lg-4 mt-2">
										<div class="progress-text">Shares</div>
									</div>
									<div class="col-lg-8">
										<div class="current-progressbar">
											<div class="progress progress-md">
												<div class="progress-bar bg-gradient-primary" style="width: 55%">55%</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-12">
				<div class="card">
					<div class="card-status bg-purple br-tr-3 br-tl-3"></div>
					<div class="card-header">
						<h3 class="card-title">Templates List</h3>
					</div>
					<div class="table-responsive">
						<table class="table card-table table-vcenter text-nowrap">
							<tbody>
								<tr>
									<td class="no-border">Wordpress</td>
									<td class="no-border text-right"><span class="btn btn-primary btn-sm">$55</span></td>
								</tr>
								<tr>
									<td>Web Themes</td>
									<td class="text-right"><span class="btn btn-success btn-sm">$12</span></td>
								</tr>
								<tr>
									<td>Html & css</td>
									<td class="text-right"><span class="btn btn-warning btn-sm">$40</span></td>
								</tr>
								<tr>
									<td>Designing</td>
									<td class="text-right"><span class="btn btn-teal btn-sm">$50</span></td>
								</tr>
								<tr>
									<td>PSD templates</td>
									<td class="text-right"><span class="btn btn-info btn-sm">$35</span></td>
								</tr>
								<tr>
									<td>eCommerce</td>
									<td class="text-right"><span class="btn btn-danger btn-sm">$45</span></td>
								</tr>
								<tr>
									<td>CMS Themes</td>
									<td class="text-right"><span class="btn btn-success btn-sm">$35</span></td>
								</tr>
								<tr>
									<td>CMS Themes</td>
									<td class="text-right"><span class="btn btn-pink btn-sm">$35</span></td>
								</tr>

							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div class="row row-cards row-deck">
			<div class="col-lg-6 col-sm-12">
				<div class="card card-aside">
					<div class="card-body d-flex flex-column">
						<h4><a href="#"> sunt in culpa qui officia.</a></h4>
						<div class="text-muted">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum...</div>
						<div class="d-flex align-items-center pt-5 mt-auto">
							<div class="avatar brround avatar-md mr-3" style="background-image: url(assets/images/faces/female/18.jpg)"></div>
							<div>
								<a href="profile.html" class="text-default">Charlene Rico</a>
								<small class="d-block text-muted">1 hour ago</small>
							</div>
							<div class="ml-auto text-muted">
								<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-thumbs-up mr-1"></i></a>
							</div>
							<div class="ml-auto text-muted">
								<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-message-square mr-1"></i></a>
							</div>
							<div class="ml-auto text-muted">
								<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-share-2 mr-1"></i></a>
							</div>
						</div>
					</div>
					<a href="#" class="card-aside-column" style="background-image: url(assets/images/photos/1.jpg)"></a>
				</div>
			</div>
			<div class="col-lg-6 col-sm-12">
				<div class="card card-aside">
					<a href="#" class="card-aside-column" style="background-image: url(assets/images/photos/2.jpg)"></a>
					<div class="card-body d-flex flex-column">
						<h4><a href="#">web page editors now use.</a></h4>
						<div class="text-muted"> Many desktop publishing packages and web page editors now use  default model text, and a search for will uncover....</div>
						<div class="d-flex align-items-center pt-5 mt-auto">
							<div class="avatar brround avatar-md mr-3" style="background-image: url(assets/images/faces/male/16.jpg)"></div>
							<div>
								<a href="profile.html" class="text-default">Thanh Hershey</a>
								<small class="d-block text-muted">2 days ago</small>
							</div>
							<div class="ml-auto text-muted">
								<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-thumbs-up mr-1"></i></a>
							</div>
							<div class="ml-auto text-muted">
								<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-message-square mr-1"></i></a>
							</div>
							<div class="ml-auto text-muted">
								<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-share-2 mr-1"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row mg-t-20">
			<div class="col-12 grid-margin">
				<div class="card">
					<div class="card-status bg-yellow br-tr-3 br-tl-3"></div>
					<div class="card-header">
						<h3 class="card-title ">Manage clients</h3>
					</div>
					<div class="card-body">
						<div class="fluid-container">
							<div class="row ticket-card  pb-2 border-bottom pb-3 mb-3">
								<div class="col-md-1"><img alt="profile image" class="img-sm rounded-circle mb-4 mb-md-0" src="assets/images/faces/female/26.jpg"></div>
								<div class="ticket-details col-md-9">
									<div class="d-flex">
										<p class="text-dark font-weight-bold mr-2 mb-0 no-wrap">Taryn Thomasson :</p>
										<p class="font-weight-medium mr-1 mb-0"></p>
										<p class="font-weight-semibold mb-0 ellipsis">Donec rutrum congue leo eget malesuada.</p>
									</div>
									<p class="text-gray mb-2">Donec rutrum congue leo eget malesuada. Quisque velit nisi, pretium ut lacinia in, elementum id enim vivamus.</p>
									<div class="row text-gray d-md-flex d-none">
										<div class="col-6 d-flex">
											<p class="mb-0 mr-2 text-muted">Last responded :</p>
											<p class="mr-2 mb-0 text-muted font-weight-light">3 hours ago</p>
										</div>
										<div class="col-6 d-flex">
											<p class="mb-0 mr-2 text-muted">Due in :</p>
											<p class="mr-2 mb-0 text-muted font-weight-light">2 Days</p>
										</div>
									</div>
								</div>
								<div class="ticket-actions col-md-2">
									<div class="btn btn-group dropdown">
										<button aria-expanded="false" aria-haspopup="true" class="btn btn-oblong btn-sm btn-secondary dropdown-toggle btn btn-sm" data-toggle="dropdown" type="button">Manage</button>
										<div class="dropdown-menu">
											<a class="dropdown-item" href="#"><i class="fas fa-reply fa-fw"></i>Quick reply</a>
											<a class="dropdown-item" href="#"><i class="fas fa-history fa-fw"></i>Another action</a>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item" href="#"><i class="fas fa-check text-success fa-fw"></i>Resolve Issue</a>
											<a class="dropdown-item" href="#"><i class="fas fa-times text-danger fa-fw"></i>Close Issue</a>
										</div>
									</div>
								</div>
							</div>
							<div class="row ticket-card mt-3 pb-2 border-bottom pb-3 mb-3">
								<div class="col-md-1"><img alt="profile image" class="img-sm rounded-circle mb-4 mb-md-0" src="assets/images/faces/male/16.jpg"></div>
								<div class="ticket-details col-md-9">
									<div class="d-flex">
										<p class="text-dark font-weight-bold mr-2 mb-0 no-wrap">Frederick Burda :</p>
										<p class="font-weight-medium mr-1 mb-0"></p>
										<p class="font-weight-semibold mb-0 ellipsis">Curabitur aliquet quam id dui posuere blandit.</p>
									</div>
									<p class="text-gray mb-2">Pellentesque in ipsum id orci porta dapibus. Sed porttitor lectus nibh. Curabitur non nulla sit amet nisl.</p>
									<div class="row text-gray d-md-flex d-none">
										<div class="col-6 d-flex">
											<p class="mb-0 mr-2 text-muted">Last responded :</p>
											<p class="mr-2 mb-0 text-muted font-weight-light">3 hours ago</p>
										</div>
										<div class="col-6 d-flex">
											<p class="mb-0 mr-2 text-muted">Due in :</p>
											<p class="mr-2 mb-0 text-muted font-weight-light">2 Days</p>
										</div>
									</div>
								</div>
								<div class="ticket-actions col-md-2">
									<div class="btn btn-group dropdown">
										<button aria-expanded="false" aria-haspopup="true" class="btn btn-oblong btn-sm btn-warning dropdown-toggle btn-sm" data-toggle="dropdown" type="button">Manage</button>
										<div class="dropdown-menu">
											<a class="dropdown-item" href="#"><i class="fas fa-reply fa-fw"></i>Quick reply</a>
											<a class="dropdown-item" href="#"><i class="fas fa-history fa-fw"></i>Another action</a>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item" href="#"><i class="fas fa-check text-success fa-fw"></i>Resolve Issue</a>
											<a class="dropdown-item" href="#"><i class="fas fa-times text-danger fa-fw"></i>Close Issue</a>
										</div>
									</div>
								</div>
							</div>
							<div class="row ticket-card mt-3">
								<div class="col-md-1"><img alt="profile image" class="img-sm rounded-circle mb-4 mb-md-0" src="assets/images/faces/female/20.jpg"></div>
								<div class="ticket-details col-md-9">
									<div class="d-flex">
										<p class="text-dark font-weight-bold mr-2 mb-0 no-wrap">Tegan Petway :</p>
										<p class="font-weight-medium mr-1 mb-0"></p>
										<p class="font-weight-semibold mb-0 ellipsis">Mauris blandit aliquet elit, eget tincidunt nibh pulvinar.</p>
									</div>
									<p class="text-gray mb-2">Nulla quis lorem ut libero malesuada feugiat. Proin eget tortor risus. Lorem ipsum dolor sit amet.</p>
									<div class="row text-gray d-md-flex d-none">
										<div class="col-6 d-flex">
											<p class="mb-0 mr-2 text-muted">Last responded :</p>
											<p class="mr-2 mb-0 text-muted font-weight-light">3 hours ago</p>
										</div>
										<div class="col-6 d-flex">
											<p class="mb-0 mr-2 text-muted">Due in :</p>
											<p class="mr-2 mb-0 text-muted font-weight-light">2 Days</p>
										</div>
									</div>
								</div>
								<div class="ticket-actions col-md-2">
									<div class="btn btn-group dropdown">
										<button aria-expanded="false" aria-haspopup="true" class="btn btn-oblong btn-danger btn-sm dropdown-toggle btn btn-sm" data-toggle="dropdown" type="button">Manage</button>
										<div class="dropdown-menu">
											<a class="dropdown-item" href="#"><i class="fas fa-reply fa-fw"></i>Quick reply</a>
											<a class="dropdown-item" href="#"><i class="fas fa-history fa-fw"></i>Another action</a>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item" href="#"><i class="fas fa-check text-success fa-fw"></i>Resolve Issue</a>
											<a class="dropdown-item" href="#"><i class="fas fa-times text-danger fa-fw"></i>Close Issue</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="card">
			<div class="card-status bg-teal br-tr-3 br-tl-3"></div>
			<div class="card-header">
				<h3 class="card-title">Basic Table</h3>
			</div>
			<div class="table-responsive">
				<table class="table card-table table-vcenter text-nowrap">
					<thead>
						<tr>
							<th> Project Name</th>
							<th>Phone Number</th>
							<th>Email</th>
							<th>Progress</th>
							<th>Status</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Hussain</td>
							<td>+92-333-5586757</td>
							<td>hussain@gmail.com</td>
							<td>
								<div class="progress progress-md">
									<div class="progress-bar progress-bar-striped progress-bar-animated bg-info w-25">25%</div>
								</div>
							</td>
							<td><span class="badge badge-pill badge-warning">Suspended</span></td>
						</tr>

						<tr>
							<td>Noman</td>
							<td>+92-333-5586757</td>
							<td>noman@gmail.com</td>
							<td>
								<div class="progress progress-md">
									<div class="progress-bar progress-bar-striped progress-bar-animated bg-pink w-50">50%</div>
								</div>
							</td>
							<td><span class="badge badge-pill badge-success">Due</span></td>
						</tr>

						<tr>
							<td>Ubaid</td>
							<td>+92-333-5586757</td>
							<td>ubaid@gmail.com</td>
							<td>
								<div class="progress progress-md">
									<div class="progress-bar progress-bar-striped progress-bar-animated bg-success w-75" >75%</div>
								</div>
							</td>
							<td><span class="badge badge-pill badge-warning">Suspended</span></td>
						</tr>

						<tr>
							<td>Adnan</td>
							<td>+92-333-5586757</td>
							<td>adnan@gmail.com</td>
							<td>
								<div class="progress progress-md">
									<div class="progress-bar progress-bar-striped progress-bar-animated bg-info w-50" >50%</div>
								</div>
							</td>
							<td><span class="badge badge-pill badge-warning">Suspended</span></td>
						</tr>

						<tr>
							<td>Saboor</td>
							<td>+92-333-5586757</td>
							<td>saboor@gmail.com</td>
							<td>
								<div class="progress progress-md">
									<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger w-100">100%</div>
								</div>
							</td>
							<td><span class="badge badge-pill badge-danger">Deleted</span></td>
						</tr>
					</tbody>
				</table>
			</div>
		 </div>
	</div>
</div>
				
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>