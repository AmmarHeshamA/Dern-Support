<div class="navbar-bg"></div>

<!-- Navbar Start -->
@include('admin.layouts.navbar')
<!-- Navbar End -->

<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('admin.dashboard') }}"><img src="{{ asset('assets/images/service/logo-alt.png') }}"
                    width="150" alt=""></a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="menu-item" id="dashboard">
                <a href="{{ route('admin.dashboard') }}" class="nav-link"><i class="fas fa-fire"></i><span>Messages</span></a>
            </li>
            <li class="menu-item" id="categorys">
                <a href="{{ route('admin.categorys.index') }}" class="nav-link"><i class="fas fa-fire"></i><span>Categoryes</span></a>
            </li>
            <li class="menu-item" id="comments">
                <a href="{{ route('admin.comment.index') }}" class="nav-link"><i class="fas fa-fire"></i><span>Comments</span></a>
            </li>
            <li class="menu-item" id="services">
                <a href="{{ route('admin.service.index') }}" class="nav-link"><i class="fas fa-fire"></i><span>Services</span></a>
            </li>
            <li class="menu-item" id="orders">
                <a href="{{ route('admin.detail.index') }}" class="nav-link"><i class="fas fa-fire"></i><span>Orders</span></a>
            </li>
        </ul>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const menuItems = document.querySelectorAll('.menu-item');

                // Restore active class from localStorage
                const activeItemID = localStorage.getItem('activeMenuItem');
                if (activeItemID) {
                    const activeItem = document.getElementById(activeItemID);
                    if (activeItem) {
                        activeItem.classList.add('active');
                    }
                }

                // Add click event listener to each menu item
                menuItems.forEach(function(item) {
                    item.addEventListener('click', function() {
                        document.querySelector('.menu-item.active')?.classList.remove('active');

                        this.classList.add('active');

                        localStorage.setItem('activeMenuItem', this.id);
                    });
                });
            });
        </script>

        <style>
            .menu-item.active {
                background-color: #f0f0f0; /* Example style for active item */
            }
        </style>




    </aside>
</div>
