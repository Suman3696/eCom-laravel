<!-- resources/views/side.blade.php -->
<header>
    <!-- Sidebar -->
    <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-dark text-white">
        <div class="position-sticky">
            <div class="list-group list-group-flush mx-3 mt-4">
                <a href="#" class="list-group-item list-group-item-action py-2 ripple text-white" aria-current="true">
                    <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Main dashboard</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action py-2 ripple active text-white">
                    <i class="fas fa-chart-area fa-fw me-3"></i><span>Website traffic</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action py-2 ripple text-white">
                    <i class="fas fa-lock fa-fw me-3"></i><span>Password</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action py-2 ripple text-white">
                    <i class="fas fa-chart-line fa-fw me-3"></i><span>Analytics</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action py-2 ripple text-white">
                    <i class="fas fa-chart-pie fa-fw me-3"></i><span>SEO</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action py-2 ripple text-white">
                    <i class="fas fa-chart-bar fa-fw me-3"></i><span>Orders</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action py-2 ripple text-white">
                    <i class="fas fa-globe fa-fw me-3"></i><span>International</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action py-2 ripple text-white">
                    <i class="fas fa-building fa-fw me-3"></i><span>Partners</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action py-2 ripple text-white">
                    <i class="fas fa-calendar fa-fw me-3"></i><span>Calendar</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action py-2 ripple text-white">
                    <i class="fas fa-users fa-fw me-3"></i><span>Users</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action py-2 ripple text-white">
                    <i class="fas fa-money-bill fa-fw me-3"></i><span>Sales</span>
                </a>
            </div>
        </div>
    </nav>
    <!-- Sidebar -->
</header>

<!-- Custom CSS for Sidebar -->
<style>
    .sidebar {
        width: 250px;
    }

    .sidebar .list-group-item {
        background-color: #343a40;
        /* Dark background */
        border: none;
        /* Remove borders */
    }

    .sidebar .list-group-item:hover {
        background-color: #495057;
        /* Darker shade on hover */
        color: #fff;
        /* Ensure text stays white */
    }

    .sidebar .list-group-item.active {
        background-color: #007bff;
        /* Active item background */
        border-color: #007bff;
        /* Active item border */
    }

    .sidebar .list-group-item.active:hover {
        background-color: #0056b3;
        /* Darker active item on hover */
    }

    .sidebar .list-group-item i {
        margin-right: 10px;
        /* Space between icon and text */
    }
</style>