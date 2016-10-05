</div>
</div>
<!--/.container-->
</div>
<!--/.wrapper-->

<div class="footer">
    <div class="container">
        <b class="copyright">&copy; 2016 - 122410101019 </b> Nur Kholis Mansur
    </div>
</div>
<script src="<?php echo base_url() ?>assets/scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets/scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets/scripts/flot/jquery.flot.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets/scripts/flot/jquery.flot.pie.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets/scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets/scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
<script>
    $(document).ready(function () {
        $('.datatable-1').dataTable();
        $('.dataTables_paginate').addClass("btn-group datatable-pagination");
        $('.dataTables_paginate > a').wrapInner('<span />');
        $('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
        $('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
    });
</script>
<script src="<?php echo base_url() ?>assets/scripts/common.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.table-message tbody tr').click(
                function ()
                {
                    $(this).toggleClass('resolved');
                }
        );
    });
</script>
</body>
