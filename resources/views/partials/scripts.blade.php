<!-- OverlayScrollbars -->
<script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/browser/overlayscrollbars.browser.es6.min.js"></script>

<!-- Popper + Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js"></script>

<!-- AdminLTE -->
<script src="{{ asset('AdminLTE-master/dist/js/adminlte.js') }}"></script>

<!-- Optional: Sortable, ApexCharts, jsVectorMap -->
<script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/js/jsvectormap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/maps/world.js"></script>

<!-- Inisialisasi JS AdminLTE -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const sidebarWrapper = document.querySelector('.sidebar-wrapper');
    const isMobile = window.innerWidth <= 992;
    if (sidebarWrapper && typeof OverlayScrollbars !== 'undefined' && !isMobile) {
      OverlayScrollbars(sidebarWrapper, {
        scrollbars: { theme: 'os-theme-light', autoHide: 'leave', clickScroll: true }
      });
    }
  });
</script>

<!-- Script halaman spesifik -->
@stack('scripts')