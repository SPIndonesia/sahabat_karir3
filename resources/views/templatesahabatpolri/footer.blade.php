<footer>
    <div class="footer clearfix mb-0 text-muted">
        <div class="float-start">
            <p>2021 &copy; Mazer</p>
        </div>
        <div class="float-end">
            <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a href="http://ahmadsaugi.com">A. Saugi</a></p>
        </div>
    </div>
</footer>
</div>
</div>
<script src="templatesahabatpolri/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="templatesahabatpolri/assets/js/bootstrap.bundle.min.js"></script>

<script src="templatesahabatpolri/assets/vendors/apexcharts/apexcharts.js"></script>
<script src="templatesahabatpolri/assets/js/pages/dashboard.js"></script>

<script src="templatesahabatpolri/assets/js/mazer.js"></script>

<script src="templatesahabatpolri/assets/vendors/jquery/jquery.min.js"></script>
<script src="templatesahabatpolri/assets/vendors/jquery-datatables/jquery.dataTables.min.js"></script>
<script src="templatesahabatpolri/assets/vendors/jquery-datatables/custom.jquery.dataTables.bootstrap5.min.js"></script>
<script src="templatesahabatpolri/assets/vendors/fontawesome/all.min.js"></script>
<script>
    // Jquery Datatable
    let jquery_datatable = $("#table1").DataTable()
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.js"></script>
<script>
    $(document).ready(function() {
        $('#materi').summernote({
            placeholder: "Ketik materi...",
            height: '400'
        });
    });
</script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<link rel="stylesheet" href="https://github.com/downloads/lafeber/world-flags-sprite/flags16.css">
<script type="text/javascript">
    console.log("Child loaded.");
    window.addEventListener('clickingSubmitButton', event => {
        document.getElementById('hiddenSubmitButton').click()
    });
</script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        var table = $('#example').DataTable({
            responsive: true
        });

        new $.fn.dataTable.FixedHeader(table);
    });
</script>
<script src="assets/vendors/jquery/jquery.min.js"></script>

</body>

</html>