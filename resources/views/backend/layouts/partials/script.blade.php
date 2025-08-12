<script src="{{ asset('backend/js/overlayscrollbars.browser.es6.min.js') }}"></script>

<script src="{{ asset('backend/js/popper.min.js') }}"></script>
<script src="{{ asset('backend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('backend/js/adminlte.js') }}"></script>
<script src="{{ asset('backend/js/jquery.js') }}"></script>
<script src="{{ asset('backend/js/sweetalert2@11.js') }}"></script>

{{-- Image Uploader  --}}
<script src="{{ asset('backend/js/imageUploader.js') }}"></script>

{{-- data table script --}}
<script src="{{ asset('/backend/DataTables/datatables.min.js') }}"></script>
<script>
    const SELECTOR_SIDEBAR_WRAPPER = ".sidebar-wrapper";
    const Default = {
        scrollbarTheme: "os-theme-light",
        scrollbarAutoHide: "leave",
        scrollbarClickScroll: true,
    };
    document.addEventListener("DOMContentLoaded", function() {
        const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
        if (
            sidebarWrapper &&
            typeof OverlayScrollbarsGlobal?.OverlayScrollbars !== "undefined"
        ) {
            OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
                scrollbars: {
                    theme: Default.scrollbarTheme,
                    autoHide: Default.scrollbarAutoHide,
                    clickScroll: Default.scrollbarClickScroll,
                },
            });
        }
    });
</script>

<script src="{{ asset('/backend/DataTables/sortable.min.js') }}"></script>
<script>
    const connectedSortables =
        document.querySelectorAll(".connectedSortable");
    connectedSortables.forEach((connectedSortable) => {
        let sortable = new Sortable(connectedSortable, {
            group: "shared",
            handle: ".card-header",
        });
    });

    const cardHeaders = document.querySelectorAll(
        ".connectedSortable .card-header",
    );
    cardHeaders.forEach((cardHeader) => {
        cardHeader.style.cursor = "move";
    });
</script>


<!-- jsvectormap -->
<script src="{{ asset('/backend/DataTables/jsvectormap.min.js') }}"></script>
<script src="{{ asset('/backend/DataTables/world.js') }}"></script> <!-- jsvectormap -->
<script src="{{ asset('/backend/select2/select2.min.js') }}"></script>
