<!--navigation-->
<div class="nav-container">
    <div class="mobile-topbar-header">
        <div>
            <img src="{{ asset('assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">VMS</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <nav class="topbar-nav">
        <ul class="metismenu" id="menu">
            <li>
                <a href="{{ route('dashboard') }}" class="has-arrow">
                    <div class="parent-icon"><i class='bx bx-home-circle'></i>
                    </div>
                    <div class="menu-title">Dashboard</div>
                </a>
            </li>
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="bx bx-category"></i>
                    </div>
                    <div class="menu-title">Settings</div>
                </a>
                <ul>
                    <li> <a href="{{ route('department') }}"><i class="bx bx-right-arrow-alt"></i>Department</a>
                    </li>
                    <li> <a href="{{ route('role') }}"><i class="bx bx-right-arrow-alt"></i>Role</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="bx bx-category"></i>
                    </div>
                    <div class="menu-title">User</div>
                </a>
                <ul>
                    <li> <a href="{{ route('employees.add') }}"><i class="bx bx-right-arrow-alt"></i>Add Employee</a>
                    </li>
                    <li> <a href="{{ route('employees.list') }}"><i class="bx bx-right-arrow-alt"></i>View Employee</a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon icon-color-6"> <i class="bx bx-category"></i>
                    </div>
                    <div class="menu-title">Sites</div>
                </a>
                <ul>
                    <li> <a href="add-site.html"><i class="bx bx-right-arrow-alt"></i>Add Site</a>
                    </li>
                    <li> <a href="list-site.html"><i class="bx bx-right-arrow-alt"></i>View Sites</a>
                    </li>
                    <li> <a href="site-allocation.html"><i class="bx bx-right-arrow-alt"></i>Site Allocation</a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon icon-color-6"> <i class="bx bx-category"></i>
                    </div>
                    <div class="menu-title">Leave</div>
                </a>
                <ul>
                    <li> <a href="list-attendance.html"><i class="bx bx-right-arrow-alt"></i>Attendance</a>
                    </li>
                    <li> <a href="list-leave.html"><i class="bx bx-right-arrow-alt"></i>Leaves</a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class='bx bx-category'></i>
                    </div>
                    <div class="menu-title">Visitors</div>
                </a>
                <ul>
                    <li> <a href="add-visitor.html"><i class="bx bx-right-arrow-alt"></i>Add Visitor</a>
                    </li>
                    <li> <a href="list-visitor.html"><i class="bx bx-right-arrow-alt"></i>View Visitors</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="bx bx-category"></i>
                    </div>
                    <div class="menu-title">Payroll</div>
                </a>
                <ul>
                    <li> <a href="list-department.html"><i class="bx bx-right-arrow-alt"></i>Employee Payroll</a>
                    </li>
                </ul>
            </li>
            <!-- <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class="bx bx-category"></i>
                    </div>
                    <div class="menu-title">Residents</div>
                </a>
                <ul>
                    <li> <a href="add-resident.html"><i class="bx bx-right-arrow-alt"></i>Add Resident</a>
                    </li>
                    <li> <a href="list-resident.html"><i class="bx bx-right-arrow-alt"></i>View Residents</a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class='bx bx-category'></i>
                    </div>
                    <div class="menu-title">Visitors</div>
                </a>
                <ul>
                    <li> <a href="add-visitor.html"><i class="bx bx-right-arrow-alt"></i>Add Visitor</a>
                    </li>
                    <li> <a href="list-visitor.html"><i class="bx bx-right-arrow-alt"></i>View Visitors</a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class='bx bx-category'></i>
                    </div>
                    <div class="menu-title">Reports</div>
                </a>
                <ul>
                    <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Visitor Reports</a>
                    </li>
                </ul>
            </li> -->
        </ul>
    </nav>
</div>
<!--end navigation-->