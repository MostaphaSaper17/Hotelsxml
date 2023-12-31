@extends('layouts.agent')
@section('content')
<div class="clearfix"></div>
    <div id="st-content-wrapper" class="search-result-page">
        <div class="container">
            <div class="clearfix"></div>
            <!--Top Horizontal Search-->
            <div class="change-search-goggle-area mobile-page-special-gap">
                <div class="row">
                <div class="col-md-12">
                    <h2><span class="special-green-color">My Bookings -</span> Manage your booking with advance filters!</h2>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="search-form-wrapper horizontal-search-area my-booking-search-box ">
                <div class="search-form hotel-service my-custom-container">
                    <!--Address-->
                    <form action="" class="form" method="">

                        <div class="row">
                            <div class="col-md-3 border-right">
                                <div class="form-group form-extra-field dropdown clearfix field-detination">
                                    <div class="dropdown">
                                        <label>Booking ID</label>
                                        <input type="text" id="" name="" value="" class="inputg"
                                            placeholder="Enter Booking ID" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 border-right">
                                <div class="form-group form-extra-field dropdown clearfix field-detination">
                                    <div class="dropdown">
                                        <label>Guest Name</label>
                                        <input type="text" id="" name="" value="" class="inputg" placeholder="Place guest name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 border-right">
                                <div class="form-group form-extra-field dropdown clearfix field-destination">
                                    <div class="dropdown">
                                        <label for="booking-status">Booking Status</label>
                                        <select name="booking-status" id="booking-status" class="form-control" required>
                                            <option value="all" selected>All</option>
                                            <option value="complete-paid">Complete/Paid</option>
                                            <option value="confirm-unpaid">Confirm/Unpaid</option>
                                            <option value="cancelled">Cancelled</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group form-extra-field dropdown clearfix field-destination">
                                    <div class="dropdown">
                                        <label for="checkin-status">Check In Status</label>
                                        <select name="checkin-status" id="checkin-status" class="form-control" required>
                                            <option value="all" selected>All</option>
                                            <option value="past">Past Check Ins</option>
                                            <option value="future">Future Check Ins</option>
                                            <option value="active-stay">Active Stay</option>
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-12 mobile-hide-hr">
                                <hr>
                            </div>
                            <div class="clearfix"></div>

                            <div class="col-md-3 border-right">
                                <div class="form-group form-date-field form-date-search clearfix  has-icon "
                                    data-format="DD/MM/YYYY">
                                    <i class="input-icon field-icon fas fa-calendar"></i>
                                    <div class="date-wrapper clearfix">
                                        <div class="check-in-wrapper">
                                            <label>Booking From Date</label>
                                            <div class="inputg check-in-render">01/07/2019</div>
                                        </div>
                                    </div>
                                    <input type="hidden" class="check-in-input" value="01/07/2019" name="start">
                                    <input type="text" class="check-in-out"
                                        value="01/07/2019 10:11 am-02/07/2019 10:11 am" name="date">
                                </div>
                                <div class="form-group form-date-field form-date-search clearfix  has-icon "
                                    data-format="DD/MM/YYYY">
                                    <i class="input-icon field-icon fas fa-calendar"></i>
                                    <div class="date-wrapper clearfix">
                                        <div class="check-in-wrapper">
                                            <label>Booking To Date</label>
                                            <div class="inputg check-out-render">02/07/2019</div>
                                        </div>
                                    </div>
                                    <input type="hidden" class="check-out-input" value="02/07/2019" name="end">
                                    <input type="text" class="check-in-out"
                                        value="01/07/2019 10:11 am-02/07/2019 10:11 am" name="date">
                                </div>
                            </div>
                            <div class="col-md-3 border-right">
                                <div class="form-group form-date-field form-date-search clearfix  has-icon "
                                    data-format="DD/MM/YYYY">
                                    <i class="input-icon field-icon fas fa-calendar"></i>
                                    <div class="date-wrapper clearfix">
                                        <div class="check-in-wrapper">
                                            <label>Check In</label>
                                            <div class="inputg check-out-render">02/07/2019</div>
                                        </div>
                                    </div>
                                    <input type="hidden" class="check-out-input" value="02/07/2019" name="end">
                                    <input type="text" class="check-in-out"
                                        value="01/07/2019 10:11 am-02/07/2019 10:11 am" name="date">
                                </div>
                                <div class="form-group form-date-field form-date-search clearfix  has-icon "
                                    data-format="DD/MM/YYYY">
                                    <i class="input-icon field-icon fas fa-calendar"></i>
                                    <div class="date-wrapper clearfix">
                                        <div class="check-in-wrapper">
                                            <label>Check Out</label>
                                            <div class="inputg check-out-render">02/07/2019</div>
                                        </div>
                                    </div>
                                    <input type="hidden" class="check-out-input" value="02/07/2019" name="end">
                                    <input type="text" class="check-in-out"
                                        value="01/07/2019 10:11 am-02/07/2019 10:11 am" name="date">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group form-date-field form-date-search clearfix  has-icon "
                                    data-format="DD/MM/YYYY">
                                    <i class="input-icon field-icon fas fa-calendar"></i>
                                    <div class="date-wrapper clearfix">
                                        <div class="check-in-wrapper">
                                            <label>Cancellation Date From</label>
                                            <div class="inputg check-in-render">01/07/2019</div>
                                        </div>
                                    </div>
                                    <input type="hidden" class="check-in-input" value="01/07/2019" name="start">
                                    <input type="text" class="check-in-out"
                                        value="01/07/2019 10:11 am-02/07/2019 10:11 am" name="date">
                                </div>
                                <div class="form-group form-date-field form-date-search clearfix  has-icon "
                                    data-format="DD/MM/YYYY">
                                    <i class="input-icon field-icon fas fa-calendar"></i>
                                    <div class="date-wrapper clearfix">
                                        <div class="check-in-wrapper">
                                            <label>Cancellation Date To</label>
                                            <div class="inputg check-out-render">02/07/2019</div>
                                        </div>
                                    </div>
                                    <input type="hidden" class="check-out-input" value="02/07/2019" name="end">
                                    <input type="text" class="check-in-out"
                                        value="01/07/2019 10:11 am-02/07/2019 10:11 am" name="date">
                                </div>
                            </div>

                            <div class="col-md-3 ">
                                <button class="btn btn-primary btn-search full-width-btn mt20" type="submit">
                                    <i class="fas fa-search"></i> Search
                                </button>
                                <button class="btn btn-warning btn-search full-width-btn mt20" type="submit">
                                    <i class="fas fa-sync-alt"></i> Reset
                                </button>

                            </div>


                        </div>
                    </form>

                </div>
            </div>

            <div class="clearfix"></div>
                    <div class="change-search-goggle-area special-mar-30">
                        <div class="row">
                            <div class="col-md-12">
                                <h2>Booking List</h2>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <!--Booking List Table-->
                    <div class="table-responsive">
                        <table class="table my-booking-list-table custom-table-style ">
                            <tbody>
                                <tr>
                                    <th><i class="fas fa-id-card"></i> Booking Id</th>
                                    <th><i class="fas fa-check-circle"></i> Status</th>
                                    <th><i class="fas fa-user"></i> Guest Name</th>
                                    <th><i class="fas fa-calendar"></i> Check-in</th>
                                    <th><i class="fas fa-map-marker-alt"></i> City</th>
                                    <th><i class="far fa-clock"></i> Cancellation Deadline</th>
                                    <th><i class="fas fa-dollar-sign"></i> Cost Total</th>
                                    <th><i class="fas fa-credit-card"></i> Payment</th>
                                    <th><i class="fas fa-cogs"></i> Action</th>
                                </tr>
                                <tr>
                                    <td class="min-space bold-text">Hxm123</td>
                                    <td class="min-space"><span class="text-success label bol">Complete</span></td>
                                    <td class="min-space">John Doe</td>
                                    <td class="min-space">2023-09-15</td>
                                    <td class="min-space">New York</td>
                                    <td class="min-space">free cancle, 20 sep</td>
                                    <td class="min-space"><b>150 <span>USD</span></b></td>
                                    <td class="min-space"><span class="text-success label">Paid</span></td>
                                    <td class="min-space">
                                        <a href="">
                                            <i class="fa-solid fa-eye"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="min-space bold-text">Hxm123</td>
                                    <td class="min-space"><span class="text-danger label">Cancle</span></td>
                                    <td class="min-space">Jane Smith</td>
                                    <td class="min-space">2023-09-20</td>
                                    <td class="min-space">Los Angeles</td>
                                    <td class="min-space">Non-refunded</td>
                                    <td class="min-space"><b>200 <span>USD</span></b></td>
                                    <td class="min-space"><span class="text-warning label">Unpaid</span></td>
                                    <td class="min-space">
                                        <a href="">
                                            <i class="fa-solid fa-eye"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="min-space bold-text">Hxm123</td>
                                    <td class="min-space"><span class="text-warning label">Confirm</span></td>
                                    <td class="min-space">Alice Johnson</td>
                                    <td class="min-space">2023-09-25</td>
                                    <td class="min-space">San Francisco</td>
                                    <td class="min-space">free cancle, 20 sep</td>
                                    <td class="min-space"><b>180 <span>USD</span></b></td>
                                    <td class="min-space"><span class="text-warning label">Unpaid</span></td>
                                    <td class="min-space">
                                        <a href="">
                                            <i class="fa-solid fa-eye"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
            <!--Top Horizontal Search End-->
            <div class="clearfix"></div>
        </div>
        <!--container end-->

        <!-- Popup Statements-->
        <div class="modal fade modal-map show-statements-modal-pop-box" id="st-modal-show-statements" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i
                                class="input-icon field-icon page-small-icon"><img src="{{ asset('website/images/close-icon.svg') }}"
                                    alt=""></i></button>
                        <h4 class="modal-title">Download Historical Statement</h4>
                    </div>
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-md-6 border-right">
                                <div class="form-group form-extra-field dropdown clearfix field-detination">
                                    <div class="dropdown">
                                        <label>Agent</label>
                                        <input type="text" id="" name="" value="" class="inputg" placeholder="Code"
                                            autocomplete="off">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group form-extra-field dropdown clearfix field-detination">
                                    <div class="dropdown">
                                        <label>Type</label>
                                        <select name="" id="" class="inputg" required="">
                                            <option value="">Select Type</option>
                                            <option value="Booking">Booking</option>
                                            <option value="Transaction">Transaction</option>
                                        </select>

                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-md-12 mobile-hide-hr"><hr></div>
                            <div class="clearfix"></div>
                            <div class="col-md-6 border-right">
                                <div class="search-form-wrapper mobile-form-gap">
                                <div class="search-form horizontal-search-area">
                                        <div class="form-group form-date-field form-date-search clearfix  has-icon " data-format="DD/MM/YYYY">
                                            <i class="input-icon field-icon"><img src="{{ asset('website/hotel-support/images/calandar-icon.png') }}" alt=""></i>
                                            <div class="date-wrapper clearfix">
                                                <div class="check-in-wrapper">

                                                    <label>Specific Date</label>
                                                    <div class="inputg check-in-render">Place Specific Date</div>
                                                </div>
                                            </div>
                                            <input type="hidden" class="check-in-input" value="01/07/2019" name="start">
                                            <input type="text" class="check-in-out" value="01/07/2019 10:11 am-02/07/2019 10:11 am" name="date">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6"><h5 class="sp-mar-20">OR</h5></div>
                            <div class="clearfix"></div>
                            <div class="col-md-12 mobile-hide-hr"><hr></div>
                            <div class="clearfix"></div>
                            <div class="col-md-6 border-right">
                                <div class="search-form-wrapper mobile-form-gap">
                                    <div class="search-form horizontal-search-area">
                                        <div class="form-group form-date-field form-date-search clearfix  has-icon " data-format="DD/MM/YYYY">
                                            <i class="input-icon field-icon"><img src="{{ asset('website/hotel-support/images/calandar-icon.png') }}" alt=""></i>
                                            <div class="date-wrapper clearfix">
                                                <div class="check-in-wrapper">

                                                    <label>Date Range From</label>
                                                    <div class="inputg check-in-render">Place Date Range From</div>
                                                </div>
                                            </div>
                                            <input type="hidden" class="check-in-input" value="01/07/2019" name="start">
                                            <input type="text" class="check-in-out" value="01/07/2019 10:11 am-02/07/2019 10:11 am" name="date">
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="search-form-wrapper mobile-form-gap">
                                    <div class="search-form horizontal-search-area">
                                        <div class="form-group form-date-field form-date-search clearfix  has-icon " data-format="DD/MM/YYYY">
                                            <i class="input-icon field-icon"><img src="{{ asset('website/hotel-support/images/calandar-icon.png') }}" alt=""></i>
                                            <div class="date-wrapper clearfix">
                                                <div class="check-in-wrapper">

                                                    <label>Date Range To</label>
                                                    <div class="inputg check-in-render">Place Date Range To</div>
                                                </div>
                                            </div>
                                            <input type="hidden" class="check-in-input" value="01/07/2019" name="start">
                                            <input type="text" class="check-in-out" value="01/07/2019 10:11 am-02/07/2019 10:11 am" name="date">
                                        </div>
                                        </div>
                                        </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-md-12 mobile-hide-hr"><hr></div>
                            <div class="clearfix"></div>

                            <div class="col-md-4 border-right">
                                <div class="form-group form-extra-field dropdown clearfix field-detination">
                                    <div class="dropdown">
                                        <label>Download Format</label>
                                        <select name="" id="" class="inputg" required="">
                                            <option value="PDF">PDF</option>
                                            <option value="Print">Print</option>
                                            <option value="Excel">Excel</option>
                                        </select>

                                    </div>
                                </div>
                            </div>



                            <div class="col-md-4 border-right">
                                <button class="btn btn-success btn-search full-width-btn mt20" type="submit">Fetch Statement</button>
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-danger btn-search full-width-btn mt20" type="submit">Cancel</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Popup Statements End-->
    </div>
@endsection
