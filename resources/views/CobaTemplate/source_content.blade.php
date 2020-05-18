{{-- INPUT --}}
                    {{-- Input Text --}}
                    <div class="form-group row">
                        <label for="nama_guru" class="col-md-4 col-form-label text-md-right">Nama</label>
                        <div class="col-md-6">
                            <input name="nama_guru" id="nama_guru" type="text" class="form-control">
                        </div>
                    </div>
                    {{-- Input Select option --}}
                    <div class="form-group row">
                        <label for="status_kelayakan" class="col-md-4 col-form-label text-md-right">Status Kelayakan</label>
                        <div class="col-md-6">
                            <select id="status_kelayakan" type="semester" name="status_kelayakan" class="form-control" required="required" data-validation-required-message="Silahkan pilih status kelayakan inventaris.">
                                <option disabled selected> --Pilih-- </option>
                                {{--nilainya 1--}}
                                <option value="1">Layak</option>
                                <option value="0">Rusak</option>
                            </select>
                        </div>
                    </div>
                    {{-- Input tanggal --}}
                    <div class="form-group row">
                        <label for="tgl_lahir" class="col-md-4 col-form-label text-md-right">Tanggal Lahir</label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" placeholder="dd/mm/yyyy" format=dd/mm/yyyy>
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>

{{-- TABLE --}}

                    {{-- TABEL HASIL PENCARIAN --}}
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title text-center">TABEL {TAHUN AJARAN {2019/2020} SEMESTER {GANJIL}}</h5>
                                    <h5 class="card-title text-center">{HASIL PENCARIAN}</h5>
                                                <div class="table" >
                                        <table id="searchTable" class="table table-bordered table-responsive">
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

{{-- PROFILE --}}
<li class="nav-item nav-profile">
    <a href="#" class="nav-link">
        <div class="nav-profile-image">
            <img src="assets/images/faces/face1.jpg" alt="profile">
            <span class="login-status online"></span>
            <!--change to offline or busy as needed-->
        </div>
        <div class="nav-profile-text d-flex flex-column">
            <span class="font-weight-bold mb-2">David Grey. H</span>
            <span class="text-secondary text-small">Project Manager</span>
        </div>
        <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
    </a>
</li>

