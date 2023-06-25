<div class="content">

<!-- Start Content-->
<div class="container-fluid">
    
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                        <li class="breadcrumb-item active">Foo Tables</li>
                    </ol>
                </div>
                <h4 class="page-title">Foo Tables</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Filtering</h4>
                    <p class="sub-header">
                        include filtering in your FooTable.
                    </p>

                    <div class="mb-2">
                        <div class="row row-cols-sm-auto g-2 align-items-center">
                            <div class="col-12 text-sm-center">
                                <select id="demo-foo-filter-status" class="form-select form-select-sm">
                                    <option value="">Show all</option>
                                    <option value="active">Active</option>
                                    <option value="disabled">Disabled</option>
                                    <option value="suspended">Suspended</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <input id="demo-foo-search" type="text" placeholder="Search" class="form-control form-control-sm" autocomplete="on">
                            </div>
                        </div>
                    </div>
                    
                    <div class="table-responsive">
                        <table id="demo-foo-filtering" class="table table-bordered toggle-circle mb-0" data-page-size="7">
                            <thead>
                            <tr>
                                <th data-toggle="true">First Name</th>
                                <th>Last Name</th>
                                <th data-hide="phone">Job Title</th>
                                <th data-hide="phone, tablet">DOB</th>
                                <th data-hide="phone, tablet">Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Isidra</td>
                                <td>Boudreaux</td>
                                <td>Traffic Court Referee</td>
                                <td>22 Jun 1972</td>
                                <td><span class="badge label-table bg-success">Active</span></td>
                            </tr>
                            <tr>
                                <td>Shona</td>
                                <td>Woldt</td>
                                <td>Airline Transport Pilot</td>
                                <td>3 Oct 1981</td>
                                <td><span class="badge label-table bg-secondary text-light">Disabled</span></td>
                            </tr>
                            <tr>
                                <td>Granville</td>
                                <td>Leonardo</td>
                                <td>Business Services Sales Representative</td>
                                <td>19 Apr 1969</td>
                                <td><span class="badge label-table bg-danger">Suspended</span></td>
                            </tr>
                            <tr>
                                <td>Easer</td>
                                <td>Dragoo</td>
                                <td>Drywall Stripper</td>
                                <td>13 Dec 1977</td>
                                <td><span class="badge label-table bg-success">Active</span></td>
                            </tr>
                            <tr>
                                <td>Maple</td>
                                <td>Halladay</td>
                                <td>Aviation Tactical Readiness Officer</td>
                                <td>30 Dec 1991</td>
                                <td><span class="badge label-table bg-danger">Suspended</span></td>
                            </tr>
                            <tr>
                                <td>Maxine</td>
                                <td><a href="#">Woldt</a></td>
                                <td><a href="#">Business Services Sales Representative</a></td>
                                <td>17 Oct 1987</td>
                                <td><span class="badge label-table bg-secondary text-light">Disabled</span></td>
                            </tr>
                            <tr>
                                <td>Lorraine</td>
                                <td>Mcgaughy</td>
                                <td>Hemodialysis Technician</td>
                                <td>11 Nov 1983</td>
                                <td><span class="badge label-table bg-secondary text-light">Disabled</span></td>
                            </tr>
                            <tr>
                                <td>Lizzee</td>
                                <td><a href="#">Goodlow</a></td>
                                <td>Technical Services Librarian</td>
                                <td>1 Nov 1961</td>
                                <td><span class="badge label-table bg-danger">Suspended</span></td>
                            </tr>
                            <tr>
                                <td>Judi</td>
                                <td>Badgett</td>
                                <td>Electrical Lineworker</td>
                                <td>23 Jun 1981</td>
                                <td><span class="badge label-table bg-success">Active</span></td>
                            </tr>
                            <tr>
                                <td>Lauri</td>
                                <td>Hyland</td>
                                <td>Blackjack Supervisor</td>
                                <td>15 Nov 1985</td>
                                <td><span class="badge label-table bg-danger">Suspended</span></td>
                            </tr>
                            <tr>
                                <td>Isidra</td>
                                <td>Boudreaux</td>
                                <td>Traffic Court Referee</td>
                                <td>22 Jun 1972</td>
                                <td><span class="badge label-table bg-success">Active</span></td>
                            </tr>
                            <tr>
                                <td>Shona</td>
                                <td>Woldt</td>
                                <td>Airline Transport Pilot</td>
                                <td>3 Oct 1981</td>
                                <td><span class="badge label-table bg-secondary text-light">Disabled</span></td>
                            </tr>
                            <tr>
                                <td>Granville</td>
                                <td>Leonardo</td>
                                <td>Business Services Sales Representative</td>
                                <td>19 Apr 1969</td>
                                <td><span class="badge label-table bg-danger">Suspended</span></td>
                            </tr>
                            <tr>
                                <td>Easer</td>
                                <td>Dragoo</td>
                                <td>Drywall Stripper</td>
                                <td>13 Dec 1977</td>
                                <td><span class="badge label-table bg-success">Active</span></td>
                            </tr>
                            <tr>
                                <td>Maple</td>
                                <td>Halladay</td>
                                <td>Aviation Tactical Readiness Officer</td>
                                <td>30 Dec 1991</td>
                                <td><span class="badge label-table bg-danger">Suspended</span></td>
                            </tr>
                            <tr>
                                <td>Maxine</td>
                                <td><a href="#">Woldt</a></td>
                                <td><a href="#">Business Services Sales Representative</a></td>
                                <td>17 Oct 1987</td>
                                <td><span class="badge label-table bg-secondary text-light">Disabled</span></td>
                            </tr>
                            <tr>
                                <td>Lorraine</td>
                                <td>Mcgaughy</td>
                                <td>Hemodialysis Technician</td>
                                <td>11 Nov 1983</td>
                                <td><span class="badge label-table bg-secondary text-light">Disabled</span></td>
                            </tr>
                            <tr>
                                <td>Lizzee</td>
                                <td><a href="#">Goodlow</a></td>
                                <td>Technical Services Librarian</td>
                                <td>1 Nov 1961</td>
                                <td><span class="badge label-table bg-danger">Suspended</span></td>
                            </tr>
                            <tr>
                                <td>Judi</td>
                                <td>Badgett</td>
                                <td>Electrical Lineworker</td>
                                <td>23 Jun 1981</td>
                                <td><span class="badge label-table bg-success">Active</span></td>
                            </tr>
                            <tr>
                                <td>Lauri</td>
                                <td>Hyland</td>
                                <td>Blackjack Supervisor</td>
                                <td>15 Nov 1985</td>
                                <td><span class="badge label-table bg-danger">Suspended</span></td>
                            </tr>
                            <tr>
                                <td>Isidra</td>
                                <td>Boudreaux</td>
                                <td>Traffic Court Referee</td>
                                <td>22 Jun 1972</td>
                                <td><span class="badge label-table bg-success">Active</span></td>
                            </tr>
                            <tr>
                                <td>Shona</td>
                                <td>Woldt</td>
                                <td>Airline Transport Pilot</td>
                                <td>3 Oct 1981</td>
                                <td><span class="badge label-table bg-secondary text-light">Disabled</span></td>
                            </tr>
                            <tr>
                                <td>Granville</td>
                                <td>Leonardo</td>
                                <td>Business Services Sales Representative</td>
                                <td>19 Apr 1969</td>
                                <td><span class="badge label-table bg-danger">Suspended</span></td>
                            </tr>
                            <tr>
                                <td>Easer</td>
                                <td>Dragoo</td>
                                <td>Drywall Stripper</td>
                                <td>13 Dec 1977</td>
                                <td><span class="badge label-table bg-success">Active</span></td>
                            </tr>
                            <tr>
                                <td>Maple</td>
                                <td>Halladay</td>
                                <td>Aviation Tactical Readiness Officer</td>
                                <td>30 Dec 1991</td>
                                <td><span class="badge label-table bg-danger">Suspended</span></td>
                            </tr>
                            <tr>
                                <td>Maxine</td>
                                <td><a href="#">Woldt</a></td>
                                <td><a href="#">Business Services Sales Representative</a></td>
                                <td>17 Oct 1987</td>
                                <td><span class="badge label-table bg-secondary text-light">Disabled</span></td>
                            </tr>
                            <tr>
                                <td>Lorraine</td>
                                <td>Mcgaughy</td>
                                <td>Hemodialysis Technician</td>
                                <td>11 Nov 1983</td>
                                <td><span class="badge label-table bg-secondary text-light">Disabled</span></td>
                            </tr>
                            <tr>
                                <td>Lizzee</td>
                                <td><a href="#">Goodlow</a></td>
                                <td>Technical Services Librarian</td>
                                <td>1 Nov 1961</td>
                                <td><span class="badge label-table bg-danger">Suspended</span></td>
                            </tr>
                            <tr>
                                <td>Judi</td>
                                <td>Badgett</td>
                                <td>Electrical Lineworker</td>
                                <td>23 Jun 1981</td>
                                <td><span class="badge label-table bg-success">Active</span></td>
                            </tr>
                            <tr>
                                <td>Lauri</td>
                                <td>Hyland</td>
                                <td>Blackjack Supervisor</td>
                                <td>15 Nov 1985</td>
                                <td><span class="badge label-table bg-danger">Suspended</span></td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr class="active">
                                <td colspan="5">
                                    <div class="text-end">
                                        <ul class="pagination pagination-rounded justify-content-end footable-pagination mb-0"></ul>
                                    </div>
                                </td>
                            </tr>
                            </tfoot>
                        </table>
                    </div> <!-- end .table-responsive-->
                </div>
            </div> <!-- end card -->
        </div> <!-- end col -->
    </div>
    <!-- end row -->

</div> <!-- container -->

</div>