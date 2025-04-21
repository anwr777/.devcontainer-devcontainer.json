<aside class="main-sidebar sidebar-light-primary elevation-4">
  <a href="{{ url('/') }}" class="brand-link">
    <img src="{{ asset('images/valex-logo.png') }}" alt="Valex Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Valex</span>
  </a>

  <div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ Auth::user()->avatar_url ?? asset('images/default-avatar.png') }}"
             class="img-circle elevation-2"
             alt="User Image">
      </div>
      <div class="info">
        <a href="{{ route('profile') }}" class="d-block">{{ Auth::user()->name }}</a>
        <small class="text-muted">{{ Auth::user()->email }}</small>
      </div>
    </div>

    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
        <li class="nav-item">
          <a href="{{ route('dashboard') }}"
             class="nav-link {{ Request::routeIs('dashboard') ? 'active' : '' }}">
            <i class="nav-icon fas fa-th-large"></i>
            <p>الصفحة الرئيسية</p>
          </a>
        </li>
        <li class="nav-item has-treeview {{ Request::is('tickets*') ? 'menu-open' : '' }}">
          <a href="#"
             class="nav-link {{ Request::is('tickets*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-ticket-alt"></i>
            <p>
              التذاكر
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('tickets.index') }}"
                 class="nav-link {{ Request::routeIs('tickets.index') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>قائمة التذاكر</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('tickets.create') }}"
                 class="nav-link {{ Request::routeIs('tickets.create') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>إضافة تذكرة</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview {{ Request::is('payments*') ? 'menu-open' : '' }}">
          <a href="#"
             class="nav-link {{ Request::is('payments*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-wallet"></i>
            <p>
              المدفوعات
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('payments.index') }}"
                 class="nav-link {{ Request::routeIs('payments.index') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>قائمة المدفوعات</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('payments.log') }}"
                 class="nav-link {{ Request::routeIs('payments.log') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>سجل الأحداث</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="{{ route('reports.index') }}"
             class="nav-link {{ Request::routeIs('reports.*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-chart-bar"></i>
            <p>التقارير</p>
          </a>
        </li>
      </ul>
    </nav>
  </div>
</aside>