{{-- ############################################################################################################# --}}
{{-- FROM INDEX --}}
{{-- ############################################################################################################# --}}


                    {{-- CONTENT 1 --}}
                    {{-- CARD REPORT 3 COLUMN --}}
                    <div class="row">
                        <div class="col-md-4 stretch-card grid-margin">
                            <div class="card bg-gradient-danger card-img-holder text-white">
                                <div class="card-body">
                                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                                    <h4 class="font-weight-normal mb-3">Weekly Sales <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                                    </h4>
                                    <h2 class="mb-5">$ 15,0000</h2>
                                    <h6 class="card-text">Increased by 60%</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 stretch-card grid-margin">
                            <div class="card bg-gradient-info card-img-holder text-white">
                                <div class="card-body">
                                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                                    <h4 class="font-weight-normal mb-3">Weekly Orders <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                                    </h4>
                                    <h2 class="mb-5">45,6334</h2>
                                    <h6 class="card-text">Decreased by 10%</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 stretch-card grid-margin">
                            <div class="card bg-gradient-success card-img-holder text-white">
                                <div class="card-body">
                                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                                    <h4 class="font-weight-normal mb-3">Visitors Online <i class="mdi mdi-diamond mdi-24px float-right"></i>
                                    </h4>
                                    <h2 class="mb-5">95,5741</h2>
                                    <h6 class="card-text">Increased by 5%</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- CONTENT 2 --}}
                    {{-- CHART REPORT 2 COLUMN --}}
                    <div class="row">

                    	{{-- HISTOGRAM --}}
                        <div class="col-md-7 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="clearfix">
                                        <h4 class="card-title float-left">Visit And Sales Statistics</h4>
                                        <div id="visit-sale-chart-legend" class="rounded-legend legend-horizontal legend-top-right float-right"></div>
                                    </div>
                                    <canvas id="visit-sale-chart" class="mt-4"></canvas>
                                </div>
                            </div>
                        </div>

						{{-- CIRCLE --}}
                        <div class="col-md-5 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Traffic Sources</h4>
                                    <canvas id="traffic-chart"></canvas>
                                    <div id="traffic-chart-legend" class="rounded-legend legend-vertical legend-bottom-left pt-4"></div>
                                </div>
                            </div>
                        </div>


                    </div>

                    {{-- CONTENT 3 --}}
                    {{-- TABLE RECENT ACTIVITY --}}
                    <div class="row">
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Recent Tickets</h4>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th> Assignee </th>
                                                    <th> Subject </th>
                                                    <th> Status </th>
                                                    <th> Last Update </th>
                                                    <th> Tracking ID </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><img src="assets/images/faces/face1.jpg" class="mr-2" alt="image"> David Grey </td>
                                                    <td> Fund is not recieved </td>
                                                    <td><label class="badge badge-gradient-success">DONE</label></td>
                                                    <td> Dec 5, 2017 </td>
                                                    <td> WD-12345 </td>
                                                </tr>

                                                <tr>
                                                    <td><img src="assets/images/faces/face2.jpg" class="mr-2" alt="image"> Stella Johnson </td>
                                                    <td> High loading time </td>
                                                    <td><label class="badge badge-gradient-warning">PROGRESS</label></td>
                                                    <td> Dec 12, 2017 </td>
                                                    <td> WD-12346 </td>
                                                </tr>

                                                <tr>
                                                    <td><img src="assets/images/faces/face3.jpg" class="mr-2" alt="image"> Marina Michel </td>
                                                    <td> Website down for one week </td>
                                                    <td><label class="badge badge-gradient-info">ON HOLD</label></td>
                                                    <td> Dec 16, 2017 </td>
                                                    <td> WD-12347 </td>
                                                </tr>

                                                <tr>
                                                    <td><img src="assets/images/faces/face4.jpg" class="mr-2" alt="image"> John Doe </td>
                                                    <td> Loosing control on server </td>
                                                    <td>
                                                        <label class="badge badge-gradient-danger">REJECTED</label>
                                                    </td>
                                                    <td> Dec 3, 2017 </td>
                                                    <td> WD-12348 </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- CONTENT 4 --}}
                    {{-- RECENT UPDATE IMAGE --}}
                    <div class="row">
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Recent Updates</h4>
                                    <div class="d-flex">
                                        <div class="d-flex align-items-center mr-4 text-muted font-weight-light">
                                            <i class="mdi mdi-account-outline icon-sm mr-2"></i>
                                            <span>jack Menqu</span>
                                        </div>
                                        <div class="d-flex align-items-center text-muted font-weight-light">
                                            <i class="mdi mdi-clock icon-sm mr-2"></i>
                                            <span>October 3rd, 2018</span>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-6 pr-1">
                                            <img src="assets/images/dashboard/img_1.jpg" class="mb-2 mw-100 w-100 rounded" alt="image">
                                            <img src="assets/images/dashboard/img_4.jpg" class="mw-100 w-100 rounded" alt="image">
                                        </div>
                                        <div class="col-6 pl-1">
                                            <img src="assets/images/dashboard/img_2.jpg" class="mb-2 mw-100 w-100 rounded" alt="image">
                                            <img src="assets/images/dashboard/img_3.jpg" class="mw-100 w-100 rounded" alt="image">
                                        </div>
                                    </div>
                                    <div class="d-flex mt-5 align-items-top">
                                        <img src="assets/images/faces/face3.jpg" class="img-sm rounded-circle mr-3" alt="image">
                                        <div class="mb-0 flex-grow">
                                            <h5 class="mr-2 mb-2">School Website - Authentication Module.</h5>
                                            <p class="mb-0 font-weight-light">It is a long established fact that a reader will be distracted by the readable content of a page.</p>
                                        </div>
                                        <div class="ml-auto">
                                            <i class="mdi mdi-heart-outline text-muted"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- CONTENT 5 --}}
                    {{-- PROJECT STATUS 2 COLUMN--}}
                    <div class="row">

                    	{{-- STATUS BAR --}}
                        <div class="col-md-7 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Project Status</h4>
                                    <div class="table-responsive">
                                        <table class="table">

                                            <thead>
                                                <tr>
                                                    <th> # </th>
                                                    <th> Name </th>
                                                    <th> Due Date </th>
                                                    <th> Progress </th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td> 1 </td>
                                                    <td> Herman Beck </td>
                                                    <td> May 15, 2015 </td>
                                                    <td>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-gradient-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td> 2 </td>
                                                    <td> Messsy Adam </td>
                                                    <td> Jul 01, 2015 </td>
                                                    <td>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-gradient-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td> 3 </td>
                                                    <td> John Richards </td>
                                                    <td> Apr 12, 2015 </td>
                                                    <td>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-gradient-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td> 4 </td>
                                                    <td> Peter Meggik </td>
                                                    <td> May 15, 2015 </td>
                                                    <td>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-gradient-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td> 5 </td>
                                                    <td> Edward </td>
                                                    <td> May 03, 2015 </td>
                                                    <td>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-gradient-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td> 5 </td>
                                                    <td> Ronald </td>
                                                    <td> Jun 05, 2015 </td>
                                                    <td>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-gradient-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- CHECKLIST BOX --}}
                        <div class="col-md-5 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title text-white">Todo</h4>
                                    <div class="add-items d-flex">
                                        <input type="text" class="form-control todo-list-input" placeholder="What do you need to do today?">
                                        <button class="add btn btn-gradient-primary font-weight-bold todo-list-add-btn" id="add-task">Add</button>
                                    </div>
                                    <div class="list-wrapper">
                                        <ul class="d-flex flex-column-reverse todo-list todo-list-custom">
                                            <li>
                                                <div class="form-check">
                                                    <label class="form-check-label"><input class="checkbox" type="checkbox"> Meeting with Alisa </label>
                                                </div>
                                                <i class="remove mdi mdi-close-circle-outline"></i>
                                            </li>
                                            <li class="completed">
                                                <div class="form-check">
                                                    <label class="form-check-label"><input class="checkbox" type="checkbox" checked> Call John </label>
                                                </div>
                                                <i class="remove mdi mdi-close-circle-outline"></i>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <label class="form-check-label"><input class="checkbox" type="checkbox"> Create invoice </label>
                                                </div>
                                                <i class="remove mdi mdi-close-circle-outline"></i>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <label class="form-check-label"><input class="checkbox" type="checkbox"> Print Statements </label>
                                                </div>
                                                <i class="remove mdi mdi-close-circle-outline"></i>
                                            </li>
                                            <li class="completed">
                                                <div class="form-check">
                                                    <label class="form-check-label"><input class="checkbox" type="checkbox" checked> Prepare for presentation </label>
                                                </div>
                                                <i class="remove mdi mdi-close-circle-outline"></i>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <label class="form-check-label"><input class="checkbox" type="checkbox"> Pick up kids from school</label>
                                                </div>
                                                <i class="remove mdi mdi-close-circle-outline"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




