<!DOCTYPE html>
<html lang="en">


@include('administrator.layouts.partial._head')

<body class="sidebar-fixed">
  <div class="container-scroller">

    @include('administrator.layouts.partial._navbar')

    <div class="container-fluid page-body-wrapper">

      @include('administrator.layouts.partial._sidebar')

      <div class="main-panel">

        @yield('content')

        @include('administrator.layouts.partial._footer')

      </div>

    </div>

  </div>

  @include('administrator.layouts.partial._script')

</html>

