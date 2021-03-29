        </div>
        <!-- Page Content -->
            <div id="page-content-wrapper">
                <div class="container-fluid">
                    <div class="row">
                                <div calss="col-sm-6">
                                    <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">&#9776; Menu</a>
                                </div>
                    </div> 
                </div>
            </div>
            <script>
                $("#menu-toggle").click(function(e) {
                    e.preventDefault();
                    $("#wrapper").toggleClass("toggled");
                });
            </script>
    </body>
</html>
