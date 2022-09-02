
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('')?>public/assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('')?>public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('')?>public/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('')?>public/assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins 
    <script src="<= base_url('')?>public/assets/vendor/chart.js/Chart.min.js"></script>-->

    <!-- Page level custom scripts 
    <script src="<= base_url('')?>public/assets/js/demo/chart-area-demo.js"></script>
    <script src="<= base_url('')?>public/assets/js/demo/chart-pie-demo.js"></script>
    -->

    <!--Select2 inicializador-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>
    <script>
        $(document).ready(function(){
            
            $('#myModal').on('shown.bs.modal', function () {
                $('#myInput').trigger('focus')
            })
        });
    </script>


</body>

</html>
