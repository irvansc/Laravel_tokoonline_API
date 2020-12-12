@include('admin.template.header')

<body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">
  {{-- <div id="toaster"></div> --}}
  <div class="wrapper">

        @include('admin.template.sidebar')

    <div class="page-wrapper">
                <!-- Header -->
          @include('admin.template.navbar')

      <div class="content-wrapper">
        <div class="content">
            @yield('content')
        </div>



            <div class="right-sidebar-2">
            @include('admin.template.sidebar2')
            </div>

      </div>

        @include('admin.template.footer')

    </div>
  </div>

@include('admin.template.script')
