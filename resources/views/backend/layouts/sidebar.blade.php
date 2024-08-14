<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="index3.html" class="brand-link">
        <img src="{{url('backend/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Banizzo</span>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Homepage
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Banner
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('add-banner')}}" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Add Banner</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('manage-banner')}}" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Manage Banner</p>
                                    </a>
                                </li>

                            </ul>
                        </li>

                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Feature
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('add-feature')}}" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Add Feature</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('manage-feature')}}" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Manage Feature</p>
                                    </a>
                                </li>

                            </ul>
                        </li>

                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    About Company
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('add-about')}}" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Add About</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('manage-about')}}" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Manage About</p>
                                    </a>
                                </li>

                            </ul>
                        </li>

                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Services
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('add-service')}}" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Add Services</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('manage-service')}}" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Manage Services</p>
                                    </a>
                                </li>

                            </ul>
                        </li>

                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Testimonial
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('add-testimonial')}}" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Add Testimonial</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('manage-testimonial')}}" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Manage Testimonial</p>
                                    </a>
                                </li>

                            </ul>
                        </li>

                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Projects
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('add-project')}}" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Add Project</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('manage-project')}}" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Manage Project</p>
                                    </a>
                                </li>

                            </ul>
                        </li>

                    </ul>

                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Blog
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('add-blog')}}" class="nav-link">
                                <i class="far fa-dot-circle nav-icon"></i>
                                <p>Add Blog</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('manage-blog')}}" class="nav-link">
                                <i class="far fa-dot-circle nav-icon"></i>
                                <p>Manage Blog</p>
                            </a>
                        </li>

                    </ul>


                </li>

            </ul>
        </nav>

    </div>

</aside>
