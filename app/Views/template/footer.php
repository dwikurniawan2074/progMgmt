<div class="py-6 px-6 text-center">
    <p class="mb-0 fs-4">Project made by <a href="https://github.com/dwikurniawan2074/projectManagement.git" target="_blank" class="pe-1 text-primary text-decoration-underline">Kelompok 5 MSIB Trafindo</a></p>
</div>
</div>
</div>
</div>
<script>
    var span = document.getElementById('time');
    
    function time() {
        var d = new Date();
        var s = d.getSeconds();
        var m = d.getMinutes();
        var h = d.getHours();
        span.textContent =
            ("0" + h).substr(-2) + ":" + ("0" + m).substr(-2) + ":" + ("0" + s).substr(-2);
    }

    setInterval(time, 1000);
</script>
<script src="<?php echo base_url() ?>modernize/src/assets/libs/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url() ?>modernize/src/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url() ?>modernize/src/assets/js/sidebarmenu.js"></script>
<script src="<?php echo base_url() ?>modernize/src/assets/js/app.min.js"></script>
<script src="<?php echo base_url() ?>modernize/src/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
<script src="<?php echo base_url() ?>modernize/src/assets/libs/simplebar/dist/simplebar.js"></script>
<script src="<?php echo base_url() ?>modernize/src/assets/js/dashboard.js"></script>
</body>

</html>