<aside class="left-sidebar bg-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
      <!-- Aplication Brand -->
      <div class="app-brand">
        <a href="/index.html" title="Sleek Dashboard">
          <svg class="brand-icon"xmlns="http://www.w3.org/2000/svg"preserveAspectRatio="xMidYMid"width="30"
            height="33"
            viewBox="0 0 30 33">
            <g fill="none" fill-rule="evenodd">
              <path class="logo-fill-blue"fill="#7DBCFF"d="M0 4v25l8 4V0zM22 4v25l8 4V0z"/>
              <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
            </g>
          </svg>
          <span class="brand-name text-truncate">Wkng Dashboard</span>
        </a>
      </div>
      <div class="sidebar-scrollbar">
        <ul class="nav sidebar-inner" id="sidebar-menu">
            <li  class="has-sub {{ ($currentAdminMenu == 'catalog') ? 'expand active' : ''}}" >
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard"
                aria-expanded="false" aria-controls="dashboard">
                <i class="mdi mdi-view-dashboard-outline"></i>
                <span class="nav-text">Catalog</span> <b class="caret"></b>
              </a>
              <ul  class="collapse {{ ($currentAdminMenu == 'catalog') ? 'show' : ''}}"  id="dashboard"
                data-parent="#sidebar-menu">
                <div class="sub-menu">
                      <li  class="{{ ($currentAdminSubMenu == 'product') ? 'active' : ''}}" >
                        <a class="sidenav-item-link" href="{{ url('admin/products')}}">
                          <span class="nav-text">Products</span>
                        </a>
                      </li>
                      <li class="{{ ($currentAdminSubMenu == 'category') ? 'active' : ''}}">
                        <a class="sidenav-item-link" href="{{ url('admin/categories')}}">
                          <span class="nav-text">Categories</span>
                        </a>
                      </li>
                      <li class="{{ ($currentAdminSubMenu == 'attribute') ? 'active' : ''}}">
                        <a class="sidenav-item-link" href="{{ url('admin/attributes')}}">
                          <span class="nav-text">Attributes</span>
                        </a>
                      </li>
                </div>
              </ul>
            </li>
            <li  class="has-sub {{ ($currentAdminMenu == 'order') ? 'expand active' : ''}}">
                <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#auth"
                    aria-expanded="false" aria-controls="dashboard">
                    <i class="mdi mdi-cart-outline"></i>
                    <span class="nav-text">Orders</span> <b class="caret"></b>
                </a>
                <ul class="collapse {{ ($currentAdminMenu == 'order') ? 'show' : ''}}"  id="auth"
                    data-parent="#sidebar-menu">
                    <div class="sub-menu">
                        <li  class="{{ ($currentAdminSubMenu == 'order') ? 'active' : ''}}" >
                            <a class="sidenav-item-link" href="{{ url('admin/orders')}}">
                            <span class="nav-text">Orders</span>
                            </a>
                        </li>
                        <li class="{{ ($currentAdminSubMenu == 'trashed-order') ? 'active' : ''}}">
                            <a class="sidenav-item-link" href="{{ url('admin/orders/trashed')}}">
                            <span class="nav-text">Trashed</span>
                            </a>
                        </li>
                        <li class="{{ ($currentAdminSubMenu == 'shipment') ? 'active' : ''}}">
                            <a class="sidenav-item-link" href="{{ url('admin/shipments')}}">
                            <span class="nav-text">Shipments</span>
                            </a>
                        </li>
                    </div>
                </ul>
            </li>
            <li  class="has-sub {{ ($currentAdminMenu == 'role-user') ? 'expand active' : ''}}" >
                <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#auth"
                    aria-expanded="false" aria-controls="dashboard">
                    <i class="mdi mdi-account-multiple-outline"></i>
                    <span class="nav-text">Users &amp; Roles</span> <b class="caret"></b>
                </a>
                <ul  class="collapse {{ ($currentAdminMenu == 'role-user') ? 'show' : ''}}"  id="auth"
                    data-parent="#sidebar-menu">
                    <div class="sub-menu">
                        <li  class="{{ ($currentAdminSubMenu == 'user') ? 'active' : ''}}" >
                            <a class="sidenav-item-link" href="{{ url('admin/users')}}">
                            <span class="nav-text">Users</span>
                            </a>
                        </li>
                        <li class="{{ ($currentAdminSubMenu == 'role') ? 'active' : ''}}">
                            <a class="sidenav-item-link" href="{{ url('admin/roles')}}">
                            <span class="nav-text">Roles</span>
                            </a>
                        </li>
                    </div>
                </ul>
            </li>
        </ul>
      </div>
      <div class="sidebar-footer">
        <hr class="separator mb-0" />
        <div class="sidebar-footer-content">
          <h6 class="text-uppercase">
            Cpu Uses <span class="float-right">40%</span>
          </h6>
          <div class="progress progress-xs">
            <div
              class="progress-bar active"
              style="width: 40%;"
              role="progressbar"
            ></div>
          </div>
          <h6 class="text-uppercase">
            Memory Uses <span class="float-right">65%</span>
          </h6>
          <div class="progress progress-xs">
            <div
              class="progress-bar progress-bar-warning"
              style="width: 65%;"
              role="progressbar"
            ></div>
          </div>
        </div>
      </div>
    </div>
  </aside>
