
@extends('layouts.adminmaster')

							@section('content')

							<!--Page header-->
							<div class="page-header d-xl-flex d-block">
								<div class="page-leftheader">
									<h4 class="page-title"><span class="font-weight-normal text-muted ms-2">{{lang('Call Action')}}</span></h4>
								</div>
							</div>
							<!--End Page header-->

							<!--Call Action Section -->
							<div class="col-xl-12 col-lg-12 col-md-12">
								<div class="card ">
									<form method="POST" action="{{url('/admin/call-to-action')}}" enctype="multipart/form-data">
										@csrf

										@honeypot

										<div class="card-header border-0 d-sm-max-flex">
											<h4 class="card-title">{{lang('Call Action Section')}}</h4>
											<div class="card-options card-header-styles mt-sm-max-2">
												<small class="me-1 mt-1">{{lang('Show Section')}}</small>
												<div class="float-end mt-0">
													<div class="switch-toggle">
														<a class="onoffswitch2">
															<input type="checkbox"  name="callcheck" id="callchecks" class=" toggle-class onoffswitch2-checkbox" value="on" @if($callaction->callcheck == 'on')  checked=""  @endif>
															<label for="callchecks" class="toggle-class onoffswitch2-label" ></label>
														</a>
													</div>
												</div>
											</div>
										</div>
										<div class="card-body" >
											<input type="hidden" class="form-control" name="id" Value="{{$callaction->id}}">
											<div class="row">
												<div class="col-sm-12 col-md-12">
													<div class="form-group">
														<label class="form-label">{{lang('Title')}} <span class="text-red">*</span></label>
														<input type="text" class="form-control @error('title') is-invalid @enderror" name="title" Value="{{$callaction->title}}">
														@error('title')

															<span class="invalid-feedback" role="alert">
																<strong>{{ lang($message) }}</strong>
															</span>
														@enderror

													</div>
												</div>
												<div class="col-sm-12 col-md-12">
													<div class="form-group">
														<label class="form-label">{{lang('Subtitle')}}</label>
														<input type="text" class="form-control @error('subtitle') is-invalid @enderror" name="subtitle" Value="{{$callaction->subtitle}}" >
														@error('subtitle')

															<span class="invalid-feedback" role="alert">
																<strong>{{ lang($message) }}</strong>
															</span>
														@enderror

													</div>
												</div>
												<div class="col-sm-12 col-md-12">
													<div class="form-group">
														<label class="form-label">{{lang('Button-Text')}} <span class="text-red">*</span></label>
														<input type="text" class="form-control @error('buttonname') is-invalid @enderror" name="buttonname" Value="{{$callaction->buttonname}}">
														@error('buttonname')

															<span class="invalid-feedback" role="alert">
																<strong>{{ lang($message) }}</strong>
															</span>
														@enderror

													</div>
												</div>
												<div class="col-sm-12 col-md-12">
													<div class="form-group">
														<label class="form-label">{{lang('Button-Url')}} <span class="text-red">*</span></label>
														<input type="text" class="form-control @error('buttonurl') is-invalid @enderror" name="buttonurl" placeholder="{{lang('www.example.com')}}" Value="{{$callaction->buttonurl}}">
														@error('buttonurl')

															<span class="invalid-feedback" role="alert">
																<strong>{{ lang($message) }}</strong>
															</span>
														@enderror

													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group ">
														<div class="@error('image') is-invalid @enderror">
															<label class="form-label">{{lang('Upload Image')}}</label>
															<div class="input-group file-browser">
																<input class="form-control " name="image" type="file" >
															</div>
															<small class="text-muted"><i>{{lang('Filesize should not be morethan 10MB', 'filesetting')}}</i></small>
														</div>
														@error('image')

														<span class="invalid-feedback" role="alert">
															<strong>{{ lang($message) }}</strong>
														</span>
														@enderror

													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12 card-footer ">
											<div class="form-group float-end">
												<input type="submit" class="btn btn-secondary" value="{{lang('Save Changes')}}" onclick="this.disabled=true;this.form.submit();">
											</div>
										</div>
									</form>
								</div>
							</div>
							<!--End Call Action Section -->
							@endsection
