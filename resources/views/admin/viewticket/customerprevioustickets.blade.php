@extends('layouts.adminmaster')

@section('styles')

<!-- INTERNAL Data table css -->
<link href="{{asset('assets/plugins/datatable/css/dataTables.bootstrap5.min.css')}}?v=<?php echo time(); ?>" rel="stylesheet" />
<link href="{{asset('assets/plugins/datatable/responsive.bootstrap5.css')}}?v=<?php echo time(); ?>" rel="stylesheet" />

<!-- INTERNAL Sweet-Alert css -->
<link href="{{asset('assets/plugins/sweet-alert/sweetalert.css')}}?v=<?php echo time(); ?>" rel="stylesheet" />
<style>

</style>
@endsection

@section('content')

<!--Page header-->
<div class="page-header d-xl-flex d-block px-3">
    <div class="page-leftheader">
        <h4 class="page-title"><span class="font-weight-normal text-muted ms-2">{{lang('Previous Tickets', 'menu')}}</span></h4>
    </div>
</div>
<!--End Page header-->
<div class="row">
    <div class="col-xl-3 col-lg-3 col-md-3">
        <div class="card user-pro-list overflow-hidden">
            <div class="card-body">
                <div class="user-pic text-center">
                    @if ($users->image == null)

                    <img src="{{asset('uploads/profile/user-profile.png')}}" class="avatar avatar-xxl brround" alt="">

                    @else
                    <img src="{{asset('uploads/profile/'.$users->image)}}" class="avatar avatar-xxl brround" alt="">

                    @endif
                    <div class="pro-user mt-3">
                        <h5 class="pro-user-username text-dark mb-1 fs-16">{{$users->username}}</h5>
                        <h6 class="pro-user-desc text-muted fs-12">{{$users->email}}</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header border-0">
                <h4 class="card-title"> {{lang('Personal Details')}}</h4>
            </div>
            <div class="card-body px-0 pb-0">

                <div class="table-responsive tr-lastchild">
                    <table class="table mb-0 table-information">
                        <tbody>
                            <tr>
                                <td class="py-2">
                                    <span class="font-weight-semibold w-50"> {{lang('Name')}} </span>
                                </td>
                                <td class="py-2 ps-4">{{$users->username}}</td>
                            </tr>
                            <tr>
                                <td class="py-2">
                                    <span class="font-weight-semibold w-50"> {{lang('Email')}} </span>
                                </td>
                                <td class="py-2 ps-4">{{$users->email}}</td>
                            </tr>
                            <tr>
                                <td class="py-2">
                                    <span class="font-weight-semibold w-50"> {{lang('Customer Type')}} </span>
                                </td>
                                <td class="py-2 ps-4">{{$users->userType}}</td>
                            </tr>
                            <tr>
                                <td class="py-2">
                                    <span class="font-weight-semibold w-50"> {{lang('Login Type')}} </span>
                                </td>
                                <td class="py-2 ps-4">{{$users->logintype}}</td>
                            </tr>
                            <tr>
                                <td class="py-2">
                                    <span class="font-weight-semibold w-50"> {{lang('Status')}} </span>
                                </td>
                                <td class="py-2 ps-4">{{$users->status}}</td>
                            </tr>
                            <tr>
                                <td class="py-2">
                                    <span class="font-weight-semibold w-50"> {{lang('Phone Number')}} </span>
                                </td>
                                <td class="py-2 ps-4">{{$users->phone}}</td>
                            </tr>
                            <tr>
                                <td class="py-2">
                                    <span class="font-weight-semibold w-50"> {{lang('Login IP')}} </span>
                                </td>
                                <td class="py-2 ps-4">{{$users->last_login_ip}}</td>
                            </tr>
                            <tr>
                                <td class="py-2">
                                    <span class="font-weight-semibold w-50"> {{lang('Customer Country')}} </span>
                                </td>
                                <td class="py-2 ps-4">{{$users->country}}</td>
                            </tr>
                            <tr>
                                <td class="py-2">
                                    <span class="font-weight-semibold w-50"> {{lang('Customer Timezone')}} </span>
                                </td>
                                <td class="py-2 ps-4">{{$users->timezone}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    <div class="col-xl-9 px-3">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-12">
                <div class="card">
                    <span>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-7">
                                    <div class="mt-0 text-start">
                                        <span class="fs-16 font-weight-semibold">{{lang('Total Tickets',
                                            'menu')}}</span>
                                        <h3 class="mb-0 mt-1 text-primary fs-25">{{$total->count()}}</h3>
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="icon1 bg-primary-transparent my-auto float-end"> <i
                                            class="las la-ticket-alt"></i> </div>
                                </div>
                            </div>
                        </div>
                    </span>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-12">
                <div class="card">
                    <span>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-7">
                                    <div class="mt-0 text-start">
                                        <span class="fs-16 font-weight-semibold">{{lang('Active Tickets',
                                            'menu')}}</span>
                                        <h3 class="mb-0 mt-1 text-success fs-25">

                                            {{$active->count()}}

                                        </h3>
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="icon1 bg-success-transparent my-auto float-end"> <i
                                            class="ri-ticket-2-line"></i> </div>
                                </div>
                            </div>
                        </div>
                    </span>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-12">
                <div class="card">
                    <span>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-7">
                                    <div class="mt-0 text-start">
                                        <span class="fs-16 font-weight-semibold">{{lang('On-Hold Tickets',
                                            'menu')}}</span>
                                        <h3 class="mb-0 mt-1 text-secondary fs-25">{{$onhold->count()}}</h3>
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="icon1 bg-warning-transparent my-auto  float-end"> <i
                                            class="ri-coupon-2-line"></i> </div>
                                </div>
                            </div>
                        </div>
                    </span>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-12">
                <div class="card">
                    <span>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-7">
                                    <div class="mt-0 text-start">
                                        <span class="fs-16 font-weight-semibold">{{lang('Closed Tickets',
                                            'menu')}}</span>
                                        <h3 class="mb-0 mt-1 text-secondary fs-25">{{$closed->count()}}</h3>
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="icon1 bg-danger-transparent my-auto  float-end"> <i
                                            class="ri-coupon-2-line"></i> </div>
                                </div>
                            </div>
                        </div>
                    </span>
                </div>
            </div>

        </div>
        <div >
            <div class="card ">
                <div class="card-header border-0">
                    <h4 class="card-title">{{lang('Previous Tickets Of Customer', 'menu')}}</h4>
                </div>
                <div class="card-body" >
                    <div class="spruko-delete">
                        @can('Ticket Delete')

                        <button id="massdelete" class="btn btn-outline-light btn-sm mb-4 data-table-btn"><i class="fe fe-trash"></i> {{lang('Delete')}}</button>
                        @endcan
                        <div class="table-responsive">
                            <table class="table table-bordered border-bottom text-nowrap ticketdeleterow" id="admindashboard">
                                <thead>
                                    <tr >
                                        <th class="wpx-40 text-center">{{lang('Sl.No')}}</th>
                                        @can('Ticket Delete')

                                        <th class="wpx-40 text-center">
                                            <input type="checkbox"  id="customCheckAll">
                                            <label  for="customCheckAll"></label>
                                        </th>
                                        @endcan
                                        @cannot('Ticket Delete')

                                        <th class="wpx-40 text-center">
                                            <input type="checkbox"  id="customCheckAll" disabled>
                                            <label  for="customCheckAll"></label>
                                        </th>
                                        @endcannot

                                        <th >{{lang('Ticket Details')}}</th>
                                        <th>{{lang('User')}}</th>
                                        <th>{{lang('Status')}}</th>
                                        <th >{{lang('Assign To')}}</th>
                                        <th >{{lang('Actions')}}</th>

                                    </tr>
                                </thead>
                                <tbody id="refresh">
                                    @php $i = 1 @endphp
                                    @foreach ($custsimillarticket as $tickets)

                                    <tr {{$tickets->replystatus == 'Replied'? 'class=bg-success-transparent': ''}}>
                                        <td class="wpx-40 text-center">
                                            {{$i++}}
                                        </td>
                                        <td class="wpx-40 text-center">
                                            @if(Auth::user()->can('Ticket Delete'))
                                                <input type="checkbox" name="student_checkbox[]" class="checkall" value="{{$tickets->id}}" />
                                            @else
                                                <input type="checkbox" name="student_checkbox[]" class="checkall" value="{{$tickets->id}}" disabled />
                                            @endif
                                        </td>
                                        <td class="overflow-hidden ticket-details">
                                            <div class="d-flex align-items-center">
                                                <div class="">
                                                    @if($tickets->ticketnote->isEmpty())
                                                        @if($tickets->overduestatus != null)

                                                        <div class="ribbon ribbon-top-right1 text-danger">
                                                            <span class="bg-danger text-white">{{$tickets->overduestatus}}</span>
                                                        </div>

                                                        @endif
                                                    @else

                                                        <div class="ribbon ribbon-top-right text-warning">
                                                            <span class="bg-warning text-white">{{lang('Note')}}</span>
                                                        </div>

                                                        @if($tickets->overduestatus != null)
                                                        <div class="ribbon ribbon-top-right1 text-danger">
                                                            <span class="bg-danger text-white">{{$tickets->overduestatus}}</span>
                                                        </div>
                                                        @endif

                                                    @endif

                                                    <a href="{{url('admin/ticket-view/' . $tickets->ticket_id)}}" class="fs-14 d-block font-weight-semibold">{{$tickets->subject}}</a>

                                                    <ul class="fs-13 font-weight-normal d-flex custom-ul">
                                                        <li class="pe-2 text-muted">#{{$tickets->ticket_id}}</span>
                                                        <li class="px-2 text-muted" data-bs-toggle="tooltip" data-bs-placement="top" title="{{lang('Date')}}"><i class="fe fe-calendar me-1 fs-14"></i> {{$tickets->created_at->timezone(Auth::user()->timezone)->format(setting('date_format'))}}</li>

                                                        @if($tickets->priority != null)
                                                            @if($tickets->priority == "Low")
                                                                <li class="ps-5 pe-2 preference preference-low" data-bs-toggle="tooltip" data-bs-placement="top" title="{{lang('Priority')}}">{{lang($tickets->priority)}}</li>

                                                            @elseif($tickets->priority == "High")
                                                                <li class="ps-5 pe-2 preference preference-high" data-bs-toggle="tooltip" data-bs-placement="top" title="{{lang('Priority')}}">{{lang($tickets->priority)}}</li>

                                                            @elseif($tickets->priority == "Critical")
                                                                <li class="ps-5 pe-2 preference preference-critical" data-bs-toggle="tooltip" data-bs-placement="top" title="{{lang('Priority')}}">{{lang($tickets->priority)}}</li>

                                                            @else
                                                                <li class="ps-5 pe-2 preference preference-medium" data-bs-toggle="tooltip" data-bs-placement="top" title="{{lang('Priority')}}">{{lang($tickets->priority)}}</li>
                                                            @endif
                                                        @else
                                                            ~
                                                        @endif

                                                        @if($tickets->category_id != null)
                                                            @if($tickets->category != null)

                                                            <li class="px-2 text-muted" data-bs-toggle="tooltip" data-bs-placement="top" title="{{lang('Category')}}"><i class="fe fe-grid me-1 fs-14" ></i>{{Str::limit($tickets->category->name, '40')}}</li>

                                                            @else

                                                            ~
                                                            @endif
                                                        @else

                                                            ~
                                                        @endif

                                                        @if($tickets->last_reply == null)
                                                            <li class="px-2 text-muted" data-bs-toggle="tooltip" data-bs-placement="top" title="{{lang('Last Replied')}}"><i class="fe fe-clock me-1 fs-14"></i>{{$tickets->created_at->diffForHumans()}}</li>

                                                        @else
                                                        <li class="px-2 text-muted" data-bs-toggle="tooltip" data-bs-placement="top" title="{{lang('Last Replied')}}"><i class="fe fe-clock me-1 fs-14"></i>{{$tickets->last_reply->diffForHumans()}}</li>

                                                        @endif

                                                        @if($tickets->purchasecodesupport != null)
                                                        @if($tickets->purchasecodesupport == 'Supported')

                                                        <li class="px-2 text-success font-weight-semibold">{{lang('Support Active')}}</li>
                                                        @if($tickets->purchasecodesupport == 'Expired')

                                                        <li class="px-2 text-danger-dark font-weight-semibold">{{lang('Support Expired')}}</li>
                                                        @endif
                                                        @endif
                                                        @endif

                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            {{$tickets->cust->username}}
                                        </td>
                                        <td>
                                            @if($tickets->status == "New")

                                            <span class="badge badge-burnt-orange">{{lang($tickets->status)}}</span>

                                            @elseif($tickets->status == "Re-Open")

                                            <span class="badge badge-teal">{{lang($tickets->status)}}</span>

                                            @elseif($tickets->status == "Inprogress")

                                            <span class="badge badge-info">{{lang($tickets->status)}}</span>

                                            @elseif($tickets->status == "On-Hold")

                                            <span class="badge badge-warning">{{lang($tickets->status)}}</span>

                                            @else

                                            <span class="badge badge-danger">{{lang($tickets->status)}}</span>

                                            @endif
                                        </td>
                                        <td>
                                            @if(Auth::user()->can('Ticket Assign'))
                                                @if($tickets->status == 'Suspend' || $tickets->status == 'Closed')
                                                    <div class="btn-group">
                                                        @if($tickets->ticketassignmutliples->isNotEmpty() && $tickets->selfassignuser_id == null)

                                                        <button class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown" disabled>{{lang('Multi Assign')}} <span class="caret"></span></button>
                                                        <button data-id="{{$tickets->id}}" class="btn btn-outline-primary" id="btnremove" disabled data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="{{lang('Unassign')}}" aria-label="Unassign"><i class="fe fe-x"></i></button>
                                                        @elseif($tickets->ticketassignmutliples->isEmpty() && $tickets->selfassignuser_id != null)

                                                        <button class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown"  disabled>{{$tickets->selfassign->name}} (self) <span class="caret"></span></button>
                                                        <button data-id="{{$tickets->id}}" class="btn btn-outline-primary" id="btnremove" disabled data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="{{lang('Unassign')}}" aria-label="Unassign"><i class="fe fe-x"></i></button>
                                                        @else

                                                        <button class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown"  disabled>{{lang('Assign')}}<span class="caret"></span></button>
                                                        @endif

                                                    </div>
                                                @else
                                                    @if($tickets->ticketassignmutliples->isEmpty() && $tickets->selfassignuser_id == null)

                                                        <div class="btn-group">
                                                            <button class="btn btn-outline-primary dropdown-toggle btn-sm" data-bs-toggle="dropdown">{{lang('Assign')}} <span class="caret"></span></button>
                                                            <ul class="dropdown-menu" role="menu">
                                                                <li class="dropdown-plus-title">{{lang('Assign')}} <b aria-hidden="true" class="fa fa-angle-up"></b></li>
                                                                <li>
                                                                    <a href="javascript:void(0);" id="selfassigid" data-id="{{$tickets->id}}">{{lang('Self Assign')}}</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" data-id="{{$tickets->id}}" id="assigned">
                                                                    {{lang('Other Assign')}}
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    @else
                                                        <div class="btn-group">
                                                            @if($tickets->ticketassignmutliples->isNotEmpty() && $tickets->selfassignuser_id == null)
                                                                @if($tickets->ticketassignmutliples->isEmpty() && $tickets->selfassign == null)
                                                                <button class="btn btn-outline-primary dropdown-toggle btn-sm" data-bs-toggle="dropdown">{{lang('Assign')}} <span class="caret"></span></button>
                                                                @else
                                                                <button class="btn btn-outline-primary dropdown-toggle btn-sm" data-bs-toggle="dropdown">{{lang('Multi Assign')}} <span class="caret"></span></button>
                                                                <a href="javascript:void(0)" data-id="{{$tickets->id}}" class="btn btn-outline-primary btn-sm" id="btnremove" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="{{lang('Unassign')}}" aria-label="Unassign"><i class="fe fe-x"></i></a>
                                                                @endif

                                                            @elseif($tickets->ticketassignmutliples->isEmpty() && $tickets->selfassignuser_id != null)
                                                            @if($tickets->ticketassignmutliples->isEmpty() && $tickets->selfassign == null)
                                                            <button class="btn btn-outline-primary dropdown-toggle btn-sm" data-bs-toggle="dropdown">{{lang('Assign')}} <span class="caret"></span></button>
                                                            @else
                                                            <button class="btn btn-outline-primary dropdown-toggle btn-sm" data-bs-toggle="dropdown">{{$tickets->selfassign->name}} (self) <span class="caret"></span></button>
                                                            <a href="javascript:void(0)" data-id="{{$tickets->id}}" class="btn btn-outline-primary btn-sm" id="btnremove" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="{{lang('Unassign')}}" aria-label="Unassign"><i class="fe fe-x"></i></a>
                                                            @endif
                                                            @else

                                                            <button class="btn btn-outline-primary dropdown-toggle btn-sm" data-bs-toggle="dropdown">{{lang('Assign')}} <span class="caret"></span></button>
                                                            @endif

                                                            <ul class="dropdown-menu" role="menu">
                                                                <li class="dropdown-plus-title">{{lang('Assign')}} <b aria-hidden="true" class="fa fa-angle-up"></b></li>
                                                                <li>
                                                                    <a href="javascript:void(0);" id="selfassigid" data-id="{{$tickets->id}}">{{lang('Self Assign')}}</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" data-id="{{$tickets->id}}" id="assigned">
                                                                    {{lang('Other Assign')}}
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>

                                                    @endif
                                                @endif
                                            @else
                                                ~
                                            @endif
                                        </td>
                                        <td>
                                            @if(Auth::user()->can('Ticket Edit'))

                                            <a href="{{url('admin/ticket-view/' . $tickets->ticket_id)}}" class="btn btn-sm action-btns edit-testimonial"><i class="feather feather-eye text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="{{lang('Edit')}}"></i></a>
                                            @else
                                                ~
                                            @endif
                                            @if(Auth::user()->can('Ticket Delete'))
                                            <a href="javascript:void(0)" data-id="{{$tickets->id}}" class="btn btn-sm action-btns" id="show-delete" ><i class="feather feather-trash-2 text-danger" data-id="{{$tickets->id}}" data-bs-toggle="tooltip" data-bs-placement="top" title="{{lang('Delete')}}"></i></a>
                                            @else
                                            ~
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection


@section('scripts')

<!-- INTERNAL Vertical-scroll js-->
<script src="{{asset('assets/plugins/vertical-scroll/jquery.bootstrap.newsbox.js')}}?v=<?php echo time(); ?>"></script>

<!-- INTERNAL Data tables -->
<script src="{{asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}?v=<?php echo time(); ?>"></script>
<script src="{{asset('assets/plugins/datatable/js/dataTables.bootstrap5.js')}}?v=<?php echo time(); ?>"></script>
<script src="{{asset('assets/plugins/datatable/dataTables.responsive.min.js')}}?v=<?php echo time(); ?>"></script>
<script src="{{asset('assets/plugins/datatable/responsive.bootstrap5.min.js')}}?v=<?php echo time(); ?>"></script>

<!-- INTERNAL Index js-->
<script src="{{asset('assets/js/support/support-sidemenu.js')}}?v=<?php echo time(); ?>"></script>
<script src="{{asset('assets/js/select2.js')}}?v=<?php echo time(); ?>"></script>

<!-- INTERNAL Sweet-Alert js-->
<script src="{{asset('assets/plugins/sweet-alert/sweetalert.min.js')}}?v=<?php echo time(); ?>"></script>

<script type="text/javascript">

    "use strict";

    (function($)  {

        // Variables
        var SITEURL = '{{url('')}}';

        // Csrf Field
        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // Datatable
        // $('#admindashboard').dataTable({
        //     language: {
        //         searchPlaceholder: search,

        //         sSearch: '',
        //     },
        //     order:[],
        //     columnDefs: [
        //         { "orderable": false, "targets":[ 0,1,6] }
        //     ],
        // });

        let prev = {!! json_encode(lang("Previous")) !!};
        let next = {!! json_encode(lang("Next")) !!};
        let nodata = {!! json_encode(lang("No data available in table")) !!};
        let noentries = {!! json_encode(lang("No entries to show")) !!};
        let showing = {!! json_encode(lang("showing page")) !!};
        let ofval = {!! json_encode(lang("of")) !!};
        let maxRecordfilter = {!! json_encode(lang("- filtered from ")) !!};
        let maxRecords = {!! json_encode(lang("records")) !!};
        let entries = {!! json_encode(lang("entries")) !!};
        let show = {!! json_encode(lang("Show")) !!};
        let search = {!! json_encode(lang("Search...")) !!};
        // Datatable
        $('#admindashboard').dataTable({
            language: {
                searchPlaceholder: search,
                scrollX: "100%",
                sSearch: '',
                paginate: {
                previous: prev,
                next: next
                },
                emptyTable : nodata,
                infoFiltered: `${maxRecordfilter} _MAX_ ${maxRecords}`,
                info: `${showing} _PAGE_ ${ofval} _PAGES_`,
                infoEmpty: noentries,
                lengthMenu: `${show} _MENU_ ${entries} `,
            },
            order:[],
            columnDefs: [
                { "orderable": false, "targets":[ 0,1,4] }
            ],
        });

        $('.form-select').select2({
            minimumResultsForSearch: Infinity,
            width: '100%'
        });

        // when user click its get modal popup to assigned the ticket
        $('body').on('click', '#assigned', function () {
            console.log("Woking");
            var assigned_id = $(this).data('id');
            $('.select2_modalassign').select2({
                dropdownParent: ".sprukosearch",
                minimumResultsForSearch: '',
                placeholder: "Search",
                width: '100%'
            });

            var APP_URL = {!! json_encode(url('/')) !!}
            $.get(APP_URL+'/admin/assigned/' + assigned_id , function (data) {
                $('#assigned_id').val(data.assign_data.id);
                $(".modal-title").text('Assign To Agent');
                $('#username').html(data.table_data);
                $('#addassigned').modal('show');
            });
        });

        // TICKET DELETE SCRIPT
        $('body').on('click', '#show-delete', function () {
            var _id = $(this).data("id");
            swal({
                title: `{{lang('Are you sure you want to continue?', 'alerts')}}`,
                text: "{{lang('This might erase your records permanently', 'alerts')}}",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                $.ajax({
                        type: "get",
                        url: SITEURL + "/admin/delete-ticket/"+_id,
                        success: function (data) {
                            toastr.success(data.success);
                            var oTable = $('#myticket').dataTable();
                            oTable.fnDraw(false);
                            location.reload();
                        },
                        error: function (data) {
                        console.log('Error:', data);
                        }
                    });
                }
            });
        });
        // TICKET DELETE SCRIPT END

        //Mass Delete
        $('body').on('click', '#massdelete', function () {

            var id = [];
            $('.checkall:checked').each(function(){
                id.push($(this).val());
            });
            if(id.length > 0){
                swal({
                    title: `{{lang('Are you sure you want to continue?', 'alerts')}}`,
                    text: "{{lang('This might erase your records permanently', 'alerts')}}",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                            url:"{{ url('admin/ticket/delete/tickets')}}",
                            method:"GET",
                            data:{id:id},
                            success:function(data)
                            {

                                toastr.success(data.success);
                                location.reload();

                            },
                            error:function(data){

                            }
                        });
                    }
                });
            }
            else{
                toastr.error('{{lang('Please select at least one check box.', 'alerts')}}');
            }

        });

        // Assigned Submit button
        $('body').on('submit', '#assigned_form', function (e) {
            e.preventDefault();
            var actionType = $('#btnsave').val();
            var fewSeconds = 2;
            $('#btnsave').html('Sending..');
            $('#btnsave').prop('disabled', true);
                setTimeout(function(){
                    $('#btnsave').prop('disabled', false);
                }, fewSeconds*1000);
            var formData = new FormData(this);
            $.ajax({
                type:'POST',
                url: SITEURL + "/admin/assigned/create",
                data: formData,
                cache:false,
                contentType: false,
                processData: false,

                success: (data) => {
                    $('#AssignError').html('');
                    $('#assigned_form').trigger("reset");
                    $('#addassigned').modal('hide');
                    $('#btnsave').html('{{lang('Save Changes')}}');
                    var oTable = $('#myticket').dataTable();
                    oTable.fnDraw(false);
                    toastr.success(data.success);
                    location.reload();
                },
                error: function(data){
                    $('#AssignError').html('');
                    $('#AssignError').html(data.responseJSON.errors.assigned_user_id);
                    $('#btnsave').html('{{lang('Save Changes')}}');
                }
            });
        });

        // Remove the assigned from the ticket
        $('body').on('click', '#btnremove', function () {
            var asid = $(this).data("id");
            swal({
                title: `{{lang('Are you sure you want to unassign this agent?', 'alerts')}}`,
                text: "{{lang('This agent may no longer exist for this ticket.', 'alerts')}}",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        type: "get",
                        url: SITEURL + "/admin/assigned/update/"+asid,
                        success: function (data) {
                            var oTable = $('#myticket').dataTable();
                            oTable.fnDraw(false);
                            toastr.success(data.success);
                            location.reload();
                        },
                        error: function (data) {
                            console.log('Error:', data);
                        }
                    });

                }
            });
        });

        // Checkbox checkall
        $('#customCheckAll').on('click', function() {
            $('.checkall').prop('checked', this.checked);
        });


        $('body').on('click','#selfassigid', function(e){

            e.preventDefault();

            let id = $(this).data('id');

            $.ajax({
                method:'POST',
                url: '{{route('admin.selfassign')}}',
                data: {
                    id : id,
                },
                success: (data) => {
                    toastr.success(data.success);
                    location.reload();
                },
                error: function(data){

                }
            });
        })

    })(jQuery);

</script>

@endsection

@section('modal')

@include('admin.modalpopup.assignmodal')

@endsection
