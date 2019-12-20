<nav class="sidebar">
{{--
    <div class="dismiss">
        <i class="mdi mdi-arrow-expand-left"></i>
    </div>
--}}

    <ul class="list-unstyled menu-elements">
        <li class="dropdown mt-1">
            <a
                    class="side-link dropdown-toggle hasTooltip"
                    title="Tables"
                    href="#" id="navbarDropdown"
                    role="button"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
            ><i class="mdi mdi-table-large"></i></a>

            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('Admin::families.index') }}">Families</a>
                <a class="dropdown-item" href="#">Categories</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">VAT</a>
                <a class="dropdown-item" href="#">Units</a>
                <a class="dropdown-item" href="#">Titles</a>
            </div>
        </li>

        <li class="nav-item">
            <a
                    class="side-link hasTooltip"
                    title="Users"
                    href="{{ route('Admin::users.index') }}"
            ><i class="mdi mdi-account-multiple"></i></a>
        </li>

        <li class="nav-item">
            <a
                    class="side-link hasTooltip"
                    title="Suppliers"
                    href="#"
            ><i class="mdi mdi-truck"></i></a>
        </li>

        <li class="nav-item">
            <a
                    class="side-link hasTooltip"
                    title="Customers"
                    href="#"><i class="mdi mdi-human-male-female"></i></a>
        </li>

        <li class="nav-item">
            <a
                    class="side-link hasTooltip"
                    title="Products"
                    href="#"><i class="mdi mdi-tag"></i></a>
        </li>

        <li class="nav-item">
            <a
                    class="side-link hasTooltip"
                    title="Estimates"
                    href="#"><i class="mdi mdi-square-inc-cash"></i></a>
        </li>

        <li class="nav-item">
            <a
                    class="side-link hasTooltip"
                    title="Orders"
                    href="#"><i class="mdi mdi-factory"></i></a>
        </li>

        <li class="nav-item">
            <a
                    class="side-link hasTooltip"
                    title="Mapping"
                    href="#"
            ><i class="mdi mdi-pen"></i></a>
        </li>
    </ul>
</nav>
<div class="overlay"></div>