{{-- ############################################################################################################# --}}
{{-- BASIC TABLE --}}
{{-- ############################################################################################################# --}}

					<div class="row">

						{{-- BASIC TABLE --}}
						<div class="col-lg-6 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<h4 class="card-title">Basic Table</h4>
									<p class="card-description"> Add class <code>.table</code>
									</p>
									<table class="table">
										<thead>
											<tr>
												<th>Profile</th>
												<th>VatNo.</th>
												<th>Created</th>
												<th>Status</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Jacob</td>
												<td>53275531</td>
												<td>12 May 2017</td>
												<td><label class="badge badge-danger">Pending</label></td>
											</tr>
											<tr>
												<td>Messsy</td>
												<td>53275532</td>
												<td>15 May 2017</td>
												<td><label class="badge badge-warning">In progress</label></td>
											</tr>
											<tr>
												<td>John</td>
												<td>53275533</td>
												<td>14 May 2017</td>
												<td><label class="badge badge-info">Fixed</label></td>
											</tr>
											<tr>
												<td>Peter</td>
												<td>53275534</td>
												<td>16 May 2017</td>
												<td><label class="badge badge-success">Completed</label></td>
											</tr>
											<tr>
												<td>Dave</td>
												<td>53275535</td>
												<td>20 May 2017</td>
												<td><label class="badge badge-warning">In progress</label></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>


						{{-- HOVARABLE TABLE --}}
						<div class="col-lg-6 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<h4 class="card-title">Hoverable Table</h4>
									<p class="card-description"> Add class <code>.table-hover</code>
									</p>
									<table class="table table-hover">
										<thead>
											<tr>
												<th>User</th>
												<th>Product</th>
												<th>Sale</th>
												<th>Status</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Jacob</td>
												<td>Photoshop</td>
												<td class="text-danger"> 28.76% <i class="mdi mdi-arrow-down"></i></td>
												<td><label class="badge badge-danger">Pending</label></td>
											</tr>
											<tr>
												<td>Messsy</td>
												<td>Flash</td>
												<td class="text-danger"> 21.06% <i class="mdi mdi-arrow-down"></i></td>
												<td><label class="badge badge-warning">In progress</label></td>
											</tr>
											<tr>
												<td>John</td>
												<td>Premier</td>
												<td class="text-danger"> 35.00% <i class="mdi mdi-arrow-down"></i></td>
												<td><label class="badge badge-info">Fixed</label></td>
											</tr>
											<tr>
												<td>Peter</td>
												<td>After effects</td>
												<td class="text-success"> 82.00% <i class="mdi mdi-arrow-up"></i></td>
												<td><label class="badge badge-success">Completed</label></td>
											</tr>
											<tr>
												<td>Dave</td>
												<td>53275535</td>
												<td class="text-success"> 98.05% <i class="mdi mdi-arrow-up"></i></td>
												<td><label class="badge badge-warning">In progress</label></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>


						{{-- STRIPED TABLE --}}
						<div class="col-lg-12 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<h4 class="card-title">Striped Table</h4>
									<p class="card-description"> Add class <code>.table-striped</code>
									</p>
									<table class="table table-striped">
										<thead>
											<tr>
												<th> User </th>
												<th> First name </th>
												<th> Progress </th>
												<th> Amount </th>
												<th> Deadline </th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="py-1">
													<img src="../../assets/images/faces-clipart/pic-1.png" alt="image" />
												</td>
												<td> Herman Beck </td>
												<td>
													<div class="progress">
														<div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
												</td>
												<td> $ 77.99 </td>
												<td> May 15, 2015 </td>
											</tr>
											<tr>
												<td class="py-1">
													<img src="../../assets/images/faces-clipart/pic-2.png" alt="image" />
												</td>
												<td> Messsy Adam </td>
												<td>
													<div class="progress">
														<div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
												</td>
												<td> $245.30 </td>
												<td> July 1, 2015 </td>
											</tr>
											<tr>
												<td class="py-1">
													<img src="../../assets/images/faces-clipart/pic-3.png" alt="image" />
												</td>
												<td> John Richards </td>
												<td>
													<div class="progress">
														<div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
												</td>
												<td> $138.00 </td>
												<td> Apr 12, 2015 </td>
											</tr>
											<tr>
												<td class="py-1">
													<img src="../../assets/images/faces-clipart/pic-4.png" alt="image" />
												</td>
												<td> Peter Meggik </td>
												<td>
													<div class="progress">
														<div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
												</td>
												<td> $ 77.99 </td>
												<td> May 15, 2015 </td>
											</tr>
											<tr>
												<td class="py-1">
													<img src="../../assets/images/faces-clipart/pic-1.png" alt="image" />
												</td>
												<td> Edward </td>
												<td>
													<div class="progress">
														<div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
												</td>
												<td> $ 160.25 </td>
												<td> May 03, 2015 </td>
											</tr>
											<tr>
												<td class="py-1">
													<img src="../../assets/images/faces-clipart/pic-2.png" alt="image" />
												</td>
												<td> John Doe </td>
												<td>
													<div class="progress">
														<div class="progress-bar bg-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
												</td>
												<td> $ 123.21 </td>
												<td> April 05, 2015 </td>
											</tr>
											<tr>
												<td class="py-1">
													<img src="../../assets/images/faces-clipart/pic-3.png" alt="image" />
												</td>
												<td> Henry Tom </td>
												<td>
													<div class="progress">
														<div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
												</td>
												<td> $ 150.00 </td>
												<td> June 16, 2015 </td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>


						{{-- BORDERED TABLE --}}
						<div class="col-lg-12 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<h4 class="card-title">Bordered table</h4>
									<p class="card-description"> Add class <code>.table-bordered</code>
									</p>
									<table class="table table-bordered">
										<thead>
											<tr>
												<th> # </th>
												<th> First name </th>
												<th> Progress </th>
												<th> Amount </th>
												<th> Deadline </th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td> 1 </td>
												<td> Herman Beck </td>
												<td>
													<div class="progress">
														<div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
												</td>
												<td> $ 77.99 </td>
												<td> May 15, 2015 </td>
											</tr>
											<tr>
												<td> 2 </td>
												<td> Messsy Adam </td>
												<td>
													<div class="progress">
														<div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
												</td>
												<td> $245.30 </td>
												<td> July 1, 2015 </td>
											</tr>
											<tr>
												<td> 3 </td>
												<td> John Richards </td>
												<td>
													<div class="progress">
														<div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
												</td>
												<td> $138.00 </td>
												<td> Apr 12, 2015 </td>
											</tr>
											<tr>
												<td> 4 </td>
												<td> Peter Meggik </td>
												<td>
													<div class="progress">
														<div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
												</td>
												<td> $ 77.99 </td>
												<td> May 15, 2015 </td>
											</tr>
											<tr>
												<td> 5 </td>
												<td> Edward </td>
												<td>
													<div class="progress">
														<div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
												</td>
												<td> $ 160.25 </td>
												<td> May 03, 2015 </td>
											</tr>
											<tr>
												<td> 6 </td>
												<td> John Doe </td>
												<td>
													<div class="progress">
														<div class="progress-bar bg-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
												</td>
												<td> $ 123.21 </td>
												<td> April 05, 2015 </td>
											</tr>
											<tr>
												<td> 7 </td>
												<td> Henry Tom </td>
												<td>
													<div class="progress">
														<div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
												</td>
												<td> $ 150.00 </td>
												<td> June 16, 2015 </td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>


						{{-- INVERSE TABLE --}}
						<div class="col-lg-12 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<h4 class="card-title">Inverse table</h4>
									<p class="card-description"> Add class <code>.table-dark</code>
									</p>
									<table class="table table-dark">
										<thead>
											<tr>
												<th> # </th>
												<th> First name </th>
												<th> Amount </th>
												<th> Deadline </th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td> 1 </td>
												<td> Herman Beck </td>
												<td> $ 77.99 </td>
												<td> May 15, 2015 </td>
											</tr>
											<tr>
												<td> 2 </td>
												<td> Messsy Adam </td>
												<td> $245.30 </td>
												<td> July 1, 2015 </td>
											</tr>
											<tr>
												<td> 3 </td>
												<td> John Richards </td>
												<td> $138.00 </td>
												<td> Apr 12, 2015 </td>
											</tr>
											<tr>
												<td> 4 </td>
												<td> Peter Meggik </td>
												<td> $ 77.99 </td>
												<td> May 15, 2015 </td>
											</tr>
											<tr>
												<td> 5 </td>
												<td> Edward </td>
												<td> $ 160.25 </td>
												<td> May 03, 2015 </td>
											</tr>
											<tr>
												<td> 6 </td>
												<td> John Doe </td>
												<td> $ 123.21 </td>
												<td> April 05, 2015 </td>
											</tr>
											<tr>
												<td> 7 </td>
												<td> Henry Tom </td>
												<td> $ 150.00 </td>
												<td> June 16, 2015 </td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>


						{{-- TABLE WITH CONTEXTUAL CLASSES --}}
						<div class="col-lg-12 stretch-card">
							<div class="card">
								<div class="card-body">
									<h4 class="card-title">Table with contextual classes</h4>
									<p class="card-description"> Add class <code>.table-{color}</code>
									</p>
									<table class="table table-bordered">
										<thead>
											<tr>
												<th> # </th>
												<th> First name </th>
												<th> Product </th>
												<th> Amount </th>
												<th> Deadline </th>
											</tr>
										</thead>
										<tbody>
											<tr class="table-info">
												<td> 1 </td>
												<td> Herman Beck </td>
												<td> Photoshop </td>
												<td> $ 77.99 </td>
												<td> May 15, 2015 </td>
											</tr>
											<tr class="table-warning">
												<td> 2 </td>
												<td> Messsy Adam </td>
												<td> Flash </td>
												<td> $245.30 </td>
												<td> July 1, 2015 </td>
											</tr>
											<tr class="table-danger">
												<td> 3 </td>
												<td> John Richards </td>
												<td> Premeire </td>
												<td> $138.00 </td>
												<td> Apr 12, 2015 </td>
											</tr>
											<tr class="table-success">
												<td> 4 </td>
												<td> Peter Meggik </td>
												<td> After effects </td>
												<td> $ 77.99 </td>
												<td> May 15, 2015 </td>
											</tr>
											<tr class="table-primary">
												<td> 5 </td>
												<td> Edward </td>
												<td> Illustrator </td>
												<td> $ 160.25 </td>
												<td> May 03, 2015 </td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>

					</div>
